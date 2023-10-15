<?php
get_header();
?>
<main class="page-wrapper main" id="blogdetail-page">
    <?php theme_partial('global/breadcrumb') ?>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8 col-lg-9 mb-5">
                <section class="blogdetail" id="blogdetail">
                    <div class="section-header mb-4">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <div class="section-body blog-content">
                        <?php the_content() ?>
                    </div>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 mb-5">
                <?php get_sidebar('blog') ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
