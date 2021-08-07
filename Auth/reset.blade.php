<!doctype html>

<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }} - إعادة تعيين كلمة المرور.</title>
    <!-- CSS files -->
    <link href="{{ asset('LaraTabler/css/tabler.css') }}" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="page page-center justify-content-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="{{ config('app.url') }}"><img src="{{ asset('LaraTabler/logo.svg') }}" height="36" alt=""></a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">إعادة تعيين كلمة المرور</h2>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label class="form-label" for="email">البريد الالكتروني</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="بريدك الالكتروني">

                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="password">كلمة المرور الجديدة</label>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="اكتب كلمة المرور الجديدة">

                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="new_password">اعادة كلمة المرور الجديدة</label>
                        <input type="password" id="new_password" class="form-control" name="password_confirmation" required placeholder="اكتب كلمة المرور الجديدة مره اخري">
                      </div>

                      <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">اعادة تعيين كلمة المرور</button>
                      </div>
                </form>

            </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('LaraTabler/js/tabler.min.js') }}"></script>
  </body>
</html>
