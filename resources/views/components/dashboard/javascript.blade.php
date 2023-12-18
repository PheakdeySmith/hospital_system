<!-- Jquery JS-->
<script src="{{ asset('dashboard_assets') }}/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('dashboard_assets') }}/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{ asset('dashboard_assets') }}/vendor/slick/slick.min.js">
</script>
<script src="{{ asset('dashboard_assets') }}/vendor/wow/wow.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/animsition/animsition.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{ asset('dashboard_assets') }}/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{ asset('dashboard_assets') }}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/select2/select2.min.js">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</script>

<!-- Main JS-->
<script src="{{ asset('dashboard_assets') }}/js/main.js"></script>

<script>
    function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>


