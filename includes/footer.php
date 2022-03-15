<!-- Start Footer Area -->
<div class="rn-footer-area rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">

                    <div class="logo">
                        <a href="index-2.html">
                            <img src="assets/frontend/images/logo/logo-vertical.png" alt="logo">
                        </a>
                    </div>

                    <p class="description mt--30">© 2021. All rights reserved by <a target="_blank" href="https://themeforest.net/user/rainbow-themes/portfolio">Rainbow-Themes.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- JS ============================================ -->
<script src="assets/frontend/js/vendor/jquery.js"></script>
<script src="assets/frontend/js/vendor/modernizer.min.js"></script>
<script src="assets/frontend/js/vendor/feather.min.js"></script>
<script src="assets/frontend/js/vendor/slick.min.js"></script>
<script src="assets/frontend/js/vendor/bootstrap.js"></script>
<script src="assets/frontend/js/vendor/text-type.js"></script>
<script src="assets/frontend/js/vendor/wow.js"></script>
<script src="assets/frontend/js/vendor/aos.js"></script>
<script src="assets/frontend/js/vendor/particles.js"></script>
<script src="assets/dashboard/lib/sweetalert/sweetalert.min.js"></script>

<!-- main JS -->
<script src="assets/frontend/js/main.js"></script>
<script>
    <?php if (isset($_SESSION['success'])) : ?>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: "<?= show_session_data('success') ?>"
        })
    <?php endif ?>
    <?php if (isset($_SESSION['error'])) : ?>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: "<?= show_session_data('error') ?>"
        })
    <?php endif ?>
</script>
</body>

</html>