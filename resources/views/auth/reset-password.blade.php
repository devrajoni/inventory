<x-auth>
    <main class="login-form">
        <div>
            <div class="container d-flex align-items-center vh-100" style="text-align: center;">
                <div class="row gx-0 gy-0 justify-content-center bg-white" style="border-radius: 15px; overflow: hidden; width: 40%;">

                    <div class="col-lg-9 py-2 mt-3">
                        <form action="{{ route('password.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
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

                            <div class="row bg-white">
                                <x-core::ui.input
                                    group="col-md-12"
                                    :label="__('Password')"
                                    type="password"
                                    name="password"
                                    id="password"
                                    required
                                />
                            </div>

                            <div class="row bg-white">
                                <x-core::ui.input
                                    group="col-md-12"
                                    :label="__('Confirm Password')"
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    required
                                />
                            </div>
                            <button class="btn1 btn-success mt-3 mb-3">{{ __('Reset Password') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </main>
</x-auth>
