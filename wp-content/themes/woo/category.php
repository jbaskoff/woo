<?php if (isset($_SERVER['REQUEST_URI']))
$category_name = explode('/', $_SERVER['REQUEST_URI'])[2];
echo $category_name;
    ?>
<?php get_header() ?>

<div class="main-content">
    <div class="wrapper">
        <div class="breadcrumbs"><a href="#">Home</a> / <span>Desktop</span></div>
        <div class="grid">
            <div class="discount-banner">
                <div class="discount-banner-content">
                    BEST CONFIGURE AND SUPER BRAND 50% OFF
                </div>
            </div>
            <div class="category-item-grid">

                <?php $smartphone = new WP_Query() ?>
                <?php if ($smartphone->have_posts()) :
                while ($smartphone->have_posts()) :
                $smartphone->the_post();
                $_product = wc_get_product(get_the_ID()); ?>
                <?php if (!empty($_product->get_sale_price())) : ?>
                <?php $discount = 100 - ($_product->get_sale_price() * 100) / $_product->get_regular_price() ?>
                <div class="good_item" data-discount="-<?php echo round($discount, 0) ?>%">
                    <?php else: ?>
                    <div class="good_item">
                        <?php endif; ?>

                        <a href="<?php the_permalink() ?>" class="img"><img
                                    src="<?php echo get_the_post_thumbnail_url() ?>"
                                    alt="<?php the_post_thumbnail_caption() ?>"></a>
                        <div class="good_title"><?php the_title() ?></div>
                        <div class="good_panel">
                            <div class="standard_panel">
                                <div class="good_price">
                                    <?php if (empty($_product->get_sale_price())) : ?>
                                        <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>
                                            <?php echo $_product->get_regular_price() ?>
                                        </p>
                                    <?php else: ?>
                                        <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>
                                            <?php echo $_product->get_regular_price() ?>
                                        </p>
                                        <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>
                                            <?php echo $_product->get_sale_price() ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <ul class="stars">
                                    <li class="st fs"></li>
                                    <li class="st fs"></li>
                                    <li class="st hs"></li>
                                    <li class="st es"></li>
                                    <li class="st es"></li>
                                </ul>
                            </div>
                            <div class="hover_panel">
                                <div class="good_buttons_wr">
                                    <a href="#" class="good_btn card_btn active" aria-hidden="true"><i
                                                class="fa fa-shopping-cart"></i><span>add to cart</span></a>
                                    <a href="#" class="good_btn wish_btn" aria-hidden="true"><i
                                                class="fa fa-pencil-square-o"></i><span>Add to wish list</span></a>
                                    <a href="#" class="good_btn arrow_btn" aria-hidden="true"><i
                                                class="fa fa-exchange"></i><span>Add to Compare</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>


            </div>
            <div class="sidebar">
                <div class="sidebar-item">
                    <h6 class="sidebar-item-title">category</h6>
                    <a href="#" class="sidecar-item-category">Smart Phone</a>
                    <a href="#" class="sidecar-item-category active">desktop </a>
                    <a href="#" class="sidecar-item-category">accessories</a>
                    <a href="#" class="sidecar-item-category">laptop</a>
                    <a href="#" class="sidecar-item-category">networking</a>
                    <a href="#" class="sidecar-item-category">software</a>
                </div>
                <form class="sidebar-item">
                    <h6 class="sidebar-item-title">by Brand</h6>
                    <label class="sidebar-checkbox"><input type="checkbox"><span>hp</span></label>
                    <label class="sidebar-checkbox"><input type="checkbox" checked><span>dell</span></label>
                    <label class="sidebar-checkbox"><input type="checkbox"><span>apple</span></label>
                    <label class="sidebar-checkbox"><input type="checkbox"><span>asus</span></label>
                    <label class="sidebar-checkbox"><input type="checkbox"><span>sumsung</span></label>
                </form>
                <div class="sidebar-item">
                    <h6 class="sidebar-item-title">by price</h6>
                    <a href="#" class="sidecar-item-category">$500 - $1000</a>
                    <a href="#" class="sidecar-item-category active">$1000 - $2000 </a>
                    <a href="#" class="sidecar-item-category">$2000 - $3000</a>
                    <a href="#" class="sidecar-item-category">$3000 - $4000</a>
                    <a href="#" class="sidecar-item-category">$4000 - $5000</a>
                    <a href="#" class="sidecar-item-category">$5000 - $6000</a>
                </div>
                <div class="sidebar-banner">banner</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
