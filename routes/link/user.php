<?php

Route::group(['prefix'=>'user','namespace'=>'user','middleware'=> ['auth','user', 'lang']],function () {

    Route::get('dashboard', 'DashboardController@userDashboard')->name('userDashboard');
    Route::get('show-notification', 'DashboardController@showNotification')->name('showNotification');
    Route::get('get-notification', 'DashboardController@getNotification')->name('getNotification');
    Route::get('faq', 'DashboardController@userFaq')->name('userFaq');
    Route::get('profile', 'ProfileController@userProfile')->name('userProfile');
    Route::post('nid-upload', 'ProfileController@nidUpload')->name('nidUpload');
    Route::post('pass-upload', 'ProfileController@passUpload')->name('passUpload');
    Route::post('driving-licence-upload', 'ProfileController@driveUpload')->name('driveUpload');
    Route::get('setting', 'SettingController@userSetting')->name('userSetting');
    Route::get('my-wallet', 'WalletController@myPocket')->name('myPocket');
    Route::get('referral', 'ReferralController@myReferral')->name('myReferral');

    Route::post('g2f-secret-save', 'SettingController@g2fSecretSave')->name('g2fSecretSave');
    Route::post('google-login-enable', 'SettingController@googleLoginEnable')->name('googleLoginEnable');
    Route::post('save-preference', 'SettingController@savePreference')->name('savePreference');

    Route::get('/generate/new-address', 'WalletController@generateNewAddress')->name('generateNewAddress');
    Route::get('/qrcode/generate', 'WalletController@qrCodeGenerate')->name('qrCodeGenerate');
    Route::get('/make-account-default-{account_id}-{ctype}', 'WalletController@makeDefaultAccount')->name('makeDefaultAccount');
    // Route::any('/Wallet-create', 'WalletController@createWallet')->name('createWallet');
    Route::any('/createWallet', 'WalletController@createWAllet')->name('createWAllet');
    Route::any('/Wallet-create', 'WalletController@createOrder')->name('createOrder');

    Route::get('/wallet-details-{id}', 'WalletController@walletDetails')->name('walletDetails');
    Route::post('/Withdraw/balance', 'WalletController@WithdrawBalance')->name('WithdrawBalance');
    Route::get('transaction-histories', 'WalletController@transactionHistories')->name('transactionHistories');
    Route::post('withdraw-coin-rate', 'WalletController@withdrawCoinRate')->name('withdrawCoinRate');
    Route::get('send-coinrequest', 'WalletController@exchangeCoins')->name('exchangeCoins');
    Route::post('send-coinrequest', 'WalletController@postexchangeCoins')->name('postexchangeCoins');

Route::post('post-coinrequest', 'WalletController@postexchangeCoins')->name('postexchangeCoins');
    // marketplace
    Route::group(['namespace'=>'marketplace','middleware'=> []],function () {
        Route::get('user-profile-{id}', 'MarketplaceController@userTradeProfile')->name('userTradeProfile');

        Route::get('offer', 'OfferController@myOffer')->name('myOffer');
        Route::get('create-offer', 'OfferController@createOffer')->name('createOffer');
        Route::get('edit-offer-{id}-{type}', 'OfferController@editOffer')->name('editOffer');
        Route::get('deactivate-offer-{id}-{type}', 'OfferController@deactiveOffer')->name('deactiveOffer');
        Route::get('activate-offer-{id}-{type}', 'OfferController@activateOffer')->name('activateOffer');
        Route::post('offer-save-process', 'OfferController@offerSaveProcess')->name('offerSaveProcess');


        Route::get('open-trade-{type}-{id}', 'MarketplaceController@openTrade')->name('openTrade')->middleware('phone.verify');
        Route::post('get-coin-trade-rate', 'MarketplaceController@getTradeCoinRate')->name('getTradeCoinRate');
        Route::get('my-trade', 'MarketplaceController@myTradeList')->name('myTradeList');
        Route::get('trade-{id}', 'MarketplaceController@tradeDetails')->name('tradeDetails');
        Route::post('cancel-trade', 'MarketplaceController@tradeCancel')->name('tradeCancel');
        Route::post('report-user-order', 'MarketplaceController@reportUserOrder')->name('reportUserOrder');
        Route::get('fund-escrow-{id}', 'MarketplaceController@fundEscrow')->name('fundEscrow');
        Route::get('released-escrow-{id}', 'MarketplaceController@releasedEscrow')->name('releasedEscrow');
        Route::post('place-order-process', 'MarketplaceController@placeOrder')->name('placeOrder');
        Route::post('upload-payment-sleep', 'MarketplaceController@uploadPaymentSleep')->name('uploadPaymentSleep');
        Route::post('send-order-message', 'MarketplaceController@sendOrderMessage')->name('sendOrderMessage');
        Route::post('get-country-payment-method', 'OfferController@getCountryPaymentMethod')->name('getCountryPaymentMethod');
        Route::post('save-user-agreement', 'MarketplaceController@saveUserAgreement')->name('saveUserAgreement');
    });
});

Route::group(['middleware'=> ['auth', 'lang']], function () {
    Route::post('/upload-profile-image', 'user\ProfileController@uploadProfileImage')->name('uploadProfileImage');
    Route::post('/user-profile-update', 'user\ProfileController@userProfileUpdate')->name('userProfileUpdate');
    Route::post('/phone-verify', 'user\ProfileController@phoneVerify')->name('phoneVerify');
    Route::get('/send-sms-for-verification', 'user\ProfileController@sendSMS')->name('sendSMS');
    Route::post('change-password-save', 'user\ProfileController@changePasswordSave')->name('changePasswordSave');
});

Route::get('exchange', 'user\marketplace\MarketplaceController@marketPlace')->name('marketPlace');
