<?php get_template_part('templates/header'); ?>
<section class="content">
    <main class="content--body <?php echo spring_main_class(); ?>" role="main">
        <?php include spring_template_path(); ?>
    </main>
</section><!-- /.content -->


<?php get_template_part('templates/footer'); ?>

<!-- below script is for grunt livereload -->
<script src="http://localhost:35729/livereload.js"></script>

</body>
</html>
