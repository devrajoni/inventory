<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">{{ isset($brand) ? __('Update Brand') : __('Add Brand') }}</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-body">
                                <form action="{{ isset($brand) ? route('backend.brands.update', $brand->id) : route('backend.brands.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @isset($brand) @method('PUT') @endisset
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="$brand->name ?? null"
                                            required
                                        />
                                         <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Logo')"
                                            type="file"
                                            name="logo"
                                            id="logo"
                                        />

                                    </div>
                                     <div class="col-lg-4 d-flex mt-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{ route('backend.brands.index') }}" class="btn btn-dark ms-3">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core::layouts.backend>