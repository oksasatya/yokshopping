<form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data"
    class="row g-3 needs-validation" novalidate>
    @csrf
    @method('PUT')
    <!-- Modal -->
    <div class="modal fade" id="editProduct{{ $product->id }}" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editProductLabel" aria-hidden="true" data-bs-backdrop="static" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3 ">
                        <label for="name" class="form-label float-start">Nama
                            Produk</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Nama Produk" name="name"
                            value="{{ old('name') ? old('name') : $product->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 ">
                        <label for="sell_price" class="form-label float-start">Harga
                            Jual</label>
                        <input name="sell_price" class="form-control @error('sell_price') is-invalid @enderror"
                            id="sell_price" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" type="numeric" step="1"
                            value="{{ old('sell_price') ? old('sell_price') : $product->sell_price }} "
                            data-type="currency" placeholder="Rp.1,000,000.00">
                        @error('sell_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group  mb-3 ">
                        <label for="buy_price" class="form-label float-start">Harga
                            Beli</label>
                        <input name="buy_price" class="form-control @error('buy_price') is-invalid @enderror"
                            id="buy_price" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" type="numeric" step="1"
                            value="{{ old('buy_price') ? old('buy_price') : $product->buy_price }}"
                            data-type="currency" placeholder="Rp.1,000,000.00">
                        @error('buy_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group  mb-3">
                        Current image: <br>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="image" class="my-3"
                                width="120px">
                            <br>
                        @else
                            No image
                        @endif
                        <input id="image" name="image" type="file" class="form-control">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 ">
                        <label for="stock" class="form-label float-start">Stock</label>
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock"
                            name="stock" placeholder="Stock"
                            value="{{ old('stock') ? old('stock') : $product->stock }}">
                        @error('stock')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-green text-white" value="save" id="submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
