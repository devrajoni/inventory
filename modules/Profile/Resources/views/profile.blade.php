<x-core::layouts.backend>
	<div class="content-page mb-5" style="min-height: calc(100vh - 190px);">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Profile</h4>  
                        </div>  
                    </div>
                </div>
            </div>
			<div class="row mt-5">
				<div class="col-lg-4">
			   		<div class="card" style="border-radius: 10px;">
			   			<div class="card-body shadow text-center py-5">
			   				  <img src="{{auth()->user()->profileImage}}" class="img-fluid rounded" width="250"
                            height="250" alt="user" />
			   			</div>	
			   		</div>
				</div>
				<div class="col-lg-8">
			   		<div class="card" style="border-radius: 10px;">
			   			<div class="card-body shadow">
			   				 <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link text-bold {{ $tab == 'profile' ? 'active' : '' }}" id="profile" href="{{ route('backend.profile.index', 'profile') }}"
                                    role="tab" ><b>{{__('Profile')}}</b></a>
                                <a class="nav-item nav-link text-bold {{ $tab == 'edit_profile' ? 'active' : '' }}" id="edit_profile"  href="{{ route('backend.profile.index','edit_profile') }}"
                                    role="tab"><b>{{__('Edit')}}</b></a>
                                <a class="nav-item nav-link text-bold {{ $tab == 'change_password' ? 'active' : '' }}" id="change_password"  href="{{ route('backend.profile.index','change_password') }}"
                                    role="tab"><b>{{__('Change Password')}}</b></a>
                            </div>
                        </nav>
                        <div class="tab-content text-left" id="nav-tabContent">
                            @if($tab == 'profile')
                            <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                >
                                <div class="row border-bottom py-2 mt-3">
                                    <div class="col-sm-3">
                                        {{__('Name')}}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->name ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{__('Email')}}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->email ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{__('Username')}}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->username ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{__('Phone')}}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->phone ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($tab == 'edit_profile')
                            <div class="tab-pane fade active show" id="edit_profile" role="tabpanel">
                                <form method="POST" action="{{ route('backend.profile.update', auth()->id()) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-lg-12 mt-3"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="auth()->user()->name ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-lg-12"
                                            :label="__('Email')"
                                            type="email"
                                            name="email"
                                            id="email"
                                            :value="auth()->user()->email ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-lg-12"
                                            :label="__('Phone')"
                                            name="phone"
                                            id="phone"
                                            :value="auth()->user()->phone ?? null"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-lg-12"
                                            :label="__('Username')"
                                            name="username"
                                            id="username"
                                            :value="auth()->user()->username ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-lg-12"
                                            :label="__('Image')"
                                            type="file"
                                            name="image"
                                            id="image"
                                            :value="isset(auth()->user()->image) ? asset(auth()->user()->image) : null"
                                            accept="image/*"
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn1 btn-success">{{ __('Update') }}</button>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                            @endif
                            @if($tab == 'change_password')
                            <div class="tab-pane fade active show" id="change_password" role="tabpanel">
                                <form method="POST" action="{{ route('backend.password_change', auth()->id()) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-lg-12 mt-3"
                                            :label="__('Current Password')"
                                            type="password"
                                            name="current_password"
                                            id="current_password"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-lg-12"
                                            :label="__('New Password')"
                                            type="password"
                                            name="password"
                                            id="password"
                                            required
                                        />

                                        <x-core::ui.input
                                            group="col-lg-12"
                                            :label="__('Confirm Password')"
                                            type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn1 btn-success">{{ __('Change Password') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endif
                        </div>
			   			</div>	
			   		</div>
				</div>
			</div>
		</div>
	</div>
</x-core::layouts.backend>
