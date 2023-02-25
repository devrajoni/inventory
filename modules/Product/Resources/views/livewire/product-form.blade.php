<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="label-control">{{ __('Vendor') }}</label>
                    <div>
                        <select class="form-control" name="vendor_id" wire:model.defer="vendor_id" id="vendor_id">
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label class="label-control">{{ __('Supplier') }}</label>
                    <div>
                        <select class="form-control" name="supplier_id" wire:model.defer="supplier_id" id="supplier_id">
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label class="label-control">{{ __('Category') }}</label>
                    <div>
                        <select class="form-control" name="category_id" wire:model.defer="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforach
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
                        <select class="form-control" name="brand_id" wire:model.defer="brand_id" id="brand_id">
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label class="label-control">{{ __('Unit') }}</label>
                    <div>
                        <select class="form-control" name="unit_id" wire:model.defer="unit_id" id="unit_id">
                        </select>
                    </div>
                </div>
            </div>

            <x-core::ui.input
                group="col-md-4"
                :label="__('Name')"
                name="name"
                wire:model.defer="name"
                id="name"
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
                wire:model.defer="description"
                rows="3"
                required
            />
        </div>
        <div class="row">
            <x-core::ui.input
                group="col-md-4"
                :label="__('Sku')"
                name="sku"
                wire:model.defer="sku"
                id="sku"
                required
            />

            <x-core::ui.input
                group="col-md-4"
                :label="__('Buying Price')"
                name="buying_price"
                wire:model.defer="buying_price"
                id="buying_price"
                required
            />

              <x-core::ui.input
                group="col-md-4"
                :label="__('Selling Price')"
                name="selling_price"
                wire:model.defer="selling_price"
                id="selling_price"
                required
            />
        </div>

        <div class="row">
            <x-core::ui.input
                group="col-md-4"
                :label="__('Discount')"
                name="discount"
                wire:model.defer="discount"
                id="discount"
                required
            />

            <x-core::ui.input
                group="col-md-4"
                :label="__('Price')"
                name="price"
                wire:model.defer="price"
                id="price"
                required
            />

            <x-core::ui.input
                group="col-md-4"
                :label="__('In Stock')"
                name="in_stock"
                wire:model.defer="in_stock"
                id="'in_stock"
                required
            />
        </div>

         <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="label-control">{{ __('Status') }}</label>
                    <div>
                        <select class="form-control" name="status" wire:model.defer="status" id="status">
                            <option value="1">{{ __('Active') }}</option>
                            <option value="2">{{ __('Inactive') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('backend.products.index') }}" class="btn btn-dark ms-3">Back</a>
        </div>
    </form>
</div>
