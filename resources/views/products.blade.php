@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
                <form class="form-inline my-2 my-lg-0" action="{{ route('product') }}" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                           name="keyword" value="{{ isset($keyword) ? $keyword : '' }}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($products as $product)
                    <div class="pt-5">
                        <div class="card">
                            <img class="card-img-top" src="..." alt="image">
                            <div class="card-body">
                                <h5 class="card-title d-inline pr-2">{{ $product->name }}</h5>
                                <button type="button" class="btn btn-info disabled">
                                    Rating: rating</button>
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
