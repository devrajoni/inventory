<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 200px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                            <h4 class="text-success">Setting</h4>  
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 mb-5" style="min-height: calc(100vh - 250px);">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link text-bold {{ $tab == 'website' ? 'active' : '' }}" href="{{ route('backend.settings.index', 'website') }}" role="tab">
                                        {{__('Website')}}
                                    </a>

                                    <a class="nav-item nav-link text-bold {{ $tab == 'company' ? 'active' : '' }}" href="{{ route('backend.settings.index','company') }}" role="tab">
                                        {{__('Company')}}
                                    </a>

                                    <a class="nav-item nav-link text-bold {{ $tab == 'social' ? 'active' : '' }}" href="{{ route('backend.settings.index','social') }}" role="tab">
                                        {{__('Social')}}
                                    </a>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                @if ($tab == 'website')
                                    <div class="tab-pane fade active show" id="website" role="tabpanel">
                                        @include('setting::_website')
                                    </div>
                                @endif

                                @if ($tab == 'company')
                                    <div class="tab-pane fade active show" id="company" role="tabpanel">
                                        @include('setting::_company')
                                    </div>
                                @endif

                                @if ($tab == 'social')
                                    <div class="tab-pane fade active show" id="social" role="tabpanel">
                                        
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
