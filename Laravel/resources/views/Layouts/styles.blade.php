<link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico" type="image/x-icon"/>
<script src="{{asset('static/js/plugin/webfont/webfont.min.js')}}"></script>
<script>
    WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['static/css/fonts.min.css']},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>
<link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('static/css/atlantis.css')}}">
<link rel="stylesheet" href="{{asset('static/fontawesome/css/all.css')}}">
<link rel="stylesheet" href="{{asset('static/css/demo.css')}}">