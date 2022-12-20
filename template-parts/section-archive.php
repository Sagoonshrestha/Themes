<?php if(have_posts()):
    $readmore=FALSE;
    while(have_posts()):the_post(); ?>

<article id="<?php the_title();?>">
    <header class="header-entry">
        <h1>
            <a href="<?php the_permalink()?>" ><?php the_title();?></a>
        </h1>
    </header>
    <div class="card mb-3"> 
        <div class="card-body" >
            <?php the_content();if($readmore): ?>
            <a href="<?php the_permalink()?>" class="btn btn-success">ReadMore</a>
            <?php endif;?>
        </div>
    </div>
</article>
<?php endwhile;else:endif;?>