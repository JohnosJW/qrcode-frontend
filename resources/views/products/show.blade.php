
@extends('layouts.app')
@section('content')

    <h1 class="text-center"> Products </h1>
    <div class="row">
            <div class="card mr-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $qrcode['product_name'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">${{ $qrcode['amount'] }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $qrcode['company_name'] }}</h6>
                    <p class="card-text">  </p>
                    <a href="{{ $qrcode['link']['payment_page_link'] }}"
                       class="btn btn-primary">Pay with Paystack</a>
                </div>
            </div>

            <div class="card mr-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pay with Qrcode</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Scan the below with our QRCode app</h6>
                    <p class="card-text">
                        <img src="{{ $qrcode['link']['qrcode_link'] }}" />
                    </p>
                </div>
            </div>
    </div>

@endsection