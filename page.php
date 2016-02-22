<?php get_header();?>
<?php the_post(); ?>

<section class="blog-inner-main">
    <div class="container">
        <div class="col-lg-8 col-md-12 blog-content">
            <article class="post">
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
                <h2 class="article-head text-uppercase"><?php the_title(); ?></h2>
                <div class="article-desc"><?php the_content(); ?></div>
            </article>
        </div>
        <?php get_template_part("sidebar"); ?>
    </div>
</section>

<?php get_footer(); ?>




