<?php
/*
Template Name: Шаблон тренинга (single)
Template Post Type: post
*/
	get_header();
?>
<main>
    <section class="descriptions">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail( '' );  ?>
            <?php the_content(); ?>
        </div>
    </section>
    <div class="when">
        <div class="container">
            <h2>Ближайший тренинг: <?= CFS()->get('training_when') ?></h2>
            <p>Количество участников ограничено!</p>
        </div>
    </div>
    <section class="why">
        <div class="container">
            <h2><?= CFS()->get('why_title') ?></h2>
            <ul class="why__list">
                <li class="why__item">
                    <img src="<?= CFS()->get('why_card_1_img') ?>" alt="">
                    <p><?= CFS()->get('why_card_1_text') ?></p>
                </li>
                <li class="why__item">
                    <img src="<?= CFS()->get('why_card_2_img') ?>" alt="">
                    <p><?= CFS()->get('why_card_2_text') ?></p>
                </li>
                <li class="why__item">
                    <img src="<?= CFS()->get('why_card_3_img') ?>" alt="">
                    <p><?= CFS()->get('why_card_3_text') ?></p>
                </li>
            </ul>
        </div>
    </section>
    <div class="form">
        <h2><?= CFS()->get('form_title') ?></h2>
        <div class="container">
            <div class="form__wrapper">
                <?= do_shortcode( CFS()->get('form_shortcode')); ?>
                <p>* Ваши личные данные будут надежно защищены</p>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="training-reviews">
            <h2>Что говорят о тренинге участники?</h2>
            <div class="training-reviews__slider swiper">
                <ul class="training-reviews__wrapper swiper-wrapper">
                    <?php $loop = CFS()->get('reviews');
                foreach ($loop as $row ) {
                ?>
                    <li class="training-reviews__item swiper-slide">
                        <div class="training-reviews__item-img">
                            <img src="<?= $row['reviews_img'] ?>" alt="<?= $row['	reviews_img_descriptions'] ?>">
                        </div>
                        <div class="training-reviews__item-wrapper">
                            <p class="training-reviews__item-name"><?= $row['reviews_name'] ?></p>
                            <p class="training-reviews__item-text">
                                <q><em><?= $row['reviews_text'] ?></em></q>
                            </p>
                        </div>
                    </li>
                    <?php
                    }
                ?>
                </ul>
            </div>
            <div class="swiper-pagination"></div>
        </section>
    </div>
    <div class="container">
        <?php comments_template(); ?>
    </div>

</main>
<?php get_footer(); ?>