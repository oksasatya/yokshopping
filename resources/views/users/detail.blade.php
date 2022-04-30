@extends('layouts.app')


@section('content')
    <section id="show" class="my-5 py-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-md-8">
                    <h2 class="text-center">Detail Product</h2>
                    <div class="card mb-3" style="max-width: 840px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{ route('home') }}" class="text-decoration-none"><i
                                            class="fa fa-arrow-left fs-5" aria-hidden="true"></i><span
                                            class="ms-2">Back</span></a>
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="text-danger text-decoration-line-through fst-italic fw-light">
                                        {{ $product->buy_price }}</p>
                                    <p class="text-dark fw-bold">{{ $product->sell_price }}</p>
                                    <small class="text-muted">Stock:
                                        {{ $product->stock }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
