<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 200px);">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Product</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 10px;">
				<div class="d-flex justify-content-end p-4">
					<a href="{{ route('backend.products.index') }}" class="btn btn-success ms-1">Back</a>
				</div>
                <div class="card-body " style="display:flex; justify-content:center; align-items:center; height:100%;">
                    <div class="row" >
                        <div class="col-lg-12">
                        	<div class="row">
                        		<div class="col-lg-3">Vendor</div>
                        		<div class="col-lg-7">{{ $product->vendor->name ?? 'N/A'}}</div>
                        	</div>
        	            	<div class="row">
                        		<div class="col-lg-3">Supplier</div>
                        		<div class="col-lg-9">{{ $product->supplier->name ?? 'N/A'}}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Category</div>
                        		<div class="col-lg-9">{{ $product->category->name ?? 'N/A'}}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Brand</div>
                        		<div class="col-lg-9">{{ $product->brand->name ?? 'N/A'}}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Unit</div>
                        		<div class="col-lg-9">{{ $product->unit->name ?? 'N/A'}}</div>
                        	</div>
                    	    <div class="row">
                        		<div class="col-lg-3">Name</div>
                        		<div class="col-lg-9">{{ $product->name }}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">SKU</div>
                        		<div class="col-lg-9">{{ $product->sku }}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Buying Price</div>
                        		<div class="col-lg-9">{{ $product->buying_price }}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Selling</div>
                        		<div class="col-lg-9">{{ $product->selling_price }}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Discount</div>
                        		<div class="col-lg-9">{{ $product->discount }}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Price</div>
                        		<div class="col-lg-9">{{ $product->price }}</div>
                        	</div>
    	                    <div class="row">
                        		<div class="col-lg-3">Stock</div>
                        		<div class="col-lg-9">{{ $product->in_stock }}</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-3">Status</div>
                        		<div class="col-lg-9">{{ $product->status }}</div>
                        	</div>
                        	<div class="row my-3">
                        		<div class="col-lg-12">
                        			<img src="{{ $product->getFirstMediaUrl('products') }}" style="height:300px; width: 300px;">
                        		</div>
                        		
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core::layouts.backend>