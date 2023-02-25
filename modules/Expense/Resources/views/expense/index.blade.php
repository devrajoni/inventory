<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 200px);">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Expense</h4>
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
                            <a href="{{ route('backend.expenses.create')}}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive mt-4">
                                <table class="table table-centered table-nowrap mb-0 rounded align-middle">
                                    <thead class="text-light bg-success">
                                        <tr>
                                            <th class="text-start border-0">{{ __('SL') }}</th>
                                            <th class="text-center border-0">{{ __('Date') }}</th>
                                            <th class="text-center border-0">{{ __('Title') }}</th>
                                            <th class="text-center border-0">{{ __('Category') }}</th>
                                            <th class="text-center border-0">{{ __('Amount') }}</th>
                                            <th class="text-center border-0">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($expenses as $expense)
                                            <tr>
                                                <td class="text-start">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $expense->date->format('d-m-Y') }}</td>
                                                <td class="text-center">{{ $expense->title }}</td>
                                                <td class="text-center">{{ $expense->category->name }}</td>
                                                <td class="text-center">{{ $expense->amount }}</td>
                                                <td class="text-end">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a href="{{ route('backend.expenses.edit', $expense->id)}}" class="btn btn-sm">
                                                            <i class="ph-note-pencil-bold text-success fs-3"></i>
                                                        </a>
                                                        <form action="{{ route('backend.expenses.destroy', $expense->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                            @csrf
                                                            @method('delete')
                                                            <button  class="btn btn-sm">
                                                                <i class="ph-trash-bold text-danger fs-3"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-core::layouts.backend>