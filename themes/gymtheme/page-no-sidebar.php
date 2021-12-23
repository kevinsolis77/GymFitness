<?php 
/*
* Template Name: Contenido Centrado No Sidebar
*/
get_header(); ?>

<main class="contenedor pagina seccion">
<div class="contenedor-paginas">
<?php
 while(have_posts()): the_post();?>
 <h1 class="text-center texto-primario"><?php the_title(); ?></h1>
<?php 

if(has_post_thumbnail() ): 
the_post_thumbnail('mediano', array('class' => 'imagen-destacada'));
endif;
?>

 <?php the_content(); ?>
 <?php endwhile; ?>
 </div>
 </main>

<?php get_footer(); ?>