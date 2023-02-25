<x-core::layouts.backend>
    <div class="content-page mb-5" style="min-height: calc(100vh - 240px);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body shadow">
                          <h4 class="text-success">Import File</h4>  
                        </div>  
                    </div>
                </div>
            </div>

            <div class="card mt-3" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box-body">
                                <form action="{{ route('backend.import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <x-core::ui.input
                                            group="col-md-12"
                                            :label="__('File')"
                                            type="file"
                                            name="file"
                                            id="file"
                                            required
                                        />

                                    <div class="col-lg-4 d-flex mt-3">
                                        <button type="submit" class="btn btn-success">Import</button>
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
