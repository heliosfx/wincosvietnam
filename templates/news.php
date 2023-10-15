<?php

/**
 * Template Name: Tin tức
 */
get_header();
$root = get_categories(['parent' => 0, 'hide_empty' => 0]);
$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => cs_get_option('default_posts_per_page'),
    'paged' => get_query_var('paged')
];
if($_GET['month']) {
    $month = sanitize_text_field($_GET['month']);
    $args['year'] = date('Y');
    $args['date_query'] = [
        'monthnum' => $month
    ];
}
$query = new WP_Query($args);
$total_pages = $query->max_num_pages;
?>
<main class="page-wrapper main" id="blogcat-page">
<?php theme_partial('global/breadcrumb', ['header' => __('BLOG')]) ?>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8 col-lg-9 mb-5">
                <section class="blogcat" id="blogcat">
                    <?php if (count($root)) : ?>
                        <div class="section-header mb-4">
                            <ul class="scroll-tab-item scrollable" id="blogcat-scroll">
                                <li class="<?php echo is_page_template('templates/news.php') ? 'active' : '' ?>">
                                    <a href="/blog/">Tất cả</a>
                                </li>
                                <?php foreach ($root as $cat) : ?>
                                    <li class="<?php echo $cat->term_id == $category->term_id ? 'active' : '' ?>"><a href="<?php echo get_category_link($cat) ?>" title="<?php echo $cat->name ?>"><?php echo $cat->name ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <div class="section-body row cols-md-2 cols-1">
                        <?php if ($query->have_posts()) : while ($query->have_posts()) :  $query->the_post() ?>
                                <?php theme_partial('post/loop-item') ?>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                    <div class="section-footer flex-center mt-5">
                        <div class="pagination-container">
                            <?php $pagination = paginate_links(array(
                                'prev_text' => '«',
                                'next_text' => '»',
                                'type'  => 'array',
                                'total' => $total_pages,
                            ));
                            ?>
                            <ul class="pagination">
                                <?php foreach ($pagination as $page) : ?>
                                    <li class="page-item <?php echo strpos($page, 'current') ? 'active' : '' ?>"><?php echo str_replace(['page-numbers', 'span'], ['page-link', 'a'], $page) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
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
