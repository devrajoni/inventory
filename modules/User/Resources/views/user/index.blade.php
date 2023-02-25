<x-core::layouts.backend>
	<div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">User</h4>  
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
                            <a href="{{ route('backend.users.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
					<div class="row mt-5">
		                <div class="col-lg-12">
		                	<div class="table-responsive">
		                		<table class="table">
		                			<thead class="text-light bg-success">
		                				<tr>
		                					<th class="text-start">SL</th>
											<th class="text-center">Role</th>
		                					<th class="text-center">Name</th>
		                					<th class="text-center">Email</th>
		                					<th class="text-center">Phone</th>
		                					<th class="text-center">Post Code</th>
		                					<th class="text-center">Status</th>
		                					<th class="text-end">Action</th>
		                				</tr>
		                			</thead>
		                			<tbody>
		                				@foreach($users as $user)
			                				<tr>
			                					<td class="text-start">{{ $loop->iteration }}</td>
												<td class="text-center">{{ $user->role->name ?? 'N/A' }}</td>
			                					<td class="text-center">{{ $user->name }}</td>
			                					<td class="text-center">{{ $user->email }}</td>
			                					<td class="text-center">{{ $user->phone }}</td>
		                						<td class="text-center">{{ $user->meta->postcode }}</td>
			                					<td class="text-center">{{ $user->status }}</td>
			                					<td class="text-end">  
		                						    <div class="d-flex justify-content-end align-items-center">
		                                                <a href="{{ route('backend.users.edit', $user->id) }}" class="btn btn-sm">
		                                                    <i class="ph-note-pencil-bold text-success fs-3"></i>
		                                                </a>

		                                                <form action="{{ route('backend.users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
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
