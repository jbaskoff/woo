<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); the_title(' - ') ?></title>
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="wrapper">
        <ul class="header_nav">
            <li><a class="head_nav_item active" href="#"><i class="nav_ico fa fa-home"></i>Home</a></li>
            <li><a class="head_nav_item" href="#"><i class="nav_ico fa fa-user"></i>My Account</a></li>
            <li><a class="head_nav_item" href="#"><i class="nav_ico fa fa-shopping-cart"></i>hopping Cart</a></li>
            <li><a class="head_nav_item" href="#"><i class="nav_ico fa fa-check"></i>Checkout</a></li>
        </ul>
        <form class="head_selects">
            <select id="lang">
                <option value="">English</option>
                <option value="">Ukrainian</option>
                <option value="">Turkish</option>
            </select>
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
        <a href="#" class="logo">lo<span>go</span></a>
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
                                <p class="good-b-descr">Quantity: <span>01</span> </p>
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
                                <p class="good-b-descr">Quantity: <span>01</span> </p>
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
                            <a  href="#" class="basket-button-item">View Cart</a>
                            <a  href="#" class="basket-button-item">Continue To Checkout</a>
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
                                <p class="good-b-descr">Quantity: <span>01</span> </p>
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
                                <p class="good-b-descr">Quantity: <span>01</span> </p>
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
                            <a  href="#" class="basket-button-item">View Cart</a>
                            <a  href="#" class="basket-button-item">Continue To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav_cat_wr">
    <div class="wrapper">
        <ul class="nav_cat">
            <li><a class="nav_cat_item active" href="#">Smart Phone</a></li>
            <li><a class="nav_cat_item" href="#">Desktop</a></li>
            <li><a class="nav_cat_item" href="#">laptop</a></li>
            <li><a class="nav_cat_item" href="#">accessories</a></li>
            <li><a class="nav_cat_item" href="#">networking </a></li>
            <li><a class="nav_cat_item" href="#">software</a></li>
        </ul>
        <form class="search_form" action="">
            <input class="search" type="text" placeholder="Search Your Item........">
            <button class="search_btn fa fa-search"></button>
        </form>
    </div>
</div>