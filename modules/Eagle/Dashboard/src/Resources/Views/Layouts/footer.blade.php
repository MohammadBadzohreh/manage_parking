</body>
<script src="{{ asset('/panel/js/jquery-3.4.1.min.js') }}"></script>
<script src={{ asset('/panel/js/js.js') }}></script>
<script src="{{ asset('/js/iziToast.min.js') }}"></script>
<script src="{{ asset('/js/font_awesome.js') }}"></script>

<script>
    @include("Common::feedback")
</script>
@yield("js")
</html>
