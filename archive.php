<?php get_header(); ?>
<div class="page-warp">
    <div class="container">
        <h1><?php echo single_cat_title(); ?></h1>
        <?php get_template_part('template-parts/section','archive'); previous_posts_link();next_posts_link();?>
    </div>
</div>
<?php get_footer(); ?>