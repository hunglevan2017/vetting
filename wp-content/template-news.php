<?php
/* Template Name: News-Template */
?>
<?php
    get_header();
?>

<section id="main-page">
    <?php
      $cat_query = new WP_Query(array(
        'post_type'=>'tin_tuc'));
        if ($cat_query->have_posts()) :
        while ($cat_query->have_posts()) : $cat_query->the_post();
      ?>

    <?php endwhile;?>
    <?php else : ?>
    <p><?php _e(''); ?></p>
    <?php endif; wp_reset_postdata();?>

    <section class="blog-sidebar" style="background-color: #f6fafc;">
        <div class="container">
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">

                    <?php
             if (have_posts()) :
             while (have_posts()) : the_post();
            ?>
                    <span>day la title</span>
                    <?php the_title();?>

                    <span>day la content</span>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <?php endwhile;?>
                    <?php else : ?>
                    <p><?php _e(''); ?></p>
                    <?php endif; wp_reset_postdata();?>

                </div><!-- row -->
            </div>
            <!--contact-form-->
        </div>
        <!--container-->
        </div><!-- contact -->
    </section>

    <?php
    get_footer();
?>