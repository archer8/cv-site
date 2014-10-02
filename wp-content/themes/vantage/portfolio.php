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
        <div class="portfolio-items">
            <?php
            foreach ($items as $value) {
                ?>
                <div class="col-lg-4 web-item <?php
                     foreach ($value['type'] as $entry) {
                         echo $entry . ' ';
                     }
                     ?>">
                    <img src="<?php echo $value['images']; ?>">
                </div>
                <?php
            }
            ?>

        </div>



        <?php var_dump($items); ?>

    </div><!-- #primary .content-area -->
</div>



<?php get_footer(); ?>


