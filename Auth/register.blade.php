<!doctype html>

<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }} - التسجيل.</title>
    <!-- CSS files -->
    <link href="{{ asset('LaraTabler/css/tabler.css') }}" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="page page-center justify-content-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="{{ config('app.url') }}"><img src="{{ asset('LaraTabler/logo.svg') }}" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="{{ route('register') }}" method="post">
          @csrf

          <div class="card-body">
            <h2 class="card-title text-center mb-4">تسجيل حساب جديد</h2>
            <div class="mb-3">
                <label class="form-label">الاسم</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="اسمك بـ الكامل" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">البريد الالكتروني</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required placeholder="بريدك الالكتروني">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">كلمة المرور</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="كلمة المرور" autocomplete="off">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">تأكيد كلمة مرورك</label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control" name="password_confirmation" required placeholder="أكتب كلمة مرورك مره اخري" autocomplete="off">
                </div>
              </div>

            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">سجل الان</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          تملك حساب بـ الفعل؟ <a href="{{ route('login') }}" tabindex="-1">سجل دخولك</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('LaraTabler/js/tabler.min.js') }}"></script>
  </body>
</html>
