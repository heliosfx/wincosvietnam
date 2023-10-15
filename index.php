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
                Phim cách nhiệt<br />
                hiệu suất cao
            </h1>
            <div class="section-des des-title font-weight-bold w-100 mt-auto h5 text-white" style="letter-spacing: 0.4px">
                <p>Wincos “thiết kế tiện nghi” ở Nhật Bản và toàn thế giới.</p>
            </div>
        </div>
    </section>
    <section class="index-section2 d-flex align-items-center" style="background-image: url(<?php echo THEME_ASSET_URL ?>images/default/index-img2.jpg)">
        <div class="container text-white">
            <div class="section-wrapper pt-10 pb-10">
                <div class="section-header">
                    <div class="section-subtitle title-line-right text-white">Sản phẩm</div>
                    <h2 class="section-title text-white w-100 font-weight-semibold mt-5 mt-lg-10 mb-2" style="letter-spacing: -2.64px">Ô TÔ</h2>
                    <div class="section-des des-title font-weight-bold h5 text-white" style="letter-spacing: 1.829px">
                        <p>Phim cách nhiệt cho xe</p>
                    </div>
                </div>
                <div class="section-body mt-2 mb-md-10">
                    <div class="section-content mb-5 mb-md-10 des-title text-justify" style="letter-spacing: 1.28px">
                        <p>
                            Lái xe thoải mái và xa hơn!<br />
                            Wincos chặn ánh sáng mặt trời và tia cực tím (UV - Ultra Violet) giúp kiểm soát nhiệt độ bên trong xe, góp phần cải thiện hiệu quả sử dụng nhiên liệu. Giải pháp thân thiện cho con
                            người và môi trường.
                        </p>
                    </div>
                    <div class="section-btn"><a class="btn btn-white btn-outline text-normal btn-ellipse">Thông tin chi tiết</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="index-section3 d-flex align-items-center" style="background-image: url(<?php echo THEME_ASSET_URL ?>images/default/index-img3.jpg)">
        <div class="container text-white">
            <div class="section-wrapper pt-10 pb-10">
                <div class="section-header">
                    <div class="section-subtitle title-line-right text-white">Sản phẩm</div>
                    <h2 class="section-title text-white w-100 font-weight-semibold mt-5 mt-lg-10 mb-2" style="letter-spacing: -2.64px">KIẾN TRÚC</h2>
                    <div class="section-des des-title font-weight-normal h5 text-white" style="letter-spacing: 1.829px">
                        <p>PHIM CỬA SỔ CHO CÔNG TRÌNH</p>
                    </div>
                </div>
                <div class="section-body mt-2">
                    <div class="section-content mb-5 mb-md-10 des-title text-justify" style="letter-spacing: 1.28px">
                        <p>
                            Chúng tôi nâng cao giá trị của không gian bằng công nghệ cao và phim chức năng.Tại Wincos, chúng tôi theo sát các yêu cầu thông qua một hệ thống cộng tác trơn tru giúp kết nối khách
                            hàng và địa điểm sản xuất, đồng thời phản hồi một cách tỉ mỉ.Chúng tôi tùy chỉnh các chức năng và đề xuất loại phim tối ưu..
                        </p>
                    </div>
                    <div class="section-btn"><a class="btn btn-white btn-outline text-normal btn-ellipse">Thông tin chi tiết</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="index-section4 container">
        <div class="section-item row mb-5 mb-md-10">
            <figure class="col-md-6 section-media"><img src="<?php echo THEME_ASSET_URL ?>images/default/index-img4.jpg" alt="" width="585" height="696" loading="lazy" /></figure>
            <div class="col-md-6 section-details d-flex align-items-center">
                <div class="section-wrapper">
                    <div class="section-subtitle title-line-right">Công nghệ</div>
                    <h2 class="section-title text-primary w-100 font-weight-semibold mt-3 mt-lg-10 mb-3" style="letter-spacing: -2.52px">
                        CÔNG NGHỆ<br />
                        WINCOS
                    </h2>
                    <div class="section-content mb-5 des-title text-justify">
                        <p>
                            Thế mạnh về công nghệ của Wincos đã và luôn phát triển để đáp ứng yêu cầu của khách hàng. Các bên bán hàng, nghiên cứu và sản xuất cùng nhau để tìm ra giải pháp tốt nhất từ ​​góc
                            nhìn của họ, đem đến trải nghiệm gần gũi nhất cho khách hàng. Tầm nhìn và năng lực phát triển không ngừng và tạo ra các công nghệ mới dẫn đến tương lai.
                        </p>
                    </div>
                    <div class="section-btn"><a class="btn btn-primary text-normal btn-ellipse">Đọc thêm</a></div>
                </div>
            </div>
        </div>
        <div class="section-item row mb-5 mb-md-10">
            <figure class="col-md-6 section-media"><img src="<?php echo THEME_ASSET_URL ?>images/default/index-img5.jpg" alt="" width="585" height="696" loading="lazy" /></figure>
            <div class="col-md-6 section-details d-flex align-items-center">
                <div class="section-wrapper">
                    <div class="section-subtitle title-line-right pr-5">ADN</div>
                    <h2 class="section-title text-primary w-100 font-weight-semibold mt-3 mt-lg-10 mb-3" style="letter-spacing: -2.52px">
                        THIẾT KẾ<br />
                        <span>sự</span> TIỆN NGHI
                    </h2>
                    <div class="section-content mb-5 des-title text-justify">
                        <p>
                            Thế mạnh về công nghệ của Wincos đã và luôn phát triển để đáp ứng yêu cầu của khách hàng. Các bên bán hàng, nghiên cứu và sản xuất cùng nhau để tìm ra giải pháp tốt nhất từ ​​góc
                            nhìn của họ, đem đến trải nghiệm gần gũi nhất cho khách hàng. Tầm nhìn và năng lực phát triển không ngừng và tạo ra các công nghệ mới dẫn đến tương lai.
                        </p>
                    </div>
                    <div class="section-btn"><a class="btn btn-primary text-normal btn-ellipse">Wincos ADN</a></div>
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
