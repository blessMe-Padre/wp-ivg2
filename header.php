<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
			if(is_404()) {
				echo 'Ошибка 404';
			}
            if(is_category()) {
                single_cat_title('Рубрика: ');
            }
            else {
				the_title();
			}
		?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="container">
                    <div class="header__row">
                        <h1 class="header__title">Ирина Горлачёва</h1>
                        <div class="logo">
                            <p class="logo__text">Практический психолог во&nbsp;Владивостоке</p>
                            <div class="logo__img">
                                <a href="<?= home_url(); ?>">
                                    <?php the_custom_logo(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="btn nav-button" aria-label="Меню"></button>
                <nav class="nav">
                <?php wp_nav_menu([
					'theme_location' => 'top',
					'container' => '',
					'menu_class' => '',
					'menu_id' => ''
				]);
				?>
                </nav>
            </div>
        </header>
        <!-- конец header -->
