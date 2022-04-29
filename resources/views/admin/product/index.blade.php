@extends('layouts.app')


@section('content')
    <div class="col-md-5 text-start ms-2 mt-5">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="col-md-10 text-end mb-4 mt-5">
        <button type="button" class="btn btn-green text-white" data-bs-toggle="modal" data-bs-target="#createProduct"
            id="open">
            Create Product
        </button>
    </div>
    <div class="container">
        <div class="col-md-10 align-items-center mt-2 ms-2 overflow-hidden">
            <table class="table table-bordered shadow-sm">
                <thead class="table-warning">
                    <tr>
                        <th><b>Product</b></th>
                        <th><b>Harga Jual</b></th>
                        <th><b>Harga Beli</b></th>
                        <th><b>Image</b></th>
                        <th><b>stock</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($products) == 0)
                        <div class="text-center">
                            <p class="text-muted mt-3 m-0">Belum ada product yang dibuat</p>
                        </div>
                    @else
                        @foreach ($products as $product)
                            <tr class="table-light">
                                <td>{{ $product->name }}</td>
                                <td class="text-small">{{ $product->sell_price }}</td>
                                <td class="text-small">{{ $product->buy_price }}</td>
                                <td>
                                    @if ($product->image != null)
                                        <img src="{{ asset('storage/' . $product->image) }}" class="rounded-circle"
                                            style="width:75px; height:75px;" />
                                    @else
                                        <img src="https://source.unsplash.com/1200x400?shoes" class="rounded-circle"
                                            style="width:75px; height:75px;" />
                                    @endif
                                </td>
                                <td>{{ $product->stock }}</td>
                                <td>

                                    <button type="button" class="btn btn-warning py-1 mt-2 btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}"
                                        data-community="" id="open">
                                        Edit
                                    </button>
                                    <a href="{{ route('admin.product.show', [$product->id]) }}"
                                        class="btn btn-primary text-white p-1 mt-2">Show</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger text-white btn-sm mt-2 p-1"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel{{ $product->id }}">
                                                        Delete Confirmation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form method="POST"
                                                        action="{{ route('admin.product.destroy', [$product->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="btn btn-danger" value="delete">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @include('admin.modal.edit')
                        @endforeach
                    @endif
                </tbody>
            </table>
            <tfoot>
                <tr>
                    <td colspan=10>
                        {{ $products->links() }}
                    </td>
                </tr>
            </tfoot>
        </div>
    </div>
    @include('admin.modal.create')

@endsection
