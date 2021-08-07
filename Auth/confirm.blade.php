<!doctype html>

<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }} - تأكيد كلمة المرور.</title>
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
                <h2 class="card-title text-center mb-4">تأكيد كلمة المرور</h2>

                <p>يرجى تأكيد كلمة المرور الخاصة بك قبل المتابعة.</p>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label">كلمة المرور</label>
                            <a href="{{ route('password.request') }}">لقد نسيت كلمة المرور؟</a>
                        </div>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"required autofocus placeholder="ادخل كلمة مروروك">

                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">تأكيد كلمة المرور</button>
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
