<div class="d-block d-lg-none" id="nav-mobile">
    <div class="nav-header pt-2 pb-2 sticky-content fix-top sticky-header-mobile nav-hidden bg-white">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="--left">
                <a class="mobile-menu-toggle mobile-menu-btn" href="javasript:" title="Menu button"><span></span></a>
            </div>
            <div class="logo-wrapper">
                <a href="/" title="logo mobile"><img src="<?php echo cs_get_option('logo') ?>" alt="logo mobile" width="133" height="52" loading="lazy" /></a>
            </div>
            <div class="-right"><a class="btn btn-primary btn-ellipse text-normal" href="#contact-modal" data-modal title="<?php _e("Đăng ký tư vấn") ?>"><?php _e("Đăng ký tư vấn") ?></a></div>
        </div>
    </div>
</div>
<div class="d-block d-lg-none" id="nav-mobile-content">
    <div class="flex-container">
        <div class="--body">
            <nav>
                <?php wp_nav_menu([
                    'container' => false,
                    'menu_class' => 'vertical-menu nav mobile-menu',
                    'theme_location' => 'primary_mobile',
                    'walker' => new Wincos_Mobile_Menu_Walker(),
                ]) ?>
            </nav>
        </div>
    </div>
</div>
<header class="d-none d-lg-block d-md-none">
    <div class="header-body bb sticky-content fix-top sticky-header">
        <div class="container">
            <div class="header-body-wrapper bg-white d-flex justify-content-between align-items-center">
                <div class="header-body-left logo-wrapper">
                    <a href="/" title="logo pc"><img src="<?php echo cs_get_option('logo') ?>" alt="logo pc" width="132" height="40" loading="lazy" /></a>
                </div>
                <div class="header-body-center">
                    <nav class="nav-pc" id="nav-pc">
                        <?php wp_nav_menu([
                            'container' => false,
                            'menu_class' => 'menu nav-pc-body nav d-flex',
                            'theme_location' => 'primary',
                            'walker' => new Wincos_Menu_Walker(),
                        ]) ?>
                    </nav>
                </div>
                <div class="header-body-right"><a class="btn btn-primary btn-ellipse text-normal" href="#contact-modal" data-modal title="<?php _e("Đăng ký tư vấn") ?>"><?php _e("Đăng ký tư vấn") ?></a></div>
            </div>
        </div>
    </div>
</header>