@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach($products as $product)
                    <div class="pt-5">
                        <div class="card">
                            <img class="card-img-top" src="..." alt="image">
                            <div class="card-body">
                                <h5 class="card-title d-inline pr-2">{{ $product->name }}</h5>
                                <button type="button" class="btn btn-info disabled">Raintigs: {{ $product->ratings }}</button>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="#" class="btn btn-primary">ნახვა</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="card-footer">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
