@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('product') }}" method="get" class="form-inline md-form mr-auto mb-4">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="keyword"
                           value="{{ isset($keyword) ? $keyword : '' }}">
                    <button class="btn bg-success btn-rounded btn-sm my-0" type="submit">Search</button>
                </form>
                @foreach($products as $product)
                    <div class="pt-5">
                        <div class="card">
                            <img class="card-img-top" src="..." alt="image">
                            <div class="card-body">
                                <h5 class="card-title d-inline pr-2">{{ $product->name }}</h5>
                                <button type="button" class="btn btn-info disabled">
                                    Raintigs: {{ $product->rating }}</button>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('productpage', ['name' => $product->name]) }}" class="btn btn-primary">ნახვა</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pt-5">
                    <div class="card-footer">
                        {!! $products->appends(['keyword' => $keyword])->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
