<div class="post-wrap">
    <article class="post post-item">
        <figure class="post-media">
            <a class="img" href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img class="w-100" src="<?php echo dolazo_get_image_src(get_post_thumbnail_id(get_the_ID()), 'wincos-blog-thumb') ?>" alt="<?php the_title() ?>" width="377" height="208" loading="lazy" /></a>
        </figure>
        <div class="post-details pt-2 pb-2">
            <h3 class="post-title font-weight-bold mb-2"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
            <div class="post-content mb-4">
                <p><?php dolazo_excerpt(50) ?></p>
            </div>
            <div class="post-btn"><a href="<?php the_permalink() ?>" class="btn btn-primary btn-outline btn-ellipse text-normal font-weight-normal btn-sm">Đọc thêm</a></div>
        </div>
    </article>
</div>