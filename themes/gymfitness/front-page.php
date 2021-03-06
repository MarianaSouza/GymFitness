<?php get_header('front-page'); ?>
    <?php 
        $imageHero = get_field('hero_image');
        $imageTestimonials = get_field('testimonials_image');
        if( $imageHero ): 
    ?>
        <style type="text/css">
            body.front-page .site-header {
                background-image: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                url(<?php echo $imageHero['url']; ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
        </style>
    <?php endif; ?>
    <?php if( $imageTestimonials ):  ?>
        <style>
            .testimonials-frontpage {
                background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)),
                url(<?php echo $imageTestimonials['url']; ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                padding: 4rem 0;
                color: var(--white);
            }
        </style>
    <?php endif; ?>

    <section class="container section text-center welcome-section">
        <h2 class="text-primary"><?php the_field('welcome_title');  ?></h2>
        <p><?php the_field('welcome_content');  ?></p>
    </section>
    <section class="section-areas">
        <ul class="areas-container">
            <li class="area">
                <?php 
                    $area1 = get_field('area_1');
                    $image = wp_get_attachment_image_src($area1['area_image'], 'mediumSize')[0];
                    $post1 = $area1['post1'];
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post1)); ?>"><?php echo $area1['area_name'] ?></a>
            </li>
            
            <li class="area">
                <?php 
                    $area2 = get_field('area_2');
                    $image = wp_get_attachment_image_src($area2['area_image'], 'mediumSize')[0];
                    $post2 =$area2['post2'];
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post2)); ?>"><?php echo $area2['area_name'] ?></a>
            </li>
            <li class="area">
                <?php 
                    $area3 = get_field('area_3');
                    $image = wp_get_attachment_image_src($area3['area_image'], 'mediumSize')[0];
                    $post3 = $area3['post3'];
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post3)); ?>"><?php echo $area3['area_name'] ?></a>
            </li>
            <li class="area">
                <?php 
                    $area4 = get_field('area_4');
                    $image = wp_get_attachment_image_src($area4['area_image'], 'mediumSize')[0];
                    $post4 = $area4['post4'];
                
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post4)); ?>"><?php echo $area4['area_name'] ?></a>
            </li>
        </ul>
    </section>
    <section class="classes-frontpage">
        <div class="container section">
            <h2 class="text-primary text-center"><?php the_field('classes_title')?></h2>
            <?php gymfitness_classes_list(4);?>
            <div class="button-container">
                <a class="button" href="<?php echo get_permalink(get_page_by_title('Classes')); ?>"><?php the_field('classes_button_text')?></a>
            </div>
        </div>
    </section>
    <section class="instructors-frontpage">
      <div class="container section">
        <h2 class="text-primary text-center"><?php the_field('instructors_title')?></h2>
        <p class="text-center"><?php the_field('instructors_text')?><p>
        <?php gymfitness_instructors_list(); ?>
      </div>
    </section>
    <section class="testimonials-frontpage">
        <div class="container-testimonials">
        <h2 class="text-primary text-center"><?php the_field('testimonials_title')?></h2>
        <div><?php gymfitness_testimonials_list(3) ?></div>
    </section>
    <section class="blog container section">
        <h2 class="text-primary text-center"><?php the_field('blog_title')?></h2>
        <p class="text-center"><?php the_field('blog_text')?></p>
        <?php gymfitness_blog_list(4) ?>
    </section>
<?php get_footer(); ?>