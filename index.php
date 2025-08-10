<?php
/*
Template Name: Главная страница
*/
	get_header();
?>
<main>
    <section class="about">
        <h1 class="title visually-hidden"><?= CFS()->get('main_title') ?></h1>
        <div class="about-swiper-button-prev"></div>
        <div class="about-swiper-button-next"></div>
        <div class="about__wrapper swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide about__item">
                    <div class="about__item-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.png">
                    </div>
                    <div class="about__item-descriptions">
                        <h2>Обо мне</h2>
                        <p class="about__item-text">
                            Многие люди привыкли думать, что роль психолога состоит исключительно в том, чтобы помогать
                            людям преодолевать жизненные трудности. Однако это не так – на мой взгляд, роль психолога
                            состоит в том, чтобы дать практические советы и научить человека быть счастливее. Тогда
                            жизненных трудностей станет намного меньше, ведь испытания уже не будут казаться такими
                            сложными.
                        </p>
                        <p> То, что Вы попали на эту страницу, скорее всего, значит, что Вы находитесь в духовных
                            поисках, а значит – Истина остается в приоритете!</p>

                        <p>Приглашаю Вас подробно ознакомиться с разделами сайта, посвященными тренингам и
                            индивидуальным консультациям.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide about__item">
                    <div class="about__item-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/about.png">
                    </div>
                    <div class="about__item-descriptions">
                        <h2>Услуги</h2>
                        <p class="about__item-text">
                            Для реализации этих задач я предлагаю индивидуальные консультации и провожу тренинги, в ходе
                            которых люди находят для себя ответы на многие интересующие их в течение многих лет вопросы.
                            Как психолог, я работаю над тем, чтобы придать людям тягу к саморазвитию, ведь именно от
                            постоянной и системной работы над собой зависит благосостояние, успешность и уровень
                            счастья.
                            Ваше благополучие зависит именно от Вашего желания меняться, и я, как психолог, готова
                            помогать Вам в этом, давать практические советы и обсуждать Ваши шаги на пути саморазвития.
                        </p>
                        <div class="load-more load-more--main">
                            <a class="load-more__btn load-more__btn-one" href="services">
                                <span>подробнее</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="online _hide _element-animation">
        <div class="container">
            <h2 class="title-center">Онлайн курс</h2>
            <ul class="online__list">
                <li class="online__item">
                    <div class="online__item-wrapper">
                        <h3>Отношения</h3>
                        <p>Почему нам так сложно наладить отношения со своими близкими?</p>
                    </div>
                    <div class="online__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/1.jpg">
                    </div>
                </li>
                <li class="online__item">
                    <div class="online__item-wrapper">
                        <h3>Поступки</h3>
                        <p>Почему порой мы не понимаем себя и свои поступки?</p>
                    </div>
                    <div class="online__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/2.jpg">
                    </div>
                </li>
                <li class="online__item">
                    <div class="online__item-wrapper">
                        <h3>Жизнь</h3>
                        <p>Почему мы боимся воплотить в жизнь наши мечты?</p>
                    </div>
                    <div class="online__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/3.jpg">
                    </div>
                </li>
                <li class="online__item">
                    <div class="online__item-wrapper">
                        <h3>Выбор</h3>
                        <p>Почему так невыносимо сделать выбор между тем, что хочется, и тем — что нужно?</p>
                    </div>
                    <div class="online__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/4.jpg">
                    </div>
                </li>
            </ul>
            <div class="load-more">
                <a class="load-more__btn load-more__btn-one" href="course">
                    <span>подробнее</span>
                </a>
            </div>
        </div>
    </section>

    <section class="retrit-main _hide _element-animation">
        <div class="retrit-main__bg">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/retrit.webp" type="image/webp">

                <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit.jpg" width="100%" alt="мальдивы">
            </picture>
        </div>
        <div class="container">
            <h2 class="retrit-main__title">Ретрит на Мальдивы</h2>
            <p class="retrit-main__text">Слово ретрит — от английского retreat, означает уединенный отдых в тихом месте,
                где можно спрятаться от
                повседневности и посвятить время себе. Это путешествие во внутренний мир, которое в гармонии с природой
                дарит преображение и воодушевление. В последнее время мы нуждаемся в таком отдыхе, как никогда раньше:
                постоянный стресс отнимает все силы.</p>
            <div class="load-more load-more--left">
                <a class="load-more__btn load-more__btn-one" href="retrit">
                    <span>подробнее</span>
                </a>
            </div>
        </div>
    </section>

    <section class="training _hide _element-animation">
        <div class="container">
            <h2 class="title-center">Тренинги</h2>
            <p>Тренинги рассчитаны на 2 дня, время проведения с 10.00 до 18.00, количество участников 10-15
                человек.</p>
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
                            <p class="training__when">
                                Ближайший тренинг: <time
                                    datetime="<?= CFS()->get('training_when_robots') ?>"><?= CFS()->get('training_when') ?></time>
                            </p>
                            <p class="training__description"><?= CFS()->get('training__descriptions') ?></p>
                        </a>
                    </li>
                    <?php
                                }
                            wp_reset_postdata();
                        ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="main-articles _hide _element-animation">
        <div class="container">
            <h2 class="title-center">Статьи</h2>
            <div class="main-articles__wrapper">
                <ul class="main-articles__list">
                    <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                                'category' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                            ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                        ?>

                    <li class="main-articles__item">
                        <div class="main-articles__img">
                            <?php the_post_thumbnail( '' );  ?>
                        </div>
                        <div class="main-articles__item-text">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link">читать далее >></a>
                        </div>
                    </li>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                </ul>
                <div id="articles">
                    <div class="input-wrapper">
                        <input class="search input input--search" type="text" placeholder="Поиск">
                        <i class="icon-search"></i>
                    </div>
                    <h4>Статьи на сайте</h4>
                    <ul class="main-articles-list-search list">
                        <?php
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                        'category' => 5,
                                        'orderby' => 'title',
                                        'order' => 'ASC',
                                        'post_type'   => 'post',
                                        'suppress_filters' => true,
                                    ) );

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                                ?>
                        <li class="main-articles-item-search">
                            <a class="link article-single" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php
                                }
                                wp_reset_postdata();
                            ?>
                    </ul>
                    <div class="tags">
                        <h4>Рубрики</h4>
                        <div class="tags__wrapper">
                            <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'style' => 'none',
                                    'title_li' => '',
                                    'exclude' => '1,4,3',
                                    'hide_empty' => 0,
                                    'depth' => 0,
                                    'echo' => 1,
                                    'separator' => '',
                                );

                                wp_list_categories($args);
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>