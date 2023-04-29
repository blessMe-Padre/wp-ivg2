<?php
/*
Template Name: about
*/
	get_header();
?>
<main>
    <div class="container">
        <section class="about-me">
            <h1 class="title-center"><?= CFS()->get('about_title') ?></h1>
            <?php the_content(); ?>
            <div class="about-me__img">
                <img src="<?= CFS()->get('about_img') ?>" alt="<?= CFS()->get('about_img_descriptions') ?>">
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>