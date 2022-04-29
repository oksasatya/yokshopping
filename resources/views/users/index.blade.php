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
        <div class="container" style="background-color:#C0C0C0 ">
            <div class="row">
                <div class="card card-product col-sm-2 col-xs-6 mb-4 shadow-lg my-3 mx-3">
                    <img src="..." class="card-img-product" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card card-product col-sm-2 col-xs-6 mb-4 shadow-lg my-3 mx-3">
                    <img src="..." class="card-img-product" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card card-product col-sm-2 col-xs-6 mb-4 shadow-lg my-3 mx-3">
                    <img src="..." class="card-img-product" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card card-product col-sm-2 col-xs-6 mb-4 shadow-lg my-3 mx-3">
                    <img src="..." class="card-img-product" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card card-product col-sm-2 col-xs-6 mb-4 shadow-lg my-3 mx-3">
                    <img src="..." class="card-img-product" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
