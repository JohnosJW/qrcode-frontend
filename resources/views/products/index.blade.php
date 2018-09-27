

@foreach($qrcodes['data'] as $qrcode)

    <a class="btn btn-lg btn-info" href="" >
        {{ $qrcode['company_name'] }}
    </a> <br/>

@endforeach