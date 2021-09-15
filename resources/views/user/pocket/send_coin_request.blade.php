@extends('user.master',['menu'=>'pocket'])
@section('title', isset($title) ? $title : '')
@section('style')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card cp-user-custom-card cp-user-wallet-card">
            <div class="card-body">

                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                <div class="cp-user-card-header-area">
                    <div class="cp-user-title">
                        <h4>{{__('Found Matches')}}</h4>
                    </div>
                    <div class="buttons">
                        <button class="btn cp-user-add-pocket" data-toggle="modal" data-target="#add-pocket">{{__('Send Request')}}</button>
                    </div>
                </div>

                <div class="cp-user-wallet-table">
                    <table class="table table-borderless cp-user-custom-table" width="100%">
                        <pre>
                        {{print_r($orders)}}
                        </pre>
                        <thead>
                            <tr>
                                <th class="all">{{__('Type')}}</th>
                                <th class="desktop">{{__('Amount')}}</th>
                                <th class="desktop">{{__('Referral Amount')}}</th>
                                <th class="desktop">{{__('Coin Type')}}</th>
                                <th class="desktop">{{__('Updated At')}}</th>
                                <!-- <th class="all">{{__('Action')}}</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- @if(isset($request_type)) -->
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->request_type }}</td>
                                <td>{{ $order->amount }}</td>
                                <td>{{ $order->amount }}</td>
                                <td>{{ $order->coin_type == 'Default' ? settings('coin_name') : $wallet->coin_type }}</td>
                                <td>{{ $order->updated_at }}</td>

                            </tr>
                            @endforeach
                            <!-- @endif -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- add pocket modal -->
<div class="modal fade cp-user-move-coin-modal" id="add-pocket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="{{asset('assets/user/images/close.svg')}}" class="img-fluid" alt="">
            </button>
            <div class="modal-body">
                <h3>{{__('Want To Send New Request')}}</h3>
                <form method="post" action="{{route('exchangeCoins')}}" id="walletCreateForm">
                    @csrf
                    <div class="form-group">
                        <label>{{__('Request Type')}}</label>
                        <select name="request_type" id="request_type" required class="form-control">
                            <option type="text" value="">Select Request Type</option>
                            <option value="buyer">Buy Coin</option>
                            <option value="seller">Sell Coin</option>
                        </select>
                    </div>


                    <!-- <div class="form-group">
                            <label>{{__('Request Type')}}</label>
                            <select name="request_type" id="" required class="form-control">
                                <option value="">{{__('Select request type')}}</option>
                                @if(isset($coins[0]))
                                    @foreach($coins as $coin)
                                        <option value="{{$coin->type}}"> {{$coin->type}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div> -->
                    <div class="form-group">
                        <label>{{__('Amount')}}</label>
                        <input type="text" name="amount" id="amount" required class="form-control" placeholder="{{__('Enter Amount')}}">
                    </div>
                    <div class="form-group">
                        <label>{{__('Coin Type')}}</label>
                        <select name="coin_type" id="coin_type" required class="form-control">
                            @if(isset($coins[0]))
                            @foreach($coins as $coin)
                            <option value="{{$coin->type}}"> {{$coin->type}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <button type="button" onclick="buysellRequest()" class="btn btn-block cp-user-move-btn">{{__('Send Buy Request')}}</button>
                    <div class="requestSell">
                         
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- move coin modal -->

@endsection

@section('script')
@endsection

<script>
    var request_route = "{{route('exchangeCoins')}}";

    function buysellRequest() {
        var form_data = {
            id: 'fr'
        };
        $.ajax({
            type: 'post',
            url: request_route,
            data: {
                _token: "{{csrf_token()}}",
                coin_type: $('#coin_type').val(),
                request_type: $('#request_type').val(),
                amount: $('#amount').val()
            },
            success: function(msg) {
                var data = JSON.parse(msg);
                console.log(JSON.parse(data));
                $('.requestSell')[0].innerText = "id: " + data['orders'][0].buyer_id + "   " + "amount: " + data['orders'][0].amount;
                // return false;
                // $('#add-pocket').modal('hide');
                // swal( "Successfully placed order", '', 'success' )
                // setTimeout(function() {
                //     location.reload();
                // }, 1000);
            }
        });
    }
</script>