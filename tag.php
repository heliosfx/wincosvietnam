<?php
get_header();
$category = get_queried_object();
?>
<main class="page-wrapper main" id="blogcat-page">
  <?php theme_partial('global/breadcrumb', ['header' => __('Tag: ') . $category->name]) ?>
  <div class="container mb-5">
    <div class="row gutter-xl">
      <div class="col-md-8 col-lg-9 mb-5">
        <section class="blogcat" id="blogcat">
          <div class="section-body row cols-md-2 cols-1 gutter-xl">
            <?php if (have_posts()) : while (have_posts()) :  the_post() ?>
                <?php theme_partial('post/loop-item') ?>
            <?php endwhile;
            endif; ?>
          </div>
          <div class="section-footer flex-center mt-5">
            <div class="pagination-container">
              <?php $pagination = paginate_links(array(
                'prev_text' => '«',
                'next_text' => '»',
                'type'  => 'array',
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
