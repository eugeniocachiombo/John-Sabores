@include('inc/headHTML')


{{ $slot }}


@include('inc/footHTML')


<script src="{{ asset('assets/js/ready_heads_and_foots.js') }}"></script>
