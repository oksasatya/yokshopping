@extends('layouts.app')


@section('content')
    <section id="card">
        <div class="container">
            <div class="row pt-5 mw-100">
                <div class="col-lg-3 col-12 mb-3">
                    <a href="{{ route('admin.product.index') }}" class="text-decoration-none">
                        <div class="px-3 py-2 border-sedang "
                            style="background-color: rgba(255, 122, 0, 0.3); color: #A34E00">
                            <h1 class="fw-bold ms-4">{{ $total_products }}</h1>
                            <div class="d-flex align-items-center justify-content-between">
                                <i class="bi bi-people-fill fs-1"></i>
                                <div>
                                    <span class="fw-bold fs-5">Product</span>
                                    <span class="d-block text-mini">All Product of {{ Auth::user()->username }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
