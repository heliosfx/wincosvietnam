<?php
if (!function_exists('winco_pre_get_posts')) {
    function winco_pre_get_posts($query)
    {
        if (!is_admin() && $query->is_main_query() && (is_category() || is_tag() || is_search())) {
            if ($_GET['month']) {
                $month = sanitize_text_field($_GET['month']);
                $query->set('year', date('Y'));
                $query->set('date_query', [
                    'monthnum' => $month
                ]);
            }
        }
    }
    add_action('pre_get_posts', 'winco_pre_get_posts');
}
