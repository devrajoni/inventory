<form method="POST" action="{{ route('backend.settings.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <x-core::ui.input
            group="col-6"
            :label="__('Company Name')"
            name="company_name"
            id="company_name"
            :value="setting('company_name')"
            required
        />

        <x-core::ui.input
            group="col-6"
            :label="__('Email')"
            type="email"
            name="company_email"
            id="company_email"
            :value="setting('company_email')"
            required
        />
    </div>

    <div class="row">
        <x-core::ui.input
            group="col-6"
            :label="__('Phone')"
            name="company_phone"
            id="company_phone"
            :value="setting('company_phone')"
            required
        />

        <x-core::ui.input
            group="col-6"
            :label="__('Address')"
            name="company_address"
            id="company_address"
            :value="setting('company_address')"
            required
        />
    </div>

    <div class="row">
        <x-core::ui.input
            group="col-md-3"
            :label="__('Country')"
            name="company_country"
            id="company_country"
            :value="setting('company_country')"
            
        />

        <x-core::ui.input
            group="col-md-3"
            :label="__('State')"
            name="company_state"
            id="company_state"
            :value="setting('company_state')"
            
        />

        <x-core::ui.input
            group="col-md-3"
            :label="__('City')"
            name="company_city"
            id="company_city"
            :value="setting('company_city')"
            
        />

        <x-core::ui.input
            group="col-md-3"
            :label="__('Postcode')"
            name="company_postcode"
            id="company_postcode"
            :value="setting('company_postcode')"
            
        />
    </div>

    <div class="row">
        <x-core::ui.input
            group="col-12"
            :label="__('Map')"
            type="textarea"
            name="map"
            id="map"
            :value="setting('map')"
            rows="3"
        />
    </div>

    <input type="hidden" name="tab" value="company" />

    <div class="row">
        <div class="col-6 mt-3">
            <button type="submit" class="btn1 btn-success me-3">{{ __('Update') }}</button>
        </div>
    </div>
</form>
