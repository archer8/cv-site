<?php
/*
  Template name: About Me
 */
?>

<?php get_template_part('header-bootstrap'); ?>



<div id="primary" class="content-area">

    <div id="content" class="site-content" role="main">

        <?php
        

        the_excerpt();

        echo the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'vantage'));
        ?>



        <?php while (have_posts()) : the_post(); 
        
        the_title('<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->');
        
        ?>
        <br>
            <div class="entry-content">
                <?php
                if (siteorigin_setting('blog_archive_content') == 'excerpt')
                    the_excerpt();
                else
                    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'vantage'));
                ?>
                <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'vantage'), 'after' => '</div>')); ?>
            </div><!-- .entry-content -->
        <?php endwhile; // end of the loop.    ?>

    </div><!-- #content .site-content -->

</div><!-- #primary .content-area -->



<?php get_footer(); ?>
