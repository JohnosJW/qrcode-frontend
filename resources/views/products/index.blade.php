
@extends('layouts.app')
@section('content')

    <h1 class="text-center"> Products </h1>
    <div class="row">
        @foreach($qrcodes['data'] as $qrcode)
            <div class="card mr-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $qrcode['product_name'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">${{ $qrcode['amount'] }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $qrcode['company_name'] }}</h6>
                    <p class="card-text">  </p>
                    <a href="{{ route('products.show', ['id' => $qrcode['id']]) }}" class="btn btn-primary">Buy now</a>
                    <a href="{{ $qrcode['link']['qrcode_link'] }}" class="card-link">Buy from Qrcode Generator</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection