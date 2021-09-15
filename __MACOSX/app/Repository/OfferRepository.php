<?php
namespace App\Repository;
use App\Model\Admin\Bank;
use App\Model\Buy;
use App\Model\Coin;
use App\Model\MembershipBonusDistributionHistory;
use App\Model\MembershipClub;
use App\Model\MembershipPlan;
use App\Model\MembershipTransactionHistory;
use App\Model\OfferPaymentMethod;
use App\Model\Sell;
use App\Model\Wallet;
use App\Services\CoinPaymentsAPI;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Null_;

class OfferRepository
{

    // save offer details buy and sell
    public function saveOffer($request)
    {
        $response = [
            'success' => false,
            'message' => __('Something went wrong')
        ];
        DB::beginTransaction();
        try {
            $coin =  Coin::where(['type' => $request->coin_type, 'status' => STATUS_ACTIVE])->first();
            if (empty($coin)) {
                $response = [
                    'success' => false,
                    'message' => __('Coin not found')
                ];
                return $response;
            }
            if ($request->offer_type == BUY) {
                if ($coin->is_buy != STATUS_ACTIVE) {
                    $response = [
                        'success' => false,
                        'message' => __('This coin is not active for buy')
                    ];
                    return $response;
                }
            }
            if ($request->offer_type == SELL) {
                if ($coin->is_sell != STATUS_ACTIVE) {
                    $response = [
                        'success' => false,
                        'message' => __('This coin is not active for sell')
                    ];
                    return $response;
                }
            }
            $data = [
                'coin_type' => $request->coin_type,
                'coin_id' => $coin->id,
                'country' => $request->country,
                'address' => $request->address,
                'currency' => $request->currency,
                'ip' => request()->ip(),
                'rate_type' => $request->rate_type,
                'minimum_trade_size' => $request->minimum_trade_size,
                'maximum_trade_size' => $request->maximum_trade_size,
                'headline' => $request->headline,
                'terms' => $request->terms,
                'instruction' => $request->instruction,
            ];

            if(empty($request->edit_id)) {
                $data['unique_code'] = uniqid().date('').time();
            }
            $data['market_price'] = convert_currency(1,$request->currency,$request->coin_type);
            $wallet = get_primary_wallet(Auth::id(), $request->coin_type);
            if (empty($request->edit_id)) {
                $data['user_id'] = Auth::id();
            }
            $data['wallet_id'] = $wallet->id;
            if ($request->rate_type == RATE_TYPE_DYNAMIC) {
                $data['price_type'] = $request->price_type;
                $data['rate_percentage'] = $request->rate_percentage;
                $data['coin_rate'] = get_current_market_price_rate($data['market_price'], $data['rate_percentage'],$data['price_type']);
            } else {
                $data['coin_rate'] = $request->coin_rate;
            }
            if (isset($request->edit_id)) {
                if ($request->offer_type == BUY) {
                    $offer = Buy::where(['id' => $request->edit_id, 'user_id' => Auth::id()])->first();
                } else {
                    $offer = Sell::where(['id' => $request->edit_id, 'user_id' => Auth::id()])->first();
                }
            }

            if (!empty($request->edit_id)) {
                if (isset($offer)) {
                    $offer->update($data);
                    if (isset($request->payment_methods[0])) {
                        $this->create_offer_payment_method($request->payment_methods, $offer->id, $request->offer_type);
                    }
                    $response = [
                        'success' => true,
                        'message' => __('Offer updated successfully')
                    ];
                } else {
                    $response = [
                        'success' => true,
                        'message' => __('Offer not found')
                    ];
                }
            } else {
                if ($request->offer_type == BUY) {
                    $create_offer = Buy::create($data);
                } else {
                    $create_offer = Sell::create($data);
                }

                if ($create_offer) {
                    if (isset($request->payment_methods[0])) {
                        $this->create_offer_payment_method($request->payment_methods, $create_offer->id, $request->offer_type);
                    }
                }
                $response = [
                    'success' => true,
                    'message' => __('Offer created successfully')
                ];
            }

        } catch (\Exception $e) {
            DB::rollBack();
            $response = [
                'success' => false,
                'message' => $e->getMessage()
            ];
            return $response;
        }
        DB::commit();
        return $response;
    }

    // create offer payment method
    public function create_offer_payment_method($payment_methods,$offer_id,$offer_type)
    {
        $offers = OfferPaymentMethod::where(['offer_id' => $offer_id, 'offer_type' => $offer_type])->get();
        if (isset($offers[0])) {
            OfferPaymentMethod::where(['offer_id' => $offer_id, 'offer_type' => $offer_type])->delete();
        }

        foreach ($payment_methods as $key => $method) {
            OfferPaymentMethod::create([
                'offer_id' => $offer_id,
                'payment_method_id' => $method,
                'offer_type' => $offer_type,
            ]);
        }

    }

    // active inactive offer
    public function activeDeactiveOffer($id,$type,$status)
    {
        $response = [
            'success' => true,
            'message' => __('Invalid Request')
        ];
        try {
            if ($type == BUY) {
                $offer = Buy::where(['id' => $id, 'user_id' => Auth::id()])->first();
            } else {
                $offer = Sell::where(['id' => $id, 'user_id' => Auth::id()])->first();
            }
            if(isset($offer)) {
                $offer->update(['status' => $status]);
                if($status == STATUS_ACTIVE) {
                    $message = __('Offer activated successfully');
                } else {
                    $message = __('Offer deactivated successfully');
                }
                $response = [
                    'success' => true,
                    'message' => $message
                ];
            } else {
                $response = [
                    'success' => true,
                    'message' => __('Offer not found')
                ];
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            $response = [
                'success' => false,
                'message' => $e->getMessage()
            ];
            return $response;
        }

        return $response;
    }

}
