<!doctype html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('./dist/images/login-new.jpeg')
  }
  </style>
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">

      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('login') }}">

        @csrf

        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="email" >{{ __('Email Address') }}</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password">{{ __('Password') }}</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"> {{ __('Login') }}</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        </div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ url('/register') }}">
          Not registered ?
        </a>

      </form>

    </div>
  </div>
</div>
</body>

</html>
