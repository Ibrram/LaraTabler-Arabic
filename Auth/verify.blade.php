<!doctype html>

<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }} - التحقق من البريد الالكتروني.</title>
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
                <h2 class="card-title text-center mb-4">تأكيد بريدك الالكتروني</h2>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}
                    </div>
                @endif

                <p>قبل المتابعة ، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق.</p>
                <p>إذا لم تستلم البريد الإلكتروني</p>
                <form class="d-flex justify-content-center" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-dark active align-baseline">اضغط هنا لطلب رابط تحقق جديد</button>
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
