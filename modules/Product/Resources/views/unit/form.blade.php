<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">{{ isset($unit) ? __('Update User') : __('Add User') }}</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-body">
                                <form action="{{ isset($unit) ? route('backend.units.update', $unit->id) : route('backend.units.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @isset($unit) @method('PUT') @endisset
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="$unit->name ?? null"
                                            required
                                        />
                                         <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Short Name')"
                                            name="short_name"
                                            id="short_name"
                                            :value="$unit->short_name ?? null"
                                            required
                                        />

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Base Unit') }}</label>
                                                <div>
                                                    <select class="form-control" name="base_unit" id="base_unit">
                                                        <option value="piece">{{ __('Piece') }}</option>
                                                        <option value="meter">{{ __('Meter') }}</option>
                                                        <option value="kilogram">{{ __('Kilogram') }}</option>
                                                        <option value="liter">{{ __('Liter') }}</option>
                                                        <option value="second">{{ __('Second') }}</option>
                                                        <option value="mole">{{ __('Mole') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex mt-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('backend.units.index') }}" class="btn btn-dark ms-3">Back</a>
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
