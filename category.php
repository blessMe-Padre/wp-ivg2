<?php
	get_header();
?>
<main>
    <section class="articles">
        <div class="container">
            <h2><?php single_cat_title('Статьи в категории: '); ?></h2>
            <ul class="item-lessons-category">
            <?php
                // проверяем есть ли посты в глобальном запросе - переменная $wp_query
                if( have_posts() ){
                    // перебираем все имеющиеся посты и выводим их
                    while( have_posts() ){
                        the_post();
                        ?>


                        <li class="item-lessons"  <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div class="item-lessons__img">
                                <?php the_post_thumbnail( '' );  ?>
                            </div>
                            <div class="item-lessons__text">
                                <div class="item-lessons__wrapper">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="link">Читать далее</a>
                            </div>
                        </li>
                        <?php
                }
                ?>
            </ul>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

	<?php
}
// постов нет
else {
	echo "<h2>Записей нет.</h2>";
}
?>
        </div>
    </section>

</main>
<?php get_footer(); ?>