<?php
/*
  Template name: Portfolio
 */
?>


<?php get_template_part('header-bootstrap'); ?>



<div id="primary-portfolio" class="content-area">
    <div id="content" class="site-content" role="main">
        

        <div id="filters" class="btn-group col-lg-12">  
            <button type="button" class="button btn btn-default is-checked" data-filter="*">All Websites</button>
            <button type="button" class="button btn btn-default" data-filter=".wordpress">Wordpress</button>
            <button type="button" class="button btn btn-default" data-filter=".shopify">Shopify</button>
            <button type="button" class="button btn btn-default" data-filter=".cmsms">CMSMS</button>
            <button type="button" class="button btn btn-default" data-filter=".static">Static HTML & CSS</button>
            <button type="button" class="button btn btn-default" data-filter=".symfony">Symfony</button>
            <button type="button" class="button btn btn-default" data-filter=".laravel">Laravel</button>            
        </div>
        <br><br><br>


        <?php
        $items = get_field('items');
        ?>
        <div class="portfolio-items" id="portfolio-items">
            <section class="grid-wrap">
                <ul class="grid">
                    <?php
                    foreach ($items as $value) {
                        ?>

                        <li class="web-item <?php
                        foreach ($value['type'] as $entry) {
                            echo $entry . ' ';
                        }
                        ?>">
                            <figure>

                                <img src="<?php echo $value['thumbnail']; ?>" alt="Example Image of <?php echo $value['title']; ?>">

                            </figure>
                        </li>

                        <?php
                    }
                    ?>
                </ul>
            </section>

            <section class="slideshow">
                <ul>

                    <?php
                    foreach ($items as $value) {
                        ?>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3><?php echo $value['title']; ?></h3>
                                   
                                    <?php echo $value['description']; ?>
                                </figcaption>
                                <a href="<?php echo $value['link']; ?>">
                                    <img src="<?php echo $value['display_image']; ?>" alt="Example Image of <?php echo $value['title']; ?>"/>
                                </a>
                            </figure>
                        </li>

                        <?php
                    }
                    ?>
                </ul>
                <nav>
                    <span class="icon nav-prev"></span>
                    <span class="icon nav-next"></span>
                    <span id="close-icon" class="icon nav-close"></span>
                </nav>
                <div class="info-keys icon">Navigate with arrow keys</div>
            </section>
        </div>
    </div><!-- #primary .content-area -->
</div>

<script>

</script>



<?php get_footer(); ?>


