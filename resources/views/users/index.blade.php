@extends('layouts.app')


@section('content')
    <section id="hero">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel/bg1.jpg') }}" class="carousel-bg" alt="carousel1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel/bg2.jpg') }}" class="carousel-bg" alt="carousel2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel/bg3.jpg') }}" class="carousel-bg" alt="carousel3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <section class="my-5" id="card-product">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 d-inline mt-3 mb-4">
                    <form action="{{ route('home') }}" method="GET" role="search">
                        <div class="input-group">
                            <input type="text" name="search" placeholder="search Product" class="form-control"
                                value="{{ Request::get('search') }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search" aria-hidden="true"></i>Search
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="container" style="background-color:#C0C0C0 ">
            <div class="row">
                @if (count($products) == 0)
                    <div class="text-center">
                        <p class="text-muted mt-3 m-0">No Product Foud</p>
                    </div>
                @elseif ($products->get('search') == '')
                    @foreach ($products as $product)
                        <div class="card card-product col-sm-2 col-xs-6 mb-4 shadow-lg my-3 mx-3">
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-product" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="text-danger text-decoration-line-through fst-italic fw-light">
                                    {{ $product->buy_price }}</p>
                                <p class="text-dark fw-bold">{{ $product->sell_price }}</p>
                                <small class="text-muted">Stock:
                                    {{ $product->stock }}</small>
                            </div>
                            <a href="{{ route('show', [$product->id]) }}" class="stretched-link"></a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="container mt-4">
            <div class="col-md-12 d-flex justify-content-center">
                <td colspan=10>
                    {{ $products->links() }}
                </td>
            </div>
        </div>
    </section>
@endsection
