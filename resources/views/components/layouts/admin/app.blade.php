@include('inc/headHTML')
<link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
@include('inc.admin.header')

<div class="container-fluid">
    <div class="row">
        <aside class="col-md-3 col-lg-2 sidebar d-none d-md-block">
            @include('inc.admin.nav')
        </aside>

        <main class="col-md-9 col-lg-10 dashboard-content">
            {{ $slot }}
        </main>

        @include('inc.admin.footer')
    </div>
</div>

@include('inc.admin.offcanvas')
@include('inc/footHTML')
