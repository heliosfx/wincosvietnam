<?php
global $wp;
$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 5,
];
$post_query = new WP_Query($args);
$tags = get_tags();
?>
<aside class="sidebar" id="sidebar">
    <div class="sidebar-body">
        <div class="sticky-sidebar">
            <div class="widget widget-search-form">
                <div class="widget-body">
                    <form action="/" method="get">
                        <div class="form-wrapper d-flex">
                            <input name="s" class="form-control" type="search" placeholder="<?php _e('Tìm kiếm...') ?>" value="<?php echo get_search_query() ?>" /><button class="btn btn-search demo-icon demo-icon cus-search"></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="widget widget-tag">
                <div class="widget-title text-uppercase"><?php _e('Thẻ') ?></div>
                <div class="widget-body">
                    <?php if ($tags) : foreach ($tags as $tag) : ?>
                            <a class="tag" href="<?php echo get_tag_link($tag) ?>"><?php echo $tag->name ?></a>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
            <?php if(!is_single()) : ?>
            <div class="widget widget-select">
                <div class="widget-title text-uppercase"><?php _e('Lưu trữ') ?></div>
                <div class="widget-body">
                    <select id="month" class="form-control" name="month">
                        <option value="0"><?php _e('Chọn tháng') ?></option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) : ?>
                            <option <?php echo $_GET['month'] == $i ? 'selected' : '' ?> value="<?php echo $i ?>"><?php _e('Tháng') ?> <?php echo $i ?></option>
                        <?php endfor ?>
                    </select>
                </div>
            </div>
            <?php endif; ?>
            <div class="widget widget-blogs">
                <div class="widget-title text-normal"><?php  _e('Bài viết gần đây')?></div>
                <ul class="widget-body">
                    <?php if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post() ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata() ?>
                </ul>
            </div>
        </div>
    </div>
</aside>
<script>
    _queuefx(function() {
        const currentUrl = "<?php echo is_search() ? preg_replace("/&month=(.)+/","",home_url(add_query_arg(array($_GET), $wp->request))) : home_url($wp->request) ?>";
        const isSearch = Boolean(<?php echo intval(is_search()) ?>);
        jQuery('#month').on('change', function() {
            if (jQuery(this).val() != 0) {
                location.href = currentUrl + (isSearch ? "&month="+jQuery(this).val() : "?month="+jQuery(this).val());
            } else {
                location.href = isSearch ? "<?php echo preg_replace("/&month=(.)+/","",home_url(add_query_arg(array($_GET), $wp->request))) ?>" : location.href.split("?")[0];
            }
        });
    });
</script>