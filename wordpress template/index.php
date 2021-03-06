<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <h1> Hello World!</h1>
            <p>some content</p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-box">
                    <h1 class="post-title post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="row post-header">
                        <div class="col-sm-6">
                            <p class="post-author">By <?php the_author(); ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="post-date">Posted on <?php the_time('F jS, Y') ?></p>
                        </div>
                    </div>
                    <hr class="post-hr"/>
                    <p class="post-content"><?php the_content(__('(more...)')); ?></p>
                </div>
            <?php endwhile; ?>
                <div class="post-pagination">
                        <p><?php next_posts_link("Pos lama"); ?></p>
                        <p>Halaman <?php echo("$page"); ?> dari <?php global $wp_query;echo($wp_query->max_num_pages); ?></p>
                        <p><?php previous_posts_link("Pos baru"); ?></p>
                </div>
            <?php else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
