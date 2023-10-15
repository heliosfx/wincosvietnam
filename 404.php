<?php
get_header();
?>
<main class="page-wrapper main error-page" id="404-page">
    <section class="error lazyload-bg bg-grey" id="404" data-bg="<?php echo THEME_ASSET_URL ?>images/default/city-cloud.png">
        <div class="container">
            <div class="section-header d-flex justify-content-center align-items-center">
                <h1 class="section-title">404</h1>
                <div class="section-des">
                    <p class="title"><i class="demo-icon cus-attention"></i> Oops! Trang không tìm thấy.</p>
                    <p>Xin lỗi, trang bạn đang tìm kiếm không tồn tại!.</p>
                    <p>Bạn có thể trở lại <a href="<?php echo home_url() ?>">trang chủ</a> hoặc thử sử dụng khung tìm kiếm sau.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();
