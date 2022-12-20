<?php get_header(); ?>
<div class="container">
    <?php if(has_post_thumbnail()):?>
        this has the feature image
        <img src="<?php the_post_thumbnail_url('blog-small');?>" class="img-fluid" alt="<?php the_title(); ?>">
        <?php endif; ?>
    <h1><?php the_title();?></h1>
    <?php get_template_part('template-parts/section','blogcontent'); ?>
    <?php wp_link_pages(); ?>
</div>
<?php get_footer(); ?>