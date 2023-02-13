<?php
/*
Template Name: Контакты
*/
	get_header();
?>

        <main>
            <div class="container">
                <section class="contacts">
                    <h1>Контакты</h1>
                    <ul>
                        <li>
                            <a class="link" href="mailto:<?= CFS()->get('contact_email') ?>"><i
                                    class="icon-mail"></i><span><?= CFS()->get('contact_email') ?></span></a>
                        </li>
                        <li>
                            <a class="link" href="tel:+<?= CFS()->get('contact_phone_robots') ?>"><i class="icon-phone"></i><span>Телефон: <?= CFS()->get('contact_phone') ?></span></a>
                        </li>
                        <li>
                            <a class="link" href="tel:<?= CFS()->get('contact_phone_short_robots') ?>"><i class="icon-phone"></i><span>Телефон (короткий): <?= CFS()->get('contact_phone_short') ?></span></a>
                        </li>
                        <li>
                            <a class="link" href="<?= CFS()->get('contact_whatsapp_link') ?>"><i class="icon-whatsapp" target="_blank"></i><span>WhatsApp:
                            <?= CFS()->get('contact_whatsapp') ?></span></a>
                        </li>
                        <li>
                            <a class="link" href="<?= CFS()->get('contact_instagram_link') ?>"><i class="icon-instagram" target="_blank"></i><span>Instagram:
                            <?= CFS()->get('contact_instagram') ?></span></a>
                        </li>
                        <li>
                            <a class="link" href="#"><i class="icon-skype"></i><span>Skype: gorlachovairina</span></a>
                        </li>
                    </ul>
                    <p>Место проведения индивидуальных консультаций и семинарских занятий во Владивостоке: ул.
                        Лейтенанта Шмидта, 17, кабинет № 40.</p>
                    <div class="map">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?scroll=false&amp;um=constructor%3ABUlrFKnadWKS6zyVl91Juoj_mXz3HtOC"
                            frameborder="0" allowfullscreen="true" width="100%" height="500px"></iframe>
                    </div>
                    <p>Место проведения тренингов согласовывается после определения даты тренинга.</p>
                    <figure>
                        <img src="<?= CFS()->get('contact_view') ?>" alt="<?= CFS()->get('contact_view_text') ?>">
                        <figcaption>Вид из окна</figcaption>
                    </figure>
                </section>
            </div>
        </main>
<?php get_footer(); ?>