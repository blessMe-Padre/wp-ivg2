<?php
/*
Template Name: Услуги
*/
	get_header();
?>
<main>
    <div class="container">
        <section class="services">
            <h1 class="title-center">Услуги</h1>
            <h2 class="mb-30"><?= CFS()->get('services_title') ?></h2>
            <p><?= CFS()->get('services_text') ?></p>
            <ul class="services__list">
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
                <li class="services__item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="services__item-img">
                            <?php the_post_thumbnail( '' );  ?>
                        </div>
                        <p><?php the_title(); ?></p>
                    </a>
                </li>
                <?php
                }
                wp_reset_postdata();
            ?>
            </ul>

            <ul class="services__list-lessons">
                <?php
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                        'category' => 3,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                ?>
                <li class="item-lessons _hide _element-animation">
                    <div class="item-lessons__img">
                        <?php the_post_thumbnail( '' );  ?>
                    </div>
                    <div class="item-lessons__text">
                        <div class="item-lessons__wrapper">
                            <h3><?php the_title(); ?></h3>
                            <p><?= CFS()->get('service_desc') ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="link">читать далее >></a>
                    </div>
                </li>
                <?php
                }
                wp_reset_postdata();
            ?>
            </ul>
        </section>
    </div>
</main>
<?php get_footer(); ?>