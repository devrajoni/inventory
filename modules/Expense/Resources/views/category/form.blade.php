<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">{{ isset($expenseCategory) ? __('Update Category') : __('Add Category')}}</h4>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-body">
                                <form action="{{ isset($expenseCategory) ? route('backend.expense-categories.update', $expenseCategory->id) : route('backend.expense-categories.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @isset($expenseCategory) @method('PUT') @endisset
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="$expenseCategory->name ?? null"
                                            required
                                        />
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Status') }}</label>
                                                <select class="form-select" name="status" id="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 d-flex mt-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('backend.expense-categories.index')}}" class="btn btn-dark ms-3">Back</a>
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
                $('#status').val("{{$expenseCategory->status ?? ''}}");
            });
        </script>
    </x-core::layouts.backend.script>
</x-core::layouts.backend>