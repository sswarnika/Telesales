  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <title>Telesales</title>
    </head>
    <body>
      <div style="margin-top: 250px">
      <div class="top-content" style="float: right; margin-left: -28px; vertical-align: middle; display: block; text-align: center; color: #1c1e21; direction: ltr; line-height: 1.34; width: 600px; margin-right: 100px;">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                              <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 345px">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
<br>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width: 345px">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
<br>
                            <div class="form-group row" style="margin-right: 45px;">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-right: 75px; margin-top: 15px; ">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                   @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><input type="button" class="btn btn-primary" value="Register" /></a>
                        @endif

<br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 12px; font-family: sans-serif;" >
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div> 
<div style="width: 550px; vertical-align: top; padding-right: 32px; margin-left: 255px; ">
  <div class="telesaleslt" style="width: 400px; vertical-align: top;">
    <div class="Logo">
      <img class="telesaleslogo img" src="{{asset('img/telesaleslogo.png')}}" alt="Telesales" style="height: 70px; margin: -20px; border: 0; object-fit: cover; position: relative; line-height: 1.34; margin-left: 65px; display: block; ">
    </div>
    <h2 class="tagline" style=" font-size: 24px; padding: 0; line-height: 28px; width: auto; font-family: sans-serif; font-weight: normal; color: #1c1e21; padding-top: 10px; text-align: center; margin-block-start: 0.83em; margin-block-end: 0.83em; margin-inline-start: 0px; margin-inline-end: 0px; "> A service that sells your products or services to customers directly over the phone. </h2>
  </div>
  </div>
    </body>
  </html>