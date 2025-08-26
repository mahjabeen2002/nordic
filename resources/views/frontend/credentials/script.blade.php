
{{-- <script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js"></script> --}}


<!---========================== javascript ==========================-->
<script type='text/javascript' src='{{ asset('assets') }}/js/jquery-3.6.0.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/bootstrap.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/jquery.fancybox.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/jQuery.style.switcher.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/color-scheme.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/owl.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/swiper.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/isotope.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/countdown.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/simpleParallax.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/appear.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/jquery.countTo.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/sharer.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/validation.js'></script>
<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ asset('assets') }}/js/gmaps.js"></script>
<script src="{{ asset('assets') }}/js/map-helper.js"></script>
<!-- main-js -->
<script type='text/javascript' src='{{ asset('assets') }}/js/creote-extension.js'></script>
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
<script>
    $(document).ready(function() {
    // Search suggestions functionality
    let searchTimeout;
    $('#navbar-search-input').on('input', function() {
        clearTimeout(searchTimeout);
        const query = $(this).val().trim();

        if (query.length < 2) {
            $('#search-suggestions').empty();
            return;
        }

        searchTimeout = setTimeout(function() {
            $.ajax({
                url: '{{ route("api.search.services") }}',
                method: 'GET',
                data: { q: query },
                success: function(response) {
                    let suggestionsHtml = '';

                    if (response.length > 0) {
                        suggestionsHtml = '<div class="suggestions-list">';
                        response.forEach(function(service) {
                            suggestionsHtml += `
                                <div class="suggestion-item" data-service-id="${service.id}">
                                    <a href="/service/${service.slug}">
                                        <img src="/uploads/Service/${service.image}" alt="${service.name}" width="40">
                                        <span>${service.name}</span>
                                    </a>
                                </div>
                            `;
                        });
                        suggestionsHtml += '</div>';
                    } else {
                        suggestionsHtml = '<div class="no-suggestions">No services found</div>';
                    }

                    $('#search-suggestions').html(suggestionsHtml);
                },
                error: function() {
                    $('#search-suggestions').html('<div class="no-suggestions">Error loading suggestions</div>');
                }
            });
        }, 300);
    });

    // Close suggestions when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#search-popup').length) {
            $('#search-suggestions').empty();
        }
    });

    // Handle search form submission
    $('#navbar-search-form').on('submit', function(e) {
        const query = $('#navbar-search-input').val().trim();
        if (query.length === 0) {
            e.preventDefault();
        }
    });
});
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
<script type="text/javascript">
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
