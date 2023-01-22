<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 200px);">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Unit</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form class="">
                            <div class="input-group my-3 my-lg-0">
                                <input type="text" class="form-control search" placeholder="Search" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <button class="input-group-text btn text-white" id="basic-addon2">
                                    <i class="ph-magnifying-glass-bold color-light"></i></button>
                            </div>
                        </form>
                        <div>
                            <a href="{{ route('backend.products.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-centered table-nowrap mb-0 rounded align-middle">
                            <thead class="text-light bg-success">
                                <tr>
                                    <th class="text-start border-0">{{ __('SL') }}</th>
                                    <th class="text-center border-0">{{ __('Vendor Name') }}</th>
                                    <th class="text-center border-0">{{ __('Supplier Name') }}</th>
                                    <th class="text-center border-0">{{ __('Category Name') }}</th>
                                    <th class="text-center border-0">{{ __('Brand Name') }}</th>
                                    <th class="text-center border-0">{{ __('Unit Name') }}</th>
                                    <th class="text-center border-0">{{ __('Name') }}</th>
                                    <th class="text-center border-0">{{ __('Sku') }}</th>
                                    <th class="text-center border-0">{{ __('Buying Price') }}</th>
                                    <th class="text-center border-0">{{ __('Selling Price') }}</th>
                                    <th class="text-center border-0">{{ __('Discount') }}</th>
                                    <th class="text-center border-0">{{ __('Price') }}</th>
                                    <th class="text-center border-0">{{ __('Stock') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-start">{{ $loop->iteration }}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end align-items-center">
                                            <a href="{{ route('backend.units.edit', $unit->id) }}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-success fs-3"></i>
                                            </a>

                                            <form action="{{ route('backend.units.destroy', $unit->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('delete')
                                                <button  class="btn btn-sm">
                                                    <i class="ph-trash-bold text-danger fs-3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core::layouts.backend>