<?php
/*
Template Name: Ретрит
*/
	get_header();
?>
<main>
    <h1 class="visually-hidden">РЕТРИТ - БОЛЬШЕ, ЧЕМ ПРОСТО ОТДЫХ</h1>
    <section class="hero">
        <div class="container">
            <h2 class="title-center"><?php the_title();?></h2>
            <div class="hero__wrapper">
                <div class="hero__video-item">
                    <video controls>
                        <source type="video/mp4" src="<?= get_field("главное_видео"); ?>">
                    </video>
                </div>
                <div class="video__item"><?php the_content();?></div>
            </div>
        </div>
    </section>

    <section class="place _element-animation">
        <div class="container">
            <h2 class="place__title title-center">Место проведения</h2>
            <p class="place__text">Мы будем жить на берегу моря в тихом и уединенном поселке Андреевка, недалеко от
                Севастополя. В шаговой доступности прекрасные дикие и общественный пляжи, песчаные скалы, живописный мыс
                Лукулл, благоухающий тенистый парк, маковые поля, дикий миндаль и виноградники.
            <p>

            <ul class="place__list single-gallery">
                <?php
                $photos = get_field('место_проведения_галерея');

                if ($photos) {
                    foreach ($photos as $photo) {
                        echo '<li class="place__item">';
                            echo '<a href="'. esc_url($photo) .'">';
                                echo '<img src="'. esc_url($photo) .'" alt="auto">';
                            echo '</a>';
                        echo '</li>';
                    }
                } else {
                    echo 'No photos found2.';
                }
                ?>
            </ul>
        </div>

    </section>

    <section class="program _tabs _hide _element-animation">
        <div class="container">
            <h2 class="title-center">Программа тура</h2>
            <div class="program__wrapper _tabs">
                <nav class="program__nav">
                    <button class="program__btn _tabs-item _active" data-tab="#tab1">День 1</button>
                    <button class="program__btn _tabs-item" data-tab="#tab2">День 2</button>
                    <button class="program__btn _tabs-item" data-tab="#tab3">День 3</button>
                </nav>

                <div class="_tabs-block _active" id="tab1">
                    <ul>
                        <li>1:30 — Прибытие утренним рейсом, трансфер в отель</li>
                        <li>3:00 — Обед, знакомство, расселение</li>
                    </ul>
                </div>
                <div class="_tabs-block" id="tab2">
                    <ul>
                        <li>8:00 — Утренняя медитация</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                        <li>Утренняя сессия: йога-техники снятия усталости и восстановления сил</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                    </ul>
                </div>
                <div class="_tabs-block" id="tab3">
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
                        <div class="_tabs-content _active" style="max-height: 100px;">
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

    <section class="video-review _hide _element-animation">
        <div class="container">
            <h2 class="title-center">Что говорят о ретрите участники</h2>
            <div class="video-review__wrapper swiper">
                <ul class="video-review__list swiper-wrapper">
                    <?php while (have_rows("видео_отзыв")):
                        the_row(); ?>
                    <li class="video-review__item swiper-slide">
                        <video class="video-item" controls>
                            <source src="<?php the_sub_field("отзыв") ?>" type="video/mp4">
                        </video>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="swiper-button-prev video-review-prev"></div>
            <div class="swiper-button-next video-review-next"></div>
        </div>
    </section>

    <section class="faq _hide _element-animation">
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

    <section class="previously _hide _element-animation">
        <div class="container">
            <h2 class="title-center">Как это было в прошлый раз</h2>
        </div>
        <div class="previously__wrapper previously-slider swiper">
            <ul class="previously__list swiper-wrapper single-gallery">
                <?php
                $photos = get_field('как_это_было_в_прошлый_раз_галерея');

                if ($photos) {
                    foreach ($photos as $photo) {
                        echo '<li class="swiper-slide">';
                            echo '<a href="'. esc_url($photo) .'">';
                                echo '<img src="'. esc_url($photo) .'" alt="auto">';
                            echo '</a>';
                        echo '</li>';
                    }
                } else {
                    echo 'No photos found2.';
                }
                ?>
            </ul>
            <div class="swiper-pagination previously__pagination"></div>
        </div>

    </section>
</main>

<?php get_footer(); ?>