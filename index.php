<?php get_header();?>

<section class="blog-inner-main">
    <div class="container">
        <div class="col-lg-8 col-md-12 blog-content">
            <?php if (have_posts()) :
                while (have_posts()) { the_post(); ?>
                    <article class="post">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                        </a>
                        <h2 class="article-head text-uppercase"><?php the_title(); ?></h2>
                        <div class="article-desc"><?php the_content(); ?></div>
                        <a class="btn btn-gray" href="<?php the_permalink(); ?>">Continue Reading</a>
                    </article>
                <?php };
            else :
                echo '<p class="text-center article-desc">Empty</p>';
            endif; ?>
        </div>
        <?php get_template_part("sidebar"); ?>
        <nav class="nav-links col-xs-12 row between-xs">
            <div class="before-link"><a href="#" class="text-uppercase"><span class="fa fa-long-arrow-left"></span>previous</a>
            </div>
            <div class="after-link"><a href="#" class="text-uppercase">next<span class="fa fa-long-arrow-right"></span></a>
            </div>
        </nav>
    </div>
</section>

<?php get_footer(); ?>




