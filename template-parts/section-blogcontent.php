<?php if(have_posts()):while(have_posts()):the_post();?>
<?php echo get_the_date(); ?>
<?php the_content() ?>
<p>Posted by <?php $fname=get_the_author_meta('first_name');$lname=get_the_author_meta('last_name');echo $fname.''.$lname; ?>
</p>
<?php $tags = get_the_tags();
// var_dump($tags);

    if(is_array($tags)):foreach($tags as $tag): ?>
    <a href="<?php echo get_tag_link($tag->term_id);?>" >
        <?php echo $tag->name; ?>
    </a>
<?php endforeach;endif; ?>
<?php $category= get_the_category();
        foreach($category as $cat):?>
        <a href="<?php echo get_category_link($cat->term_id);?>">
            <?php echo $cat->name; ?>
        </a>
<?php endforeach;?>
<?php comments_template(); ?> 
<?php endwhile;else:endif;?>