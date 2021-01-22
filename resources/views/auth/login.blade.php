<div class="limiter">
    <div>
        <div class="wrap-login100">
            <form method="POST" action="{{route('user.login')}}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-26">
						Hoşgeldiniz
					</span>
                <span class="login100-form-title p-b-48">
                                                    <img src="{{$setting->logo ?? ''}}">
					</span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}"/>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                     :value="old('email')" required autofocus/>
                    </div>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <x-jet-label for="password" value="{{ __('Password') }}"/>
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                 autocomplete="current-password"/>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>


                <a class="txt1">
                    Don’t have an account?
                </a>

                <a class="txt2" href="#">
                    Sign Up
                </a>

            </form>
        </div>
    </div>
</div>
