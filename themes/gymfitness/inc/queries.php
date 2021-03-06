<?php
//Displays the classes 
function gymfitness_classes_list($number_of_classes = -1){ ?>
  <ul class="classes-list">
    <?php 
        $args = array(
            'post_type' => 'gymfitness-classes',
            'post_status' => 'publish',
            'orderby' => 'title', 
            'order' => 'ASC',
            'posts_per_page' => $number_of_classes,
        );   
        $classes = new WP_Query($args);

        while($classes->have_posts()): $classes->the_post();
    ?>
        <li class="gym-class card gradient">
            <?php the_post_thumbnail('mediumSize'); ?>
                <div class="card-content">
                <a href="<?php the_permalink(); ?>" title="Check the Class Description">
                    <h3><?php the_title(); ?></h3>
                </a>
                <?php
                    $start_time = get_field('start_time');
                    $end_time = get_field('end_time');
                ?>  
                <p><?php echo the_field('class_days') . " - " . $start_time . " to " . $end_time ?></p>
                </div>
        </li>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php }

//Displays the instructors
function gymfitness_instructors_list($number_of_instructors = -1){ ?>
        <ul class="instructor-list">
          <?php
            $args = array(
                'post_type' => 'instructors',
                'posts_per_page' => $number_of_instructors
            );
            $instructors = new WP_Query($args);
            while($instructors->have_posts()): $instructors->the_post();
          ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediumSize'); ?>
                <div class="content text-center">
                <a href="<?php the_permalink(); ?>" title="Check the Instructor Description"><h3><?php the_title(); ?></h3>
                <?php 
                (is_front_page()) ? the_excerpt(): the_content();
                ?>
                </a>
                    <div class="specialty">
                        <?php 
                        $specialty = get_field('specialty');
                        foreach($specialty as $s):
                        ?>
                        <span class="tag"><?php echo $s; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
<?php
}

//Displays the testimonials
function gymfitness_testimonials_list($number_of_testimonials = -1){ ?>
    <ul class="testimonials-list">
        <?php 
            $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => $number_of_testimonials
            );
            $testimonials = new WP_Query($args);
            while($testimonials->have_posts()): $testimonials->the_post();
        ?>
        <li class="testimonial text-center">
            <blockquote>
                <?php the_content() ?>
            </blockquote>
            <div class="footer-testimonials">
                <div><?php the_post_thumbnail('thumbnail'); ?></div>
                <div><p><?php the_title(); ?></p></div>
            </div>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php
}

//Displays the blog posts on the front-page
function gymfitness_blog_list($number_of_posts = -1){ ?>
    <ul class="blog-entries">
        <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => $number_of_posts,
            );
            $blog = new WP_Query($args);
            while($blog->have_posts()): $blog->the_post();
        ?>
        <?php get_template_part('template-parts/blog', 'loop'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php
}

?>