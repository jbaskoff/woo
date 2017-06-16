<?php get_header() ?>

    <section class="main-slider">

        <?php $slider = new WP_Query(['post_type' => 'slider']) ?>
        <?php if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post(); ?>
            <div class="main-slider-item-wr">
                <div class="main-slider-item">
                    <?php the_post_thumbnail('full') ?>
                    <h2 class="slider-item-title"><?php the_content() ?></h2>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </section>
    <section class="services">

        <?php if (!dynamic_sidebar('service-description')) : ?>
            <p>Место для оисания сервисов добввляемого из виджетов</p>
        <?php endif; ?>

    </section>
    <section id="popular_goods" class="wrapper goods_tabs">
        <ul class="tabs">
            <li class='active good_tab_item'>Fetured</li>
            <li class="good_tab_item">New Itme</li>
            <li class="good_tab_item">Top Seller</li>
            <li class="good_tab_item">Top Ratting</li>
        </ul>
        <div class="tabs-content">
            <div class="good_content_item">
                <div class="good_item" data-discount="-30%">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
            </div>
            <div class="good_content_item">
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img2.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
            </div>
            <div class="good_content_item">
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
            </div>
            <div class="good_content_item">
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img4.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
            </div>
        </div>
    </section>
    <section class="action-sec">
        <div class="wrapper">
            <div class="action">
                <div class="action-pict">
                    <img src="<?php bloginfo('template_url') ?>/images/action-bkg.png" alt="">
                    <div class="action-price">
                        <div class="action-old-price"><i class="fa fa-usd"></i>2300</div>
                        <div class="action-new-price"><i class="fa fa-usd"></i>1100</div>
                    </div>
                </div>
                <div class="action-content">
                    <h2 class="action-title">50% OFF</h2>
                    <p class="action-descr">For walton Primo GH+</p>
                    <p class="action-quote">Power packed performance</p>
                    <p class="action-excerpt">Powered by a mighty 1.3 GHz Quad Core Processor and 1 GB fast RAM, the
                        Primo
                        GH+ allows seamless multitasking, faster webpage loading, smoother UI transitions and ultra
                        fast power-up.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe">
        <div class="wrapper">
            <h2>SUBCRIBE FOR GET OFFER UPDATE</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <form>
                <input type="text">
                <button>Lets go!</button>
            </form>
        </div>
    </section>
    <section id="laptop" class="wrapper goods_tabs">
        <ul class="tabs">
            <li class='active good_tab_item'>Smartphones</li>
        </ul>
        <div class="tabs-content">
            <div class="good_content_item">

                <?php $smartphone = new WP_Query(array(
                    'post_type' => 'product'
                )) ?>
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
    </section>
    <section id="desktop" class="wrapper goods_tabs">
        <ul class="tabs">
            <li class='active good_tab_item'>Desktop</li>
        </ul>
        <div class="tabs-content">
            <div class="good_content_item">
                <div class="good_item" data-discount="new">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
                <div class="good_item">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/images/card_img1.png"
                                                 alt=""></a>
                    <div class="good_title">Smart Phone Primo V1</div>
                    <div class="good_panel">
                        <div class="standard_panel">
                            <div class="good_price">
                                <p class="good_old_price"><i class="fa fa-usd" aria-hidden="true"></i>1000</p>
                                <p class="good_current_price"><i class="fa fa-usd" aria-hidden="true"></i>800</p>
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
            </div>
        </div>
    </section>
    <section>

<?php get_footer() ?>