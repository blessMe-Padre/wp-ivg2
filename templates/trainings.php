<?php
/*
Template Name: Тренинги
*/
	get_header();
?>
<main>
    <section class="descriptions">
        <div class="container">
            <h1 class="title-center"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
    <section class="gallery-block _hide _element-animation">
        <div class="container">
            <h2 class="visually-hidden">Галерея</h2>
            <ul class="gallery-block__list gallery">
                <?php $loop = CFS()->get('training');
                foreach ($loop as $row ) {
            ?>
                <li class="gallery-block__item">
                    <a href="<?= $row['training_img'] ?>">
                        <img src="<?= $row['training_img'] ?>" alt="<?= $row['	training_description'] ?>">
                    </a>
                </li>
                <?php
                }
            ?>
            </ul>
        </div>
    </section>
    <section class="training _hide _element-animation">
        <div class="container">
            <h3>Список Тренингов</h2>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="training__wrapper swiper">
                    <ul class="swiper-wrapper">
                        <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1,
                                'category' => 4,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                            ) );

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                            ?>

                        <li class="swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( '' );  ?>
                                <h3><?php the_title(); ?></h3>
                                <p class="training__description"><?= CFS()->get('training__descriptions') ?></p>
                            </a>
                        </li>
                        <?php
                                }
                            wp_reset_postdata();
                        ?>
                    </ul>
                    </ul>
                </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>