<?php get_header(); ?>

<main class="contenedor pagina seccion con-sidebar">
 <div class="contenedor-paginas">
    <?php get_template_part('./template-parts/paginas'); ?>
 </div>
 <?php
get_sidebar();
?>
</main>

<?php get_footer(); ?>