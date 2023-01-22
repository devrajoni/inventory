<x-core::layouts.backend>
	<div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Role</h4>  
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
                            <a href="{{ route('backend.roles.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class=" table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-light bg-success">
                                        <tr>
                                            <th class="text-start">SL</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">User</th>
                                            <th class="text-center">Permission</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $role)
                                            <tr>
                                                <td class="text-start">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $role->name }}</td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-end">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a href="{{ route('backend.roles.edit', $role->id) }}" class="btn btn-sm">
                                                            <i class="ph-note-pencil-bold text-success fs-3"></i>
                                                        </a>

                                                        <form action="{{ route('backend.roles.destroy', $role->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
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
