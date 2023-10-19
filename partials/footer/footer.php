<footer class="footer">
    <div class="container">
        <div class="footer-body d-flex">
            <div class="col mb-4">
                <div class="widget">
                    <div class="logo-wrapper">
                        <a href="/" title="logo footer"><img class="img-white" src="<?php echo cs_get_option('logo') ?>" alt="logo footer" width="132" height="40" loading="lazy" /></a>
                        <p class="mt-1">Japan Premium Window Film</p>
                    </div>
                    <div class="widget-about-desc mt-4">
                        <p class="phone-list"><i class="demo-icon cus-win-phone"></i><a href="tel:84-274-3628268">84-274-3628268</a><a href="tel:(+84) 274 3628269">(+84) 274 3628269</a></p>
                        <p class="phone-list"><i class="demo-icon cus-win-email"></i><a href="mailto:lv-wincos@lintec.com.sg">lv-wincos@lintec.com.sg</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <h3 class="widget-title"><?php _e(cs_get_option('footer_1_heading')) ?></h3>
                <?php
                if ($footer_1 = cs_get_option('footer_1_menu')) {
                    wp_nav_menu([
                        'container' => false,
                        'menu_class' => 'widget-body',
                        'menu' => $footer_1,
                    ]);
                }
                ?>
            </div>
            <div class="col mb-4">
                <h3 class="widget-title"><?php _e(cs_get_option('footer_2_heading')) ?></h3>
                <?php
                if ($footer_2 = cs_get_option('footer_2_menu')) {
                    wp_nav_menu([
                        'container' => false,
                        'menu_class' => 'widget-body',
                        'menu' => $footer_2,
                    ]);
                }
                ?>
            </div>
            <div class="col mb-4">
                <div class="widget">
                    <?php
                    if ($footer_3 = cs_get_option('footer_3_menu')) :
                        $footer_3_item = wp_get_nav_menu_items($footer_3);
                        if ($footer_3_item) :
                    ?>
                            <div class="widget-list-title">
                                <?php foreach ($footer_3_item as $item) : ?>
                                    <a href="<?php echo $item->url ?>" class="widget-title h3 d-block"><?php echo $item->title ?></a>
                                <?php endforeach ?>
                            </div>
                    <?php endif;
                    endif ?>
                </div>
            </div>
            <div class="col mb-4"><a data-modal href="#contact-modal" class="btn btn-white btn-outline btn-ellipse text-normal"><?php echo __("Liên hệ tư vấn") ?></a></div>
        </div>
        <div class="footer-footer text-center pb-3">
            <p class="copyright"><a href="<?php echo home_url() ?>"><?php _e('© Bản quyền thuộc về Wincos Việt Nam.') ?></a></p>
        </div>
    </div>
</footer>
<div class="modal modal-form modal-popup fancybox-fade fancybox-hide" id="contact-modal">
    <div class="modal-body">
        <div class="title h4">Hãy liên hệ với chúng tôi đễ được hỗ trợ nhanh chóng</div>
        <form id="js-contactmodal-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" onsubmit="wincoContactForm();return false;">
            <div class="error-lst alert alert-icon alert-error alert-bg alert-inline list-mb-1" style="display: none"></div>
            <div class="form-group-wrapper">
                <div class="form-group"><input class="form-control" type="text" placeholder="Họ và tên*" name="name" required="" /></div>
                <div class="form-group"><input class="form-control" type="email" placeholder="Email*" name="email" required="" /></div>
                <div class="form-group"><input class="form-control" type="tel" placeholder="Số điện thoại" name="phone" /></div>
                <div class="form-group"><textarea class="form-control" placeholder="Lời nhắn của bạn*" name="body" required=""></textarea></div>
                <input type="hidden" name="action" value="handle_contact_submit">
                <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce'); ?>
            </div>
            <div class="btn-container d-flex justify-content-between">
                <button class="btn btn-default br-sm d-block d-lg-none popup-close">Đóng</button><button class="btn btn-primary br-sm" type="submit">Gửi</button>
            </div>
        </form>
    </div>
