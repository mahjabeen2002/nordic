<script src="{{ asset('admin') }}/assets/js/bootstrap.js"></script>
<script src="{{ asset('admin') }}/assets/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="{{ asset('admin') }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/pages/dashboard.js"></script>




<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
<script src="https://cdn.tiny.cloud/1/pl4gtki7dg5u6mn61u70ddffcwj6904sqp8frkb6sjt1ruod/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> tag in your HTML's <body> -->
<script>
tinymce.init({
     selector: 'textarea:not([name="meta_description"])', // Excludes textarea with name="meta_description"
    skin: 'bootstrap',
    plugins: 'lists link image media code',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat code help',
    menubar: true,
    automatic_uploads: true,
    images_upload_url: '{{ route("mediacenter-upload-image") }}', // Laravel route for image upload
    images_reuse_filename: true,
    relative_urls: false,
    remove_script_host: false,
    convert_urls: true,
    setup: function (editor) {
        editor.on('change', function () {
            editor.save(); // Ensure TinyMCE updates the textarea on every change
        });
    },
    // Add CSRF token to all requests
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add the CSRF token here
    }
});
</script>