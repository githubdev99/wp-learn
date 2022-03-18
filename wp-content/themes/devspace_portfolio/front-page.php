<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container">

        <header class="site-header">
            <h1><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></h1>
            <h5><?php bloginfo('description'); ?></h5>
        </header>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <article class="post">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </article>

        <?php endwhile;
        else :
            echo "<p>Tidak ada artikel</p>";
        endif;
        ?>

        <footer class="site-footer">
            <div class="attrib">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a> | Developed by <?= get_the_author_link() ?></div>
        </footer>

    </div><!-- /container -->

    <?php wp_footer(); ?>
</body>

</html>