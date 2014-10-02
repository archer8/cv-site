<?php
/*
  Template name: Home
 */
?>

<?php get_template_part('header-bootstrap'); ?>

<div id="primary-portfolio" class="content-area">

    <div id="content" class="site-content" role="main">


        <div class="row">
            <div class="col-lg-4">
                <div class="text-center content-block">
                    <a href='https://github.com/archer8'>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Octocat-157.png" alt="octocat">
                        <br>
                        <h3>GitHub</h3>
                        <p>Constantly being updated. Contains some of my past code contributions and work I've uploaded to Github.</p>
                    </a>
                </div><!-- #content .site-content -->

            </div>
            <div class="col-lg-4">
                <div class="text-center content-block">
                    <a href="portfolio">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pencil-157.png" alt="portfolio"> 
                        <br>
                        <h3>Portfolio</h3>
                        <p>My past body of work. </p>
                    </a>
                </div><!-- #content .site-content -->

            </div>
            
            <div class="col-lg-4">
                <div class="text-center content-block">
                    <a href="http://stackoverflow.com/users/1909155/chris">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/so-icon.png" alt="stackoverflow">
                        <br>
                        <h3>stackoverflow</h3>
                        <p>My questions and contributions to stackoverflow.</p>
                    </a>
                </div><!-- #content .site-content -->

            </div>
            
        </div>

    </div><!-- #primary .content-area -->
</div>



<?php get_footer(); ?>


