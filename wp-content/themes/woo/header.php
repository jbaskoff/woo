<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');
        the_title(' - ') ?></title>
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="wrapper">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'header_menu',
                    'menu'            => 'header_menu',
                    'container'       => false,
                    'items_wrap'      => '<ul class="header_nav">%3$s</ul>',
                    'link_before'     => '',
                    'link_after'      => ''
                )) ?>
        <form class="head_selects">

            <?php dynamic_sidebar('lang') ?>
            <?php dynamic_sidebar('currency') ?>

            <select id="currency">
                <option value="">uah</option>
                <option value="">usd</option>
                <option value="">tma</option>
            </select>
        </form>
    </div>
</header>
<div class="logo_section">
    <div class="wrapper">
        <a href="/" class="logo">lo<span>go</span></a>
        <div class="user_meta">
            <p class="cabinet">
                <a href="#">Log in</a> or <a href="#">Great account</a>
            </p>
            <div class="basket_wr">
                <div class="basket-wr-item">
                    <a href="#" data-amount='2' class="note fa fa-pencil-square-o"></a>
                    <div class="fall-basket">
                        <h6>Showing 2 of 2 items added </h6>
                        <hr class="single-hr">
                        <div class="added-good">
                            <div class="img-wr"><img src="images/basket-img.png" alt=""></div>
                            <div class="good-name-wr">
                                <p class="good-name">beatiful croad</p>
                                <p class="good-b-descr">Size: <span>One size</span></p>
                                <p class="good-b-descr">Quantity: <span>01</span></p>
                            </div>
                            <div class="good-b-price">
                                <div class="price">$30.00</div>
                                <a href="#" class="btn-del"></a>
                            </div>
                        </div>
                        <div class="added-good">
                            <div class="img-wr"><img src="images/basket-img.png" alt=""></div>
                            <div class="good-name-wr">
                                <p class="good-name">beatiful croad</p>
                                <p class="good-b-descr">Size: <span>One size</span></p>
                                <p class="good-b-descr">Quantity: <span>01</span></p>
                            </div>
                            <div class="good-b-price">
                                <div class="price">$30.00</div>
                                <a href="#" class="btn-del"></a>
                            </div>
                        </div>
                        <div class="total-sum">
                            <span>Total excluding delivry: </span>
                            <span>$80.00</span>
                        </div>
                        <div class="basket-button">
                            <a href="#" class="basket-button-item">View Cart</a>
                            <a href="#" class="basket-button-item">Continue To Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="basket-wr-item">
                    <a href="#" data-amount='1' class="basket fa fa-shopping-cart"></a>
                    <div class="fall-basket">
                        <h6>Showing 2 of 2 items added </h6>
                        <hr class="single-hr">
                        <div class="added-good">
                            <div class="img-wr"><img src="images/basket-img.png" alt=""></div>
                            <div class="good-name-wr">
                                <p class="good-name">beatiful croad</p>
                                <p class="good-b-descr">Size: <span>One size</span></p>
                                <p class="good-b-descr">Quantity: <span>01</span></p>
                            </div>
                            <div class="good-b-price">
                                <div class="price">$30.00</div>
                                <a href="#" class="btn-del"></a>
                            </div>
                        </div>
                        <div class="added-good">
                            <div class="img-wr"><img src="images/basket-img.png" alt=""></div>
                            <div class="good-name-wr">
                                <p class="good-name">beatiful croad</p>
                                <p class="good-b-descr">Size: <span>One size</span></p>
                                <p class="good-b-descr">Quantity: <span>01</span></p>
                            </div>
                            <div class="good-b-price">
                                <div class="price">$30.00</div>
                                <a href="#" class="btn-del"></a>
                            </div>
                        </div>
                        <div class="total-sum">
                            <span>Total excluding delivry: </span>
                            <span>$80.00</span>
                        </div>
                        <div class="basket-button">
                            <a href="#" class="basket-button-item">View Cart</a>
                            <a href="#" class="basket-button-item">Continue To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav_cat_wr">
    <div class="wrapper">
        <?php wp_nav_menu(array(
            'theme_location'  => 'cat_menu',
            'menu'            => 'cat_menu',
            'container'       => false,
            'items_wrap'      => '<ul class="nav_cat">%3$s</ul>',
        )) ?>

        <form class="search_form" action="">
            <input class="search" type="text" placeholder="Search Your Item........">
            <button class="search_btn fa fa-search"></button>
        </form>
    </div>
</div>