@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 item-photo">
                <img style="max-width:100%;" src="http://images4.fanpop.com/image/photos/22200000/White-present-white-22226613-2048-2193.jpg" />
            </div>
            <div class="col-md-6">
                <h1>{{ $product->first()->name }}</h1>

                <h5>₾ {{ $product->first()->price }}</h5>

                <p>{{ $product->first()->description }}</p>
            </div>
        </div>
    </div>
@endsection
