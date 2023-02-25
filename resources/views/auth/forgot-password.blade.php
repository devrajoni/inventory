<x-auth>
    <main class="login-form">
        <div class="container d-flex align-items-center vh-100" style="text-align: center;">
            <div class="row gx-0 gy-0 justify-content-center bg-white" style="border-radius: 15px; overflow: hidden; width: 40%;">
                <div class="col-lg-9 py-2 mt-3">
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="row bg-white">
                            <x-core::ui.input
                                group="col-md-12"
                                :label="__('Email')"
                                type="email"
                                name="email"
                                id="email"
                                required
                            />
                        </div>
                        <button class="btn1 btn-success mt-3 mb-3">{{ __('Email Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
   </main>
</x-auth>
