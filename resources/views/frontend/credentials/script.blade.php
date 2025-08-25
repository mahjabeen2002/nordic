
<script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('assets') }}/js/viewport.jquery.js"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="{{ asset('assets') }}/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="{{ asset('assets') }}/js/jquery.counterup.min.js"></script>
<!--<< Slick Js >>-->
<script src="{{ asset('assets') }}/js/slick.min.js"></script>
<!--<< Slick Animation Js >>-->
<script src="{{ asset('assets') }}/js/slick-animation.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets') }}/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets') }}/js/wow.min.js"></script>
<!--<< Circle Progress Js >>-->
<script src="{{ asset('assets') }}/js/circle-progress.js"></script>
<!--<< Main.js >>-->
<script src="{{ asset('assets') }}/js/main.js"></script>


{{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-37d5a27c-dd16-4a07-8ab7-28f713e7cf99" data-elfsight-app-lazy></div> --}}

{{-- Toaster Script --}}
<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}", "", {
            timeOut: 5000
        });
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}", "", {
            timeOut: 5000
        });
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}", "", {
            timeOut: 5000
        });
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}", "", {
            timeOut: 5000
        });
    @endif
</script>

{{-- End Toaster Script --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var html = "";

        // Fetch portfolio categories
        $.ajax({
            url: "/servicecat",
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                for (var i = 0; i < res.data1.length; i++) {
                    html += `<li class="nav-item">
                                <a href="/servicecategory/${res.data1[i]['slug']}" style="cursor:pointer" data-id="${res.data1[i]['id']}" class="nav-link">${res.data1[i]['name']}</a>
                            </li>`;
                }
                $(".service").append(html);
            }
        });

        // Toggle submenu on click of dropdown-toggle
        $(".dropdown-toggle").on("click", function (e) {
            e.preventDefault(); // Prevent the default action
            $(this).parent().parent().toggleClass("active");
            $(this).closest(".dropdown").find(".submenu").slideToggle();
        });
    });
</script>

<script>
    $(document).ready(function () {
        var html = "";
        var htmlmob = "";

        // Fetch package categories
        $.ajax({
            url: "/packagecat",
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                for (var i = 0; i < res.data1.length; i++) {
                    html += `<li class="nav-item">
                                <a href="/packagecategory/${res.data1[i]['slug']}" style="cursor:pointer" data-id="${res.data1[i]['id']}" class="nav-link">${res.data1[i]['name']}</a>
                            </li>`;
                }
                console.log(html);
                $(".package").append(html);
            }
        });
    });
</script>
// <script type="text/javascript">
//     function googleTranslateElementInit() {
//         new google.translate.TranslateElement(
//             {pageLanguage: 'en'},
//             'google_translate_element'
//         );
//     }
// </script>

<!--<script type="text/javascript"-->
<!--        src= "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">-->
<!--</script>-->


<!--<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>-->
<!--    <script>-->
<!--      var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"46763070512","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};-->
<!--      window.onload = () => {-->
<!--        _waEmbed(wa_btnSetting);-->
<!--      };-->
<!--</script>-->
