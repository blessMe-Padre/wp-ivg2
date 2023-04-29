<?php
/*
Template Name: Отзывы
*/
	get_header();
?>
<main>
    <section class="descriptions">
        <div class="container">
            <h1 class="title-center">Обратная связь</h1>
            <p>Здесь вы можете задать вопрос на интересующую Вас тему,
                оставить отзывы или пожелания.</p>
            <?php comments_template(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>