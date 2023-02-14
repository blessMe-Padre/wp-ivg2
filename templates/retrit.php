<?php
/*
Template Name: Ретрит
*/
	get_header();
?>
<main>
    <h1 class="visually-hidden">РЕТРИТ - БОЛЬШЕ, ЧЕМ ПРОСТО ОТДЫХ</h1>
    <section class="video">
        <div class="container">
            <h2 class="title-center">Что такое ретрит?</h2>
            <div class="video__wrapper">
                <div class="video__video-item">
                    <video controls>
                        <source type="video/mp4"
                            src="<?php echo get_template_directory_uri() ?>/assets/video/video-2.mp4">
                    </video>
                </div>
                <div class="video__item">
                    <p class="about__item-text">
                        Слово ретрит — от английского retreat, означает уединенный отдых в тихом месте, где можно
                        спрятаться от повседневности и посвятить время себе. Это путешествие во внутренний мир, которое
                        в гармонии с природой дарит преображение и воодушевление. В последнее время мы нуждаемся в таком
                        отдыхе, как никогда раньше: постоянный стресс отнимает все силы. Что бы быстро восстановиться и
                        вернуть хорошее настроение, мало просто купить тур выходного дня. Нужно знать как правильно
                        отдыхать: успокаивать мысли, расслаблять тело, отпускать стресс и активировать гормоны счастья.
                        Хотите этому научиться? Тогда подарите себе ретрит на выходные, а лучше на всю неделю!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="place">
        <div class="container">
            <h2 class="place__title title-center">Место проведения</h2>
            <p class="place__text">Мы будем жить на берегу моря в тихом и уединенном поселке Андреевка, недалеко от
                Севастополя. В шаговой доступности прекрасные дикие и общественный пляжи, песчаные скалы, живописный мыс
                Лукулл, благоухающий тенистый парк, маковые поля, дикий миндаль и виноградники.
            <p>

            <ul class="place__list single-gallery">
                <li class="place__item">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.jpg">
                        <picture>
                            <!-- <source srcset="
                        <?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.webp" type="image/webp">
                        -->

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.jpg"
                                alt="мальдивы">
                        </picture>
                    </a>
                </li>
                <li class="place__item">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-2.jpg">
                        <picture>
                            <!-- <source srcset="
                        <?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.webp" type="image/webp">
                        -->

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-2.jpg"
                                alt="мальдивы">
                        </picture>
                    </a>
                </li>
                <li class="place__item">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-3.jpg">
                        <picture>
                            <!-- <source srcset="
                        <?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.webp" type="image/webp">
                        -->

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-3.jpg"
                                alt="мальдивы">
                        </picture>
                    </a>
                </li>
                <li class="place__item">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-4.jpg">
                        <picture>
                            <!-- <source srcset="
                        <?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.webp" type="image/webp">
                        -->

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-4.jpg"
                                alt="мальдивы">
                        </picture>
                    </a>
                </li>
                <li class="place__item">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-5.jpg">
                        <picture>
                            <!-- <source srcset="
                        <?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.webp" type="image/webp">
                        -->

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-5.jpg"
                                alt="мальдивы">
                        </picture>
                    </a>
                </li>
                <li class="place__item">
                    <a href="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-6.jpg">
                        <picture>
                            <!-- <source srcset="
                        <?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-1.webp" type="image/webp">
                        -->

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/retrit-gallary-6.jpg"
                                alt="мальдивы">
                        </picture>
                    </a>
                </li>
            </ul>
        </div>

    </section>

    <section class="program _tabs">
        <div class="container">
            <h2 class="title-center">Программа тура</h2>
            <div class="program__wrapper _tabs">
                <nav class="program__nav">
                    <button class="program__btn _tabs-item _active">День 1</button>
                    <button class="program__btn _tabs-item">День 2</button>
                    <button class="program__btn _tabs-item">День 3</button>
                </nav>

                <div class="_tabs-block _active">
                    <ul>
                        <li>1:30 — Прибытие утренним рейсом, трансфер в отель</li>
                        <li>3:00 — Обед, знакомство, расселение</li>
                    </ul>
                </div>
                <div class="_tabs-block">
                    <ul>
                        <li>8:00 — Утренняя медитация</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                        <li>Утренняя сессия: йога-техники снятия усталости и восстановления сил</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                    </ul>
                </div>
                <div class="_tabs-block">
                    <ul>
                        <li>Утренняя сессия: йога-техники снятия усталости и восстановления сил</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                    </ul>
                </div>
            </div>

            <div class="program__wrapper program__wrapper--mobile _tabs">
                <div class="program__nav">
                    <div class="_tabs-accordion">
                        <button class="program__btn _tabs-button _active">День 1</button>
                        <div class="_tabs-content _active" style="max-height: 70px;">
                            <ul>
                                <li>1:30 — Прибытие утренним рейсом, трансфер в отель</li>
                                <li>3:00 — Обед, знакомство, расселение</li>
                            </ul>
                        </div>
                    </div>

                    <div class="_tabs-accordion">
                        <button class="program__btn _tabs-button">День 2</button>
                        <div class="_tabs-content">
                            <ul>
                                <li>8:00 — Утренняя медитация</li>
                                <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                                <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                                <li>Утренняя сессия: йога-техники снятия усталости и восстановления сил</li>
                                <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                            </ul>
                        </div>
                    </div>

                    <div class="_tabs-accordion">
                        <button class="program__btn _tabs-button">День 3</button>
                        <div class="_tabs-content">
                            <ul>
                                <li>Утренняя сессия: йога-техники снятия усталости и восстановления сил</li>
                                <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="video-review">
        <div class="container">
            <h2 class="title-center">Что говорят о ретрите участники</h2>
            <div class="video-review__wrapper swiper">
                <ul class="video-review__list swiper-wrapper">
                    <li class="video-review__item swiper-slide">
                        <video class="video-item" controls>
                            <source type="video/mp4"
                                src="<?php echo get_template_directory_uri() ?>/assets/video/video-review-1.mp4">
                        </video>
                    </li>
                    <li class="video-review__item swiper-slide">
                        <video class="video-item" controls>
                            <source type="video/mp4"
                                src="<?php echo get_template_directory_uri() ?>/assets/video/video-review-2.mp4">
                        </video>
                    </li>
                    <li class="video-review__item swiper-slide">
                        <video class="video-item" controls>
                            <source type="video/mp4"
                                src="<?php echo get_template_directory_uri() ?>/assets/video/video-review-3.mp4">
                        </video>
                    </li>
                </ul>
            </div>
            <div class="swiper-button-prev video-review-prev"></div>
            <div class="swiper-button-next video-review-next"></div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2 class="title-center">Часто задаваемые вопросы</h2>
            <div class="faq__wrapper _tabs">
                <ul class="faq__list">
                    <li class="faq__item _tabs-accordion">
                        <button class="faq__btn _tabs-button">Как забронировать время?</button>
                        <div class="faq__content _tabs-content">
                            <p>Что бы забронировать время нужно отправить заявку на проведение ретрита, и, после
                                согласования программы, внести предоплату в размере 50%. В случае отсутствия
                                авиасообщения или иного форс-мажора, предоплата полностью возвращается.</p>
                        </div>
                    </li>
                    <li class="faq__item _tabs-accordion">
                        <button class="faq__btn _tabs-button">Возможно ли проживание с животным?</button>
                        <div class="faq__content _tabs-content">
                            <p>Что бы забронировать время нужно отправить заявку на проведение ретрита, и, после
                                согласования программы, внести предоплату в размере 50%. В случае отсутствия
                                авиасообщения или иного форс-мажора, предоплата полностью возвращается.</p>
                        </div>
                    </li>
                    <li class="faq__item _tabs-accordion">
                        <button class="faq__btn _tabs-button">Есть ли питание для вегетарианцев?</button>
                        <div class="faq__content _tabs-content">
                            <p>Что бы забронировать время нужно отправить заявку на проведение ретрита, и, после
                                согласования программы, внести предоплату в размере 50%. В случае отсутствия
                                авиасообщения или иного форс-мажора, предоплата полностью возвращается.</p>
                        </div>
                    </li>
                    <li class="faq__item _tabs-accordion">
                        <button class="faq__btn _tabs-button">Противоречат ли занятия моей вере?</button>
                        <div class="faq__content _tabs-content">
                            <p>Что бы забронировать время нужно отправить заявку на проведение ретрита, и, после
                                согласования программы, внести предоплату в размере 50%. В случае отсутствия
                                авиасообщения или иного форс-мажора, предоплата полностью возвращается.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="form">
        <h2><?= CFS()->get('form_title') ?></h2>
        <div class="container">
            <div class="form__wrapper">
                <?= do_shortcode( CFS()->get('form_shortcode')); ?>
                <p>* Ваши личные данные будут надежно защищены</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>