<?php
/*
Template Name: Шаблон услуги (single)
Template Post Type: post
*/
	get_header();
?>
<main>
    <section class="descriptions">
        <div class="container">
            <h1 class="title-center"><?php the_title(); ?></h1>
            <?php the_post_thumbnail( '' );  ?>
            <?php the_content(); ?>
        </div>
    </section>
    <div class="load-more">
        <a class="load-more__btn load-more__btn-one" href="contacts">
            <span>связаться со мной</span>
        </a>
    </div>
    <section class="gallery-block" style="padding: 60px 0;">
        <div class="container">
            <h2 class="visually-hidden">Галерея</h2>
            <ul class="gallery-block__list single-gallery">
                <?php $loop = CFS()->get('gallery');
                foreach ($loop as $row ) {
            ?>
                <li class="gallery-block__item">
                    <a href="<?= $row['gallery_photo'] ?>">
                        <img src="<?= $row['gallery_photo'] ?>" alt="<?= $row['gallery_description'] ?>">
                    </a>
                </li>
                <?php
                }
            ?>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>