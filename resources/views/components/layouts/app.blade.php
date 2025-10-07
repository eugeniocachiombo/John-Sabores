@include('inc/headHTML')
@include('inc/header')

{{ $slot }}

@include('inc/footHTML')
@include('inc/footer')


<script src="{{ asset('assets/js/ready_heads_and_foots.js') }}"></script>
