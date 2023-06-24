<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Register</title>
</head>

<body>
<x-guest-layout>
    
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
        <style>
            	 @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
        body {
            background-image: url("login.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
		.register{
			font-family: 'Mochiy Pop P One', sans-serif;
      font-size: 36px;
		}
    h5{
      color: white;
    }
    h5:hover{
      color: rgba(234, 92, 82, 1);
      cursor: pointer;
      transform: scale(101%)
    }
		.input {
 
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  position: relative;
}

.input:valid {
  border-color: #00ff2a;
  color: black;
  box-shadow: 2px 2px 8px 1px #00ff2a;
}

.input:invalid {
  border-color: rgba(234, 92, 82, 1);
  color: rgba(234, 92, 82, 1);
  box-shadow: 3px 3px 8px 1px rgba(234, 92, 82, 1);;
  /* translate: -8px 8px 0px 0px; */
}

.text {
  margin-top: 10px;
  color: black;
}
button {
  font-family: inherit;
  font-size: 18px;
  background: linear-gradient(to bottom, #4dc7d9 0%,rgba(234, 92, 82, 1) 100%);
  color: white;
  padding: 0.8em 1.2em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  border-radius: 25px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s;
}

button:hover {
  transform: translateY(-3px);
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
}

button:active {
  transform: scale(0.95);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

button span {
  display: block;
  margin-left: 0.4em;
  transition: all 0.3s;
}

button svg {
  width: 18px;
  height: 18px;
  fill: white;
  transition: all 0.3s;
}

button .svg-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  margin-right: 0.5em;
  transition: all 0.3s;
}

button:hover .svg-wrapper {
  background-color: rgba(255, 255, 255, 0.5);
}

button:hover svg {
  transform: rotate(45deg);
}


</style>
          <h5 class="text-center register mt-4">REGISTER</h5>
<div class="container">
    <div class="row">
        <div class="offset-4 col-md-4 mt-5 gap-3">
            <form method="POST" action="{{ route('register') }}">	
                @csrf

    <div class="inputs mt-3">
        <label for="name" value="{{ __('email') }}" ></label>
        <input type="text" name="email" id="email" class="input form-control"  aria-describedby="emailHelp" placeholder="Enter Your Email"  :value="old('email')" required autofocus autocomplete="username">
        <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
      </div>
        
      <div class="inputs mt-3">
        <label for="name" value="{{ __('Name') }}" ></label>
        <input type="text" name="name" id="name" class="input form-control" aria-describedby="emailHelp" placeholder="Enter Your Name"  :value="old('name')" required autofocus autocomplete="name">
      </div> 	
      
      <div class="inputs mt-4">
          <label for="password" value="{{ __('Password') }}"></label>
        <input type="password" name="password" id="password" class="input form-control" aria-describedby="emailHelp" placeholder="Enter Your Password"  :value="old('password')" required autofocus autocomplete="new-password">
    </div>
      <div class="inputs mt-4">
          <label for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
        <input type="password" class="input form-control" id="password_confirmation"  aria-describedby="emailHelp" placeholder="Confirm your password" name="password_confirmation" required autocomplete="new-password">
    </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="row">
                <div class="col-md-3"></div>

            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 me-5" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button>
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                        </svg>
                      </div>
                    </div>
                    <span class="text-white"> {{ __('Register') }}</span>
                  </button>
            </div>
        </div>
        </div>
        </form>

        
    </div>
    </div>
    </div>
  
</x-guest-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
