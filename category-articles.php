<?php
	get_header();
?>
<main>
    <section class="articles">
        <div class="container">
            <h1 class="title-center">Статьи</h1>
            <div class="articles__wrapper">
                <ul class="articles__list">
                    <?php
			if(have_posts()) {
				while (have_posts()) {
					the_post();
					$all_category = get_the_category();
					$res_name = '';
					foreach ($all_category as $category ) {
						if($category->term_id == 5 || $category->term_id == 6) {
							$res_name = $category->slug;
						}
					}
					?>
                    <li class="articles__item">
                        <div class="articles__img">
                            <?php the_post_thumbnail( '' );  ?>
                        </div>
                        <div class="articles__item-text">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link">читать далее >></a>
                        </div>
                    </li>
                    <?php
				}
			}
			?>
                    <?php the_posts_pagination(); ?>
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