<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta name="google-site-verification" content="6cPUmBBVdT_bk35_e2FI4SR_ZSObcO_Om6YjGiRiC1M" />
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="{{ $meta['title'] ?? env('NAMA_PN') }}" />
    <meta property="og:url" content="{{ $meta['og_url'] ?? url('/') }}" />
    <meta property="og:image"
        content="{{ $meta['og_image'] ?? 'https://pn-tanjungkarang.go.id/assets/global/images/banner-tanjungkarang.png' }}" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:site_name" content="{{ $meta['site_name'] ?? env('NAMA_PN') }}" />
    <title>@yield('title') {{ env('NAMA_PN') }}</title>
    <meta name="description" content="{{ env('DESC_PN') }}">
    <base>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/global/images/logo/favicon.ico') }}" type="image/x-icon">
    <!-- /favicon -->
    <!-- Global stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/global/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="assets/global/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">	 -->
    <script src="https://kit.fontawesome.com/71a8054c2a.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/app/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/app/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/app/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/app/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/app/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css"> -->
    <link href="{{ asset('assets/global/js/plugins/arcontactus/arcontactus.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/app/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/app/css/custom.css') }}" rel="stylesheet" type="text/css">

    @stack('css')
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script>
        const BASEURL = "{{ url('/') }}";
    </script>


</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <div id='arcontactus'></div>

    <script src="{{ asset('assets/global/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/plugins/ui/slinky.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('assets/app/js/pdfThumbnails.js') }}"
        data-pdfjs-src="{{ asset('assets/app/js/pdf.js/build/pdf.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/buttons/hover_dropdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/ui/sticky.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/visualization/echarts/echarts.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/media/fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/plugins/tiny-slider/tiny-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/global/js/main/lazysize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/app/js/core.js') }}"></script>
    <script src="{{ asset('assets/app/js/jquery-ui/jquery.ui.core.js') }}"></script> <!-- jQuery Ui Core-->
    <script src="{{ asset('assets/app/js/jquery-ui/jquery.ui.widget.js') }}"></script> <!-- jQuery Ui Widget -->
    <script src="{{ asset('assets/app/js/jquery-ui/jquery.ui.accordion.js') }}"></script> <!-- jQuery Ui accordion-->
    <script src="{{ asset('assets/app/js/carousel.js') }}"></script> <!-- Nav Menu ddsmoothmenu -->
    <script src="{{ asset('assets/app/js/jquery.flexslider.js') }}"></script> <!-- Flex Slider  -->
    <script src="{{ asset('assets/app/js/custom.js') }}"></script> <!-- Nivo Slider  -->
    <script src="{{ asset('assets/global/js/plugins/arcontactus/arcontactus.js') }}"></script>
    {{-- <script src="{{ asset('assets/global/js/plugins/arcontactus/script.js') }}"></script> --}}
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=tjHaadCZ"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script> --}}
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5d6e2e37eb1a6b0be60aabac/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            if ($(window).width() < 992) {
                $('.dropdown-toggle').click(function() {

                    var submenu = $(this).next('.dropdown-menu');
                    var otherSubmenus = $('.dropdown-menu').not(submenu);

                    //otherSubmenus.slideUp();
                    submenu.slideToggle();
                });

                $('.dropdown-menu > .dropdown-toggle').click(function(e) {
                    e.preventDefault();
                    //  e.stopPropagation();

                    var submenu = $(this).next('.dropdown-menu');
                    var otherSubmenus = $('.dropdown-menu').not(submenu);

                    otherSubmenus.slideUp();
                    submenu.toggle();

                });
            }
        });




        $(document).ready(function() {

            loadVisitors();

        });

        function loadVisitors() {
            $.ajax({
                url: '{{ route('visit.logs') }}',
                type: 'POST',
                success: function(result) {

                    $('#visitToday').html(result.data.visitToday);
                    $('#visitYesterday').html(result.data.visitYesterday);
                    $('#visitLastWeek').html(result.data.visitLastWeek);
                    $('#visitLastMonth').html(result.data.visitLastMonth);
                    $('#visitTotal').html(result.data.visitTotal);
                }
            });
        }
    </script>

    <script>
        (function(d) {
            var s = d.createElement("script");
            s.setAttribute("data-position", 5);
            s.setAttribute("data-size", "large");
            s.setAttribute("data-color", "#9a2109");
            s.setAttribute("data-mobile", true);
            s.setAttribute("data-account", "ht42fo0uya");
            s.setAttribute("src", "https://cdn.userway.org/widget.js");
            (d.body || d.head).appendChild(s);
        })(document)
    </script>

    {{-- <script>
        $(document).ready(function () {
            $('img.lazyload').on('lazybeforeunveil', function () {
                console.log('Lazy loading started');
                $(this).next('.spinner').show();
            });

            // Hide the custom loader when all lazy-loaded images are loaded
            $('img.lazyload').on('lazyloaded', function () {
               console.log('Lazy loading complete');
                $(this).next('.spinner').hide();
            });
        });
    </script> --}}
    @if (env('APP_ENV') == 'production')
        <script>
            // To disable right click

            document.addEventListener('contextmenu', event => event.preventDefault());



            // To disable F12 options

            document.onkeypress = function(event) {

                event = (event || window.event);

                if (event.keyCode == 123) {

                    return false;

                }

            }

            document.onmousedown = function(event) {

                event = (event || window.event);

                if (event.keyCode == 123) {

                    return false;

                }

            }

            document.onkeydown = function(event) {

                event = (event || window.event);

                if (event.keyCode == 123) {

                    return false;

                }

            }



            // To To Disable ctrl+c, ctrl+u



            jQuery(document).ready(function($) {

                $(document).keydown(function(event) {

                    var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();



                    if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {

                        alert('Terimakasih untuk tidak mengambil konten dan source code website ini. Didukung oleh ' +
                            'https://sumbersolusidigital.com/');

                        //disable key press porcessing

                        return false;

                    }

                });

            });
        </script>
    @endif
    @stack('scripts')

</body>

</html>
