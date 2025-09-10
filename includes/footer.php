<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
        <nav class="pull-left">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Licenses</a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            <?php echo date('Y'); ?>, made with <i class="fa fa-heart heart text-danger"></i> by
            <a href="#">Your Company</a>
        </div>
    </div>
</footer>
</div>
</div>

<!-- JS Files -->
<?php $assets->renderJS(); ?>

<!-- Active Navigation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Active navigation handling
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-item a');

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath.split('/').pop()) {
                link.closest('.nav-item').classList.add('active');
            }
        });

        // Sidebar toggle for mobile
        const toggleSidebar = document.querySelector('.toggle-sidebar');
        if (toggleSidebar) {
            toggleSidebar.addEventListener('click', function() {
                document.body.classList.toggle('sidebar-mini');
            });
        }
    });
</script>

</body>

</html>