<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Add Product</h4>  
                        </div>  
                    </div>
                </div>
            </div>

            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-body">
                                <form action="{{ isset($product) ? route('backend.products.update', $product->id) : route('backend.products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @isset($product) @method('PUT') @endisset
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Vendor') }}</label>
                                                <div>
                                                    <select class="form-select" name="vendor_id" id="vendor_id">
                                                        @foreach($vendors as $vendor)
                                                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Supplier') }}</label>
                                                <div>
                                                    <select class="form-select" name="supplier_id" id="supplier_id">
                                                        @foreach($suppliers as $supplier)
                                                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Category') }}</label>
                                                <div>
                                                    <select class="form-select" name="category_id" id="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Brand') }}</label>
                                                <div>
                                                    <select class="form-select" name="brand_id" id="brand_id">
                                                        @foreach($brands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Unit') }}</label>
                                                <div>
                                                    <select class="form-select" name="unit_id" id="unit_id">
                                                        @foreach($units as $unit)
                                                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="$product->name ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-12"
                                            :label="__('Description')"
                                            type="textarea"
                                            name="description"
                                            id="description"
                                            :value="$product->description ?? null"
                                            rows="3"
                                            required
                                        />

                                    </div>
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Image')"
                                            type="file"
                                            name="image"
                                            id="image"
                                            :value="$product->image ?? null"
                                        />
                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Sku')"
                                            name="sku"
                                            id="sku"
                                            :value="$product->sku ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Buying Price')"
                                            name="buying_price"
                                            id="buying_price"
                                            :value="$product->buying_price ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Selling Price')"
                                            name="selling_price"
                                            id="selling_price"
                                            :value="$product->selling_price ?? null"
                                            required
                                        />
                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Discount')"
                                            name="discount"
                                            id="discount"
                                            :value="$product->discount ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-md-4"
                                            :label="__('Price')"
                                            name="price"
                                            id="price"
                                            :value="$product->price ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('In Stock')"
                                            name="in_stock"
                                            id="'in_stock"
                                            :value="$product->in_stock ?? null"
                                            required
                                        />
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Status') }}</label>
                                                <select class="form-select" name="status" id="status">
                                                    <option value="Active">{{ __('Active') }}</option>
                                                    <option value="Inactive">{{ __('Inactive') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-4 d-flex mt-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('backend.products.index') }}" class="btn btn-dark ms-3">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-core::layouts.backend.script>
        <script>
            $(document).ready(function(){
                $('#description').summernote({
                    tabsize: 2,
                    height: 250
                });
                $('#vendor_id').val("{{$product->vendor_id ?? ''}}");
                $('#supplier_id').val("{{$product->supplier_id ?? ''}}");
                $('#category_id').val("{{$product->category_id ?? ''}}");
                $('#brand_id').val("{{$product->brand_id ?? ''}}");
                $('#unit_id').val("{{$product->unit_id ?? ''}}");
                $('#status').val("{{$product->status ?? ''}}");
            });
        </script>
    </x-core::layouts.backend.script>
</x-core::layouts.backend>
