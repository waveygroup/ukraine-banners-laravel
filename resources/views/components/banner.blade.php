@if( config('ukraine-banners.enabled') == true )
    <script src="https://ukraine.wavey.group/banner.min.js"></script>
    <script type="text/javascript">
        UKRAINE.init(['{{ config('ukraine-banners.theme') }}', '{{ config('ukraine-banners.size') }}', '{{ config('ukraine-banners.position') }}']);
        UKRAINE.createBanner();
    </script>
@endif
