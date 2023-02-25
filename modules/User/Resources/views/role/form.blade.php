<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">{{ isset($role) ? __('Update Role') : __('Add Role') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-end">
                                <div class="card-options card-header-styles switch pe-3">
                                    <div class="switch_section my-0">
                                        <div class="switch-toggle d-flex float-end mt-2 me-5">
                                            <a class="onoffswitch2">
                                                <input type="checkbox"  id="rolecheckall" class=" toggle-class onoffswitch2-checkbox"  >
                                                <label for="rolecheckall" class="toggle-class onoffswitch2-label" ></label>
                                            </a>
                                            <label class="form-label mb-2">Select All</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ isset($role) ? route('backend.roles.update', $role->id) : route('backend.roles.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @isset($role) @method('PUT') @endisset

                                <div class="box-body">
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-12"
                                            :label="__('Role')"
                                            name="name"
                                            id="name"
                                            :value="$role->name ?? null"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="box-head d-flex justify-content-between">
                                    <h3 class="title text-success">Permission</h3>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-12 mt-5">
                                        <div class="form-group">
                                            <div class="row">
                                                @foreach($permissions as $key => $permission)
                                                    <div class="col-xl-3">
                                                        <div class="switch_section">
                                                            <div class="switch-toggle d-flex">
                                                                <a class="onoffswitch2">
                                                                    <input type="checkbox" name="permission[]" id="myonoffswitch {{ $permission->id }}" class=" toggle-class onoffswitch2-checkbox rolecheck" Value="{{$permission->id}}"  {{ isset($role) ? ($role->hasPermissionTo($permission->name) ? 'checked' : '') : '' }} >
                                                                    <label for="myonoffswitch {{ $permission->id }}" class="toggle-class onoffswitch2-label" ></label>
                                                                </a>
                                                                <label class="form-label ps-3">{{ $permission->name }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3 d-flex">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{ route('backend.roles.index') }}"  class="btn btn-dark ms-3">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-core::layouts.backend.script>
        <script>
            "use strict";

            (function($)  {

                // select all switch
                $('#rolecheckall').on('click', function() {
                    if(this.checked){
                        $('.rolecheck').each(function(){
                            this.checked = true;
                        });
                    }else{
                        $('.rolecheck').each(function(){
                            this.checked = false;
                        });
                    }

                });

                // select all switch
                $('.rolecheck').on('click',function(){
                    if($('.rolecheck:checked').length == $('.rolecheck').length){
                        $('#rolecheckall').prop('checked',true);
                    }else{
                        $('#rolecheckall').prop('checked',false);
                    }
                });

            })(jQuery);


        </script>
    </x-core::layouts.backend.script>
</x-core::layouts.backend>

