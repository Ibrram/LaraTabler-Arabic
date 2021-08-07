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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label">البريد الالكتروني</label>
                            <a href="{{ route('login') }}">تسجيل الدخول</a>
                        </div>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="بريدك الالكتروني">

                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">ارسال رابط اعادة التعيين</button>
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