</div>
<div class="modal modal-form modal-popup fancybox-fade fancybox-hide" id="product-contact-modal">
    <div class="modal-body">
        <div class="title h4">Liên hê mua sản phẩm</div>
        <form id="js-productcontactmodal-form" action="" method="post" novalidate="novalidate">
            <div class="error-lst alert alert-icon alert-error alert-bg alert-inline list-mb-1" style="display: none"></div>
            <div class="form-group-wrapper">
                <div class="form-group"><input class="form-control" type="text" placeholder="Họ và tên*" name="name" required="" /></div>
                <div class="form-group"><input class="form-control" type="email" placeholder="Email*" name="email" required="" /></div>
                <div class="form-group"><input class="form-control" type="tel" placeholder="Số điện thoại" name="phonenumber" /></div>
                <div class="form-group"><textarea class="form-control" placeholder="Lời nhắn của bạn*" name="body" required=""></textarea></div>
                <input type="hidden" name="action" value="handle_contact_submit">
                <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce'); ?>
            </div>
            <div class="btn-container d-flex justify-content-between">
                <button class="btn btn-default br-sm d-block d-lg-none popup-close">Đóng</button><button class="btn btn-primary br-sm" type="submit">Gửi</button>
            </div>
        </form>
    </div>
</div>
<a class="scroll-top demo-icon cus-up-open-big" id="scroll-top" href="#top" title="Top" role="button"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 214, 400"></circle>
    </svg></a>
<div class="modal modal-error modal-popup fancybox-fade fancybox-hide" id="error-modal">
    <div class="modal-body">
        <div class="alert alert-error alert-bg alert-button alert-block text-right">
            <button class="btn btn-link btn-close popup-close" aria-label="button"><i class="close-icon"></i></button>
            <div class="alert-title text-left"><i class="ecs-icon-exclamation-triangle"></i>Thông báo lỗi</div>
            <p class="text-left">Hệ thống gặp sự cố kỹ thuật vui lòng thử lại sau...</p>
            <a class="btn btn-sm btn-primary btn-rounded popup-close" href="javascript:">Đóng</a>
        </div>
    </div>
</div>
<div class="modal modal-error modal-popup fancybox-fade fancybox-hide" id="success-modal">
    <div class="modal-body">
        <div class="alert alert-success alert-bg alert-button alert-block text-right">
            <button class="btn btn-link btn-close popup-close" aria-label="button"><i class="close-icon"></i></button>
            <div class="alert-title text-left"><i class="demo-icon cus-ok"></i>Thành công!!!</div>
            <p class="text-left">Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.</p>
            <a class="popup-close" href="javascript:">Đóng</a><span class="text-grey mr-1 ml-1">hoặc </span><a class="text-underline text-primary" href="/">Quay về trang chủ</a>
        </div>
    </div>
</div>
<div class="modal modal-error modal-popup fancybox-fade fancybox-hide" id="require-login-modal">
    <div class="modal-body">
        <div class="alert alert-error alert-bg alert-button alert-block text-right">
            <button class="btn btn-link btn-close popup-close" aria-label="button"><i class="close-icon"></i></button>
            <div class="alert-title text-left"><i class="ecs-icon-exclamation-triangle"></i>Thông báo lỗi</div>
            <p class="text-left">Vui lòng đăng nhập/đăng ký để sử dụng chức năng này.</p>
            <a class="btn btn-sm btn-default btn-rounded popup-close" href="javascript:">Đóng</a><a class="btn btn-sm btn-primary btn-rounded" href="">Đăng nhập</a>
        </div>
    </div>
</div>
<div class="modal modal-error modal-popup fancybox-fade fancybox-hide" id="confirm-modal">
    <div class="modal-body">
        <div class="alert alert-warning alert-bg alert-button alert-block text-right">
            <button class="btn btn-link btn-close popup-close" aria-label="button"><i class="close-icon"></i></button>
            <div class="alert-title text-left"><i class="ecs-icon-exclamation-circle"></i>Xác nhận</div>
            <p class="text-left"></p>
            <a class="btn btn-sm btn-default btn-rounded popup-close" href="javascript:">Đóng</a><a class="btn btn-sm btn-warning btn-rounded popup-confirm" href="javascript:">Đồng ý</a>
        </div>
    </div>
</div>
<div class="fancybox-fade fancybox-hide br-sm" id="cookie-popup">
    <div class="cookie-body mb-4">
        <div class="cookie-title font-weight-bold h4 mb-1">🍪 Cookie Notice</div>
        <div class="cookie-content title-des">
            <p>Trang web có sử dụng cookie để nâng cao trải nghiệm người dùng. Đọc “<a href="" title="chính sách cookie">chính sách cookie</a>”  và nếu bạn đồng ý với việc sử dụng cookie, hãy chọn "Đồng ý và Đóng".</p>
        </div>
    </div>
    <div class="cookie-footer d-flex display justify-content-end">
        <button class="btn btn-primary btn-ellipse text-normal" id="btn-acceptcookie">Đồng ý và đóng</button>
    </div>
</div>
<div id="loading">
    <div class="loading-content">
        <div class="loader"></div>
    </div>
</div>