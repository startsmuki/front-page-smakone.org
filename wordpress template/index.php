<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <h1> Hello World!</h1>
            <p>some content</p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-box">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="post-author">By <?php get_the_author_id(); ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="post-date">Posted on <?php the_time('F jS, Y') ?></p>
                        </div>
                    </div>
                    <p class="post-content"><?php the_content(__('(more...)')); ?></p>
                </div>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
