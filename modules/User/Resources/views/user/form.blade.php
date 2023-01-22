<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">{{ isset($user) ? __('Update User') : __('Add User') }}</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="box-body">
                                    <form action="{{ isset($user) ? route('backend.users.update', $user->id) :  route('backend.users.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @isset($user) @method('PUT') @endisset
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Role ID') }}</label>
                                                <div>
                                                    <select class="form-control" name="role_id" id="role_id">
                                                        @foreach($role as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="$user->name ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Phone')"
                                            name="phone"
                                            id="phone"
                                            :value="$user->phone ?? null"
                                            required
                                        />

                                          <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Email')"
                                            type="email"
                                            name="email"
                                            id="email"
                                            :value="$user->email ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Username')"
                                            name="username"
                                            id="username"
                                            :value="$user->username ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Password')"
                                            type="password"
                                            name="password"
                                            id="password"
                                            required
                                        />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Status') }}</label>
                                                <div>
                                                    <select class="form-control" name="status" id="status">
                                                        <option value="active">{{ __('Active') }}</option>
                                                        <option value="inactive">{{ __('Inactive') }}</option>
                                                        <option value="pending">{{ __('Pending') }}</option>
                                                        <option value="declined">{{ __('Declined') }}</option>
                                                        <option value="banned">{{ __('Banned') }}</option>
                                                        <option value="closed">{{ __('Closed') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Address Line One')"
                                            name="address_line_one"
                                            id="address_line_one"
                                            :value="$user->meta->address_line_one ?? null"
                                            required
                                        />
                                    </div>
                                     <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Address Line Two')"
                                            name="address_line_two"
                                            id="address_line_two"
                                            :value="$user->meta->address_line_two ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('Country')"
                                            name="country"
                                            id="country"
                                            :value="$user->meta->country ?? null"
                                            required
                                        />
                                    </div>
                                    </div>
                                     <div class="row">
                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('State')"
                                            name="state"
                                            id="state"
                                            :value="$user->meta->state ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-md-6"
                                            :label="__('City')"
                                            name="city"
                                            id="city"
                                            :value="$user->meta->state ?? null"
                                            required
                                        />
                                    </div>
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-12"
                                            :label="__('Postcode')"
                                            name="postcode"
                                            id="postcode"
                                            :value="$user->meta->postcode ?? null"                                       required
                                        />

                                    </div>
                                    <div class="col-lg-4 d-flex mt-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{ route('backend.users.index') }}" class="btn btn-dark ms-3">Back</a>
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
<x-core::layouts.backend.script>
    <script>
        $(document).ready(function(){
            $('#role_id').val("{{$user->role_id ?? ''}}");
            $('#status').val("{{$user->status ?? ''}}");
        });
    </script>
</x-core::layouts.backend.script>
