<?php 
/*
* This is the Blog page
*/
get_header(); 
?>
    <main class="container page">
        <?php get_template_part('template-parts/blog', 'loop'); ?>
    </main>
<?php get_footer(); ?>