<?php
/*
Template Name: Статьи
*/
	get_header();
?>
<main>
    <section class="article">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p><?php echo get_the_date(); ?><p>
            <?php the_post_thumbnail( '' );  ?>
            <?php the_content(); ?>
        </div>
    </section>
    <div class="container">
        <?php comments_template(); ?>
    </div>
</main>
<?php get_footer(); ?>