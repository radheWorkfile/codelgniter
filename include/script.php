    <!-- js -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    $(document).ready(function() {
    function toggleCourse(courseId, activeId) {
    $('.course').hide();
    $('#' + courseId).show();
    $('.course-link').removeClass('active').addClass('deactive');
    $('#' + activeId).removeClass('deactive').addClass('active');
    }
    $('.course-link').click(function() {
    var courseId = $(this).attr('id').replace('_start', '');
    toggleCourse(courseId, $(this).attr('id'));
    });
    });
    </script>