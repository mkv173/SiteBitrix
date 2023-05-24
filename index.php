<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("createx");?>



<main class="main">
    <div class="main-slider">
        <div class="container">
            <p class="main-slider__text">New collection</p>
            <h1 class="main-slider__text_big">Menswear 2020</h1>
            <button class="button main-slider__button" type="submit">Shop sale</button>
            <button class="button button_solid" type="submit">Shop the menswear</button>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="categories top-categories">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "top_categories",
                    Array(
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "N",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "FILTER_NAME" => "sectionsFilter",
                        "IBLOCK_ID" => getIblockIdByCode('products'),
                        "IBLOCK_TYPE" => "products",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("",""),
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("",""),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "2",
                        "VIEW_MODE" => "TILE"
                    )
                );?>
            </div>
        </div>
    </section>
    <section>

        <div class="wide-container">
            <div class="new-arrivals">
                <div class="new-arrivals__text">
                    <p class="heading new-arrivals__heading">New arrivals</p>
                    <p class="new-arrivals__small-text">Check out our latest arrivals for the upcoming season</p>
                    <a class="new-arrivals__small-text" href="#" target="_blank"><span>See the collection here</span></a>
                </div>
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"new_arrivals", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "60",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => getIblockIdByCode('products'),
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "new_arrivals"
	),
	false
);?>
            </div>
        </div>
    </section>
    <section>
        <div class="wide-container">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"banners",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => getIblockIdByCode('banners_collection'),
		"IBLOCK_TYPE" => "banners",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "COUNTDOWN",
			1 => "SHOW_FORM",
			2 => "BUTTON_LINK",
			3 => "BUTTON_TEXT",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "banners"
	),
	false
);?>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="popular-categories">
                <p class="heading">Popular categories</p>
                <div class="categories">
                    <div>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/tops.png" alt="foto">
                            <p>Tops</p>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/t-shirts.png" alt="foto">
                            <p>T-shits</p>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/caps.png" alt="foto">
                            <p>Caps</p>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/sandals.png" alt="foto">
                            <p>Sandals</p>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/jackets.png" alt="foto">
                            <p>Jackets</p>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/coats.png" alt="foto">
                            <p>Coats</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="trending-now">
            <div class="container">
                <p class="heading">Trending now</p>
                <div class="product-card__row">
                    <div class="product-item">
                        <div class="product-item__wrap product-item__wrap_big">
                            <img class="product-item__img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/shirt.png" alt="shirt">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="star-rating__heart">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="product-item__info">
                            <p class="product-item__name">Shirt with insertion lace trims</p>
                            <p class="product-item__price">$18.15</p>
                        </div>
                        <div class="product-item__info product-item__info_active">
                            <div class="product-selection">
                                <div class="size">
                                    <button class="size__button">36</button>
                                    <button class="size__button">37</button>
                                    <button class="size__button">38</button>
                                    <button class="size__button">39</button>
                                    <button class="size__button">40</button>
                                </div>
                                <div class="color">
                                    <button class="color__button color__button_active"></button>
                                    <button class="color__button"></button>
                                    <button class="color__button"></button>
                                </div>
                            </div>
                            <div class="">
                                <button class="button button_s_14 button_solid button_add">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__wrap product-item__wrap_big">
                            <img class="product-item__img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/chrono.png" alt="chrono">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="star-rating__heart">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="product-item__info">
                            <p class="product-item__name">Chrono watch with blue leather belt</p>
                            <p class="product-item__price">$18.15</p>
                        </div>
                        <div class="product-item__info product-item__info_active">
                            <div class="product-selection">
                                <div class="size">
                                    <button class="size__button">36</button>
                                    <button class="size__button">37</button>
                                    <button class="size__button">38</button>
                                    <button class="size__button">39</button>
                                    <button class="size__button">40</button>
                                </div>
                                <div class="color">
                                    <button class="color__button color__button_active"></button>
                                    <button class="color__button"></button>
                                    <button class="color__button"></button>
                                </div>
                            </div>
                            <div class="">
                                <button class="button button_s_14 button_solid button_add">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__wrap product-item__wrap_big">
                            <img class="product-item__img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/check.png" alt="chek">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="star-rating__heart">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="product-item__info">
                            <p class="product-item__name">Check coat with colour contrast</p>
                            <p class="product-item__price">$18.15</p>
                        </div>
                        <div class="product-item__info product-item__info_active">
                            <div class="product-selection">
                                <div class="size">
                                    <button class="size__button">36</button>
                                    <button class="size__button">37</button>
                                    <button class="size__button">38</button>
                                    <button class="size__button">39</button>
                                    <button class="size__button">40</button>
                                </div>
                                <div class="color">
                                    <button class="color__button color__button_active"></button>
                                    <button class="color__button"></button>
                                    <button class="color__button"></button>
                                </div>
                            </div>
                            <div class="">
                                <button class="button button_s_14 button_solid button_add">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <button class="button">Explore top sales</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="sale">
            <div class="container">
                <p class="heading ">Sale up to 70%</p>
                <div class="product-card__row">
                    <div class="product-item">
                        <div class="product-item__wrap product-item__wrap_big">
                            <img class="product-item__img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/bag.png" alt="bag">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="star-rating__heart">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="product-item__info">
                            <p class="product-item__name">Leather crossbody bag with gold hardware</p>
                            <p class="product-item__price">$18.15</p>
                        </div>
                        <div class="product-item__info product-item__info_active">
                            <div class="product-selection">
                                <div class="size">
                                    <button class="size__button">36</button>
                                    <button class="size__button">37</button>
                                    <button class="size__button">38</button>
                                    <button class="size__button">39</button>
                                    <button class="size__button">40</button>
                                </div>
                                <div class="color">
                                    <button class="color__button color__button_active"></button>
                                    <button class="color__button"></button>
                                    <button class="color__button"></button>
                                </div>
                            </div>
                            <div class="">
                                <button class="button button_s_14 button_solid button_add">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__wrap product-item__wrap_big">
                            <img class="product-item__img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/skinny jeans.png" alt="jeans">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="star-rating__heart">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="product-item__info">
                            <p class="product-item__name">Skinny push-up jeans</p>
                            <p class="product-item__price">$18.15</p>
                        </div>
                        <div class="product-item__info product-item__info_active">
                            <div class="product-selection">
                                <div class="size">
                                    <button class="size__button">36</button>
                                    <button class="size__button">37</button>
                                    <button class="size__button">38</button>
                                    <button class="size__button">39</button>
                                    <button class="size__button">40</button>
                                </div>
                                <div class="color">
                                    <button class="color__button color__button_active"></button>
                                    <button class="color__button"></button>
                                    <button class="color__button"></button>
                                </div>
                            </div>
                            <div class="">
                                <button class="button button_s_14 button_solid button_add">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__wrap product-item__wrap_big">
                            <img class="product-item__img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/boots.png" alt="boots">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="star-rating__heart">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="product-item__info">
                            <p class="product-item__name">Wide heel suede ankle boots</p>
                            <p class="product-item__price">$18.15</p>
                        </div>
                        <div class="product-item__info product-item__info_active">
                            <div class="product-selection">
                                <div class="size">
                                    <button class="size__button">36</button>
                                    <button class="size__button">37</button>
                                    <button class="size__button">38</button>
                                    <button class="size__button">39</button>
                                    <button class="size__button">40</button>
                                </div>
                                <div class="color">
                                    <button class="color__button color__button_active"
                                            style="background-color: #1E212C "></button>
                                    <button class="color__button"></button>
                                    <button class="color__button"></button>
                                </div>
                            </div>
                            <div class="">
                                <button class="button button_s_14 button_solid button_add">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <button class="button">See all sale products</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cta_background"></div>
        <div class="container">
            <div class="cta">
                <div class="female">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/female.png" alt="female">
                </div>
                <div class="mobile-shopping">
                    <p class="mobile-shopping__text">Enjoy mobile shopping with our Createx Store App!</p>
                    <div class="mobile-shopping__application">
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/app-store.png" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/google-play.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="services">
                <div class="icon-box children-gradient-divider">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/ic-delivery.png" alt="">
                    <p class="icon-box__text">Fast Worldwide Shipping</p>
                    <p class="icon-box__text_small">Get free shipping over $250</p>
                </div>
                <div class="icon-box">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/ic-call-center.png" alt="">
                    <p class="icon-box__text">24/7 Customer Support</p>
                    <p class="icon-box__text_small">Friendly 24/7 customer support</p>
                </div>
                <div class="icon-box">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/ic-shield.png" alt="">
                    <p class="icon-box__text">Money Back Guarantee</p>
                    <p class="icon-box__text_small">We return money within 30 days</p>
                </div>
                <div class="icon-box">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/ic-credit-card.png" alt="">
                    <p class="icon-box__text">Secure Online Payment</p>
                    <p class="icon-box__text_small">Accept all major credit cards</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="instagram">
                <div class="instagram__text">
                    <p class="instagram__text_small">Follow us on Instagram</p>
                    <a href="#" target="_blank">
                        <p class="heading">@createx_store</p>
                    </a>
                    <button class="button instagram__button">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/ins.png" alt="">
                        <span>Follow instagram</span>
                    </button>
                </div>
                <div class="instagram__img">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/guy.png" alt="">
                </div>
                <div class="instagram__img">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/sneakers.png" alt="">
                </div>
                <div class="instagram__img">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/girl.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="fashion-blog">
                <div class="fashion-blog__title">
                    <p class="heading">Fashion blog</p>
                    <button class="button button_s_14">View blog</button>
                </div>
                <div class="blog">
                    <div class="blog__card">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/basket-with-products.png" alt="">
                        <div class="blog__card__text">
                            <p class="icon-box__text">Bag Trends for Summer 2020</p>
                            <div class="meta">
                                <p>Fashion</p>
                                <p>August 24, 2020</p>
                                <div class="comment">
                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    <p>No comments</p>
                                </div>
                            </div>
                            <p class="icon-box__text_small">Ipsum aliquet nisi, hendrerit rhoncus quam tortor, maecenas faucibus. Tincidunt aliquet sit vel, venenatis nulla. Integer bibendum turpis convallis...</p>
                        </div>
                    </div>
                    <div class="blog__card">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/feet-in-sneakers.png" alt="">
                        <div class="blog__card__text">
                            <p class="icon-box__text icon-box__text_green">Top 10 of This Season’s Hottest Sneakers</p>
                            <div class="meta">
                                <p>Lifestyle</p>
                                <p>July 16, 2020</p>
                                <div class="comment">
                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    <p>4 comments</p>
                                </div>
                            </div>
                            <p class="icon-box__text_small">Porta habitant vitae quam interdum. Leo viverra non volutpat rhoncus placerat vitae scelerisque. Rhoncus augue faucibus maecenas lacus...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="brand-logo">
            <div class="container">
                <div class="brand-logo_bar">
                    <a href="#" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/InDepthConsultingLogo-UntitledPage.png" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/HigherFitLogo-UntitledPage.png" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/SentinalConsultingLogo.png" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/NationalHealthLogo.png" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/ForSaleLogo.png" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/DelMarStrategyLogo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<section>
    <div class="subscribe">
        <div class="container">
            <div class="subscribe__box">
                <div class="subscribe__text">
                    <p class="heading">Subscribe for updates</p>
                    <p class="categories__name">Subscribe for exclusive early sale access and new arrivals.</p>
                    <div class="checkboxes">
                        <button class="button button_s_14 button_small">Women</button>
                        <button class="button button_s_14 button_small">Men</button>
                        <button class="button button_s_14 button_small">Girls</button>
                        <button class="button button_s_14 button_small">Boys</button>
                    </div>
                    <p class="label">Email</p>
                    <div class="email">
                        <input class="label-text subscribe__label-text" type="text" placeholder="Your working email" name="mail" required><input class="subscribe-button subscribe__subscribe-button" type="submit" value="Subscribe">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="checked" checked="yes">
                        <label class="icon-box__text_small">   I agree to receive communications from Createx Store. </label>
                    </div>
                </div>
                <div class="subscribe__img">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/male.png" alt="male">
                </div>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>