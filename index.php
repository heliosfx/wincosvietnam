<?php get_header();
$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 8,
];
$post_query = new WP_Query($args);
?>
<main class="page-wrapper main home" id="index-page">
    <section class="index-section1 d-flex" style="background-image: url(<?php echo THEME_ASSET_URL ?>images/default/index-img1.jpg)">
        <div class="container text-white h-auto d-flex flex-wrap">
            <h1 class="section-title text-white w-100 mb-10">
                Phim cách nhiệt<br /> hiệu suất cao
            </h1>
            <div class="section-des des-title font-weight-bold w-100 mt-auto h5 text-white" style="letter-spacing: 0.4px">
                <p>Wincos “thiết kế tiện nghi” ở Nhật Bản và toàn thế giới.</p>
            </div>
        </div>
    </section>

    <?php theme_partial("/global/automotive") ?>

    <?php theme_partial("/global/architecture") ?>
    
    <section class="index-section4 container">
        <div class="section-item row mb-5 mb-md-10">
            <figure class="col-md-6 section-media">
                <img src="<?php echo THEME_ASSET_URL ?>images/default/index-img4.jpg" alt="Công nghệ Wincos" width="585" height="696" loading="lazy" />
            </figure>
            <div class="col-md-6 section-details d-flex align-items-center">
                <div class="section-wrapper">
                    <div class="section-subtitle title-line-right">Công nghệ</div>
                    <h2 class="section-title text-primary w-100 font-weight-semibold mt-3 mt-lg-10 mb-3" style="letter-spacing: -2.52px">
                        CÔNG NGHỆ<br /> WINCOS
                    </h2>
                    <div class="section-content mb-5 des-title text-justify">
                        <p>Thế mạnh về công nghệ của Wincos đã và luôn phát triển để đáp ứng yêu cầu của khách hàng. Các bên bán hàng, nghiên cứu và sản xuất cùng nhau để tìm ra giải pháp tốt nhất từ ​​góc nhìn của họ, đem đến trải nghiệm gần gũi nhất cho khách hàng. Tầm nhìn và năng lực phát triển không ngừng và tạo ra các công nghệ mới dẫn đến tương lai.</p>
                    </div>
                    <div class="section-btn"><a class="btn btn-primary text-normal btn-ellipse" href="<?=home_url('technology') ?>/" title="Công nghệ của phim cách nhiệt">Đọc thêm</a></div>
                </div>
            </div>
        </div>
        <div class="section-item row mb-5 mb-md-10">
            <figure class="col-md-6 section-media">
                <img src="<?php echo THEME_ASSET_URL ?>images/default/index-img5.jpg" alt="Thiết kế sự tiện nghi" width="585" height="696" loading="lazy" />
            </figure>
            <div class="col-md-6 section-details d-flex align-items-center">
                <div class="section-wrapper">
                    <div class="section-subtitle title-line-right pr-5">ADN</div>
                    <h2 class="section-title text-primary w-100 font-weight-semibold mt-3 mt-lg-10 mb-3" style="letter-spacing: -2.52px">
                        THIẾT KẾ<br /> <span>sự</span> TIỆN NGHI
                    </h2>
                    <div class="section-content mb-5 des-title text-justify">
                        <p>Thế mạnh về công nghệ của Wincos đã và luôn phát triển để đáp ứng yêu cầu của khách hàng. Các bên bán hàng, nghiên cứu và sản xuất cùng nhau để tìm ra giải pháp tốt nhất từ ​​góc nhìn của họ, đem đến trải nghiệm gần gũi nhất cho khách hàng. Tầm nhìn và năng lực phát triển không ngừng và tạo ra các công nghệ mới dẫn đến tương lai.</p>
                    </div>
                    <div class="section-btn"><a class="btn btn-primary text-normal btn-ellipse" href="<?=home_url('adn') ?>/" title="ADN của phim cách nhiệt">Wincos ADN</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="index-section5 container mb-5" id="blog">
        <div class="section-header d-flex align-items-center justify-content-between mb-5">
            <h2 class="section-title text-uppercase text-primary font-weight-normal mb-0"><?php _e('Blog') ?></h2>
            <div class="section-btn"><a href="/blog/" class="btn btn-primary text-normal btn-ellipse"><?php _e('Đọc thêm') ?></a></div>
        </div>
        <div class="section-body row cols-lg-4 cols-2">
            <?php if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post() ?>
                    <div class="item-wrap">
                        <div class="item h-100">
                            <div class="item-details">
                                <div class="item-date text-primary"><?php echo get_the_date("Y/m/d") ?></div>
                                <h3 class="item-title mt-2 mb-4"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
                                <div class="item-btn"><a href="<?php the_permalink() ?>" class="btn btn-primary btn-outline text-normal btn-ellipse font-weight-normal"><?php _e('Đọc thêm') ?></a></div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif;wp_reset_postdata() ?>
        </div>
    </section>
</main>
<?php
get_footer();
