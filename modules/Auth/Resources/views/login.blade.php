<x-auth::layouts.auth>
	 <main class="login-form">
        <div class="container d-flex align-items-center vh-100" style="text-align: center;">
            <div class="row gx-0 gy-0 justify-content-center bg-white" style="border-radius: 15px; overflow: hidden;">
             
                <div class="col-lg-9 py-2">
                    <h1 class="p-2">Login</h1>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf     
                        <div class="row bg-white">
                            <x-core::ui.input
                                group="col-lg-12"
                                :label="__('Email')"
                                type="email"
                                name="email"
                                id="email"
                                required
                            />

                              <x-core::ui.input
                                group="col-lg-12"
                                :label="__('Password')"
                                type="password"
                                name="password"
                                id="password"
                                required
                            />
                        </div>
                        <button class="btn1 btn-success mt-3 mb-3">Submit</button>
                    </form>
                    <a href="#">Forgot password</a>
                    <p>Don't have an account?<a href="#">Register Here</a></p>
                </div>
            </div>
        </div>
    </main>
</x-auth::layouts.auth>