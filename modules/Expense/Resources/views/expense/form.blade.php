<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">{{ isset($expense) ? __('Update Expense') : __('Add Expense')}}</h4>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-body">
                                <form action="{{ isset($expense) ? route('backend.expenses.update', $expense->id) : route('backend.expenses.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @isset($expense) @method('PUT') @endisset
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            type="date"
                                            :label="__('Date')"
                                            name="date"
                                            id="date"
                                            :value="optional($expense->date ?? null)->format('Y-m-d')"
                                            required
                                        />
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Title')"
                                            name="title"
                                            id="title"
                                            :value="$expense->title ?? null"
                                            required
                                        />

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Category') }}</label>
                                                <div>
                                                    <select class="form-select" name="category_id" id="category_id">
                                                        @foreach($expenses as $expense)
                                                            <option value="{{ $expense->id }}">{{ $expense->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Amount')"
                                            name="amount"
                                            id="amount"
                                            :value="$expense->amount ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-12"
                                            :label="__('Details')"
                                            type="textarea"
                                            name="details"
                                            id="description"
                                            rows="5"
                                            required
                                        />
                                    </div>
                                    <div class="col-lg-4 d-flex mt-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('backend.expenses.index')}}" class="btn btn-dark ms-3">Back</a>
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
            });
        </script>
    </x-core::layouts.backend.script>
</x-core::layouts.backend>