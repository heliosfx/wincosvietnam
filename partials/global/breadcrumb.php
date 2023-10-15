<div class="breadcrumb mb-5">
    <?php if (isset($args['header'])) : ?>
        <div class="breadcrumb-header">
            <div class="container">
                <h1 class="text-primary text-uppercase font-weight-normal"><?php echo $args['header']?></h1>
            </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="breadcrumb-body">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
    </div>
</div>