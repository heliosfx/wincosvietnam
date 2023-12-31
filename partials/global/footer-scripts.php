<script>
    const themeAssetUrl = "<?php echo THEME_ASSET_URL ?>";
    function wincoContactForm() {
        $form = jQuery('#js-contactmodal-form');
        const data = $form.serialize();
        jQuery.ajax({
            url: $form.attr('action'),
            method: 'post',
            data: data,
            dataType: 'json',
            beforeSend: function() {
                jQuery('#loading').show();
            },
            success: function(data) {
                jQuery('#loading').hide();
                $modal = jQuery('#success-modal');
                $modal.find('p.text-left').html(data.msg);
                Ecsgroup.popup(
                    [{
                        src: '#success-modal',
                        type: "inline"
                    }], {}, 'success');
            }
        });
    }
    if (document.documentElement.clientWidth > 1100) {
        setTimeout(function () {
            //addScript('/release/main.min.js')
            addScript(themeAssetUrl + 'release/instantpage.min.js')
        }, 3000);
    }
    document.addEventListener("DOMContentLoaded", function() {
        var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazyload-bg"));
        var lazyIframes = [].slice.call(document.querySelectorAll(".lazyload-iframe"));
        var lazyVideos = [].slice.call(document.querySelectorAll(".lazyload-video"));
        if ("IntersectionObserver" in window) {
            let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.backgroundImage = "url(" + entry.target.getAttribute("data-bg") + ")";
                        entry.target.classList.remove("lazyload-bg");
                        entry.target.classList.add("ls-is-cached", "lazyloaded");
                        lazyBackgroundObserver.unobserve(entry.target);
                    }
                });
            });
            let lazyIframeObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.setAttribute("src", entry.target.getAttribute("data-src"));
                        entry.target.classList.remove("lazyload-iframe");
                        entry.target.classList.add("ls-is-cached", "lazyloaded");
                        lazyIframeObserver.unobserve(entry.target);
                    }
                });
            });
            let lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        for (var source in entry.target.children) {
                            var videoSource = entry.target.children[source];
                            if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
                                videoSource.src = videoSource.dataset.src;
                            }
                        }
                        entry.target.load();
                        entry.target.classList.remove("lazyload-video");
                        entry.target.classList.add("ls-is-cached", "lazyloaded");
                        lazyVideoObserver.unobserve(entry.target);
                    }
                });
            });

            lazyBackgrounds.forEach(function(lazyBackground) {
                lazyBackgroundObserver.observe(lazyBackground);
            });
            lazyIframes.forEach(function(lazyIframe) {
                lazyIframeObserver.observe(lazyIframe);
            });
            lazyVideos.forEach(function(lazyVideo) {
                lazyVideoObserver.observe(lazyVideo);
            });
        }
    });
    addCss(themeAssetUrl + 'release/all.min.css');
    addScript(themeAssetUrl + 'release/default.min.js').then(function() {
        addScript(themeAssetUrl + 'release/all.min.js');
    });
    _runfx();
</script>