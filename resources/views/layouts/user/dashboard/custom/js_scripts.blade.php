
{{-- <script>
    $(document).ready(function() {
        // Trigger the alert to show for 10 seconds
        $("#disapear-alert").fadeIn().delay(10000).fadeOut();
    });
</script> --}}

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/custom/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/custom/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- Core plugin JavaScript-->
<script src="{{ asset('js/custom/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/custom/js/sb-admin-2.min.js') }}"></script>

<!-- Include the SweetAlert JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }
</script>

@include('user.dashboard.alerts.sweet-alert')


<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit"></script>


