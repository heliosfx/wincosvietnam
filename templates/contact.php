<?php

/**
 * Template Name: Liên hệ
 */
get_header();
?>

<main class="page-wrapper main static-page" id="contact-page">
    <?php theme_partial('global/breadcrumb', ['header' => __('Liên hệ')]) ?>
    <section class="container static" id="contact">
        <div class="section-header row mb-5">
            <div class="col-sm-6 text-center mb-5">
                <div class="icon-box icon-box-primary bg-white h-100">
                    <span class="icon-box-icon icon-email ecs-icon-envelop-closed"></span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Địa chỉ E-mail</h4>
                        <p><a href="mailto:lv-wincos@lintec.com.sg" itemprop="email">lv-wincos@lintec.com.sg</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center mb-5">
                <div class="icon-box icon-box-primary bg-white h-100">
                    <span class="icon-box-icon icon-headphone ecs-icon-headphone"></span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Điện thoại</h4>
                        <p><a href="tel:84-274-3628268" itemprop="telephone">84-274-3628268</a><a href="tel:(+84) 274 3628269" itemprop="telephone">(+84) 274 3628269</a></p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-4 text-center mb-5">
                <div class="icon-box icon-box-primary bg-white h-100">
                    <span class="icon-box-icon icon-map-marker ecs-icon-map-marker"></span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Địa chỉ</h4>
                        <p><a href="https://www.google.com/maps/search/" target="_blank" rel="nofollow" itemprop="streetAddress">111 Nguyễn Hữu Cảnh, P.22, Quận Bình Thạnh, Tp.HCM</a></p>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- <div class="section-body mb-md-10 mb-5 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.020016297093!2d105.8524770149327!3d21.031885085996713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abc0462d982f%3A0x6ddde94c2316ef89!2zODUgTmd1eeG7hW4gSOG7r3UgSHXDom4sIEjDoG5nIELhuqFjLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1533779347721" frameborder="0" style="border: 0" allowfullscreen></iframe>
        </div> -->
        <div class="section-footer mb-10">
            <div class="title mb-3">Liên hệ với chúng tôi</div>
            <form id="js-contactmodal-form" class="contact-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" onsubmit="wincoContactForm();return false;">
                <div class="error-lst alert alert-icon alert-error alert-bg alert-inline list-mb-1" style="display: none">
                    <div class="alert-test">
                        <div class="alert-title ecs-icon-times-circle"></div>
                        Vui lòng điền họ và tên
                    </div>
                    <div class="alert-test">
                        <div class="alert-title ecs-icon-times-circle"></div>
                        Vui lòng điền số điện thoại
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-group">
                        <label>Họ và tên</label><input class="form-control get-value" type="text" placeholder="Họ và tên*" name="name" required="required" data-alert="Họ và tên" data-type="0" />
                    </div>
                    <div class="form-group">
                        <label>Email</label><input class="form-control get-value" type="email" placeholder="Email*" name="email" required="required" data-alert="Email" data-type="2" />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label><input class="form-control get-value" type="tel" placeholder="Số điện thoại*" name="phone" required="required" data-alert="Số điện thoại" data-type="1" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label><textarea class="form-control get-value" placeholder="Nội dung*" name="body" required="required" data-alert="Nội dung" data-type="3"></textarea>
                    </div>
                </div>
                <div class="btn-container"><button class="btn btn-primary br-sm w-sm-100" type="submit">Gửi</button></div>
                <input type="hidden" name="action" value="handle_contact_submit">
                <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce'); ?>
            </form>
        </div>
    </section>
</main>
<?php get_footer();
