<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Brand</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
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
                            <a href="{{ route('backend.attendence.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-light bg-success">
                                        <tr>
                                            <th class="text-start">SL</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-end">Attendence</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $user)
                                            <tr>
                                                <td class="text-start">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $user->name ?? null}}</td>
                                                <td class=""  style="text-right;">
                                                    <div class="d-flex">
                                                    <div class="form-check" style="text-right;">
                                                      <input class="form-check-input" type="radio" name="present[]" id="present[]">
                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                        Present
                                                      </label>
                                                    </div>
                                                    <div class="form-check" style="margin-left: 20px; text-right;">
                                                      <input class="form-check-input" type="radio" name="absense[]" id="absense[]" checked>
                                                      <label class="form-check-label" for="flexRadioDefault2">
                                                        Absense
                                                      </label>
                                                    </div>
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
