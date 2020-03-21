<style>
    /* slick.css */
    /* Slider */
    .slick-slider {
        position: relative;

        display: block;
        box-sizing: border-box;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;

        display: block;
        overflow: hidden;

        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;

        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;

        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;

        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;

        height: auto;

        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    /* Arrows */
    .slick-prev,
    .slick-next {
        font-size: 0;
        line-height: 0;

        position: absolute;
        top: 50%;

        display: block;

        width: 20px;
        height: 20px;
        padding: 0;
        -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);

        cursor: pointer;

        color: transparent;
        border: none;
        background: transparent;
    }

    .slick-prev:hover,
    .slick-prev:focus,
    .slick-next:hover,
    .slick-next:focus {
        color: transparent;
        background: transparent;
    }

    .slick-prev:hover:before,
    .slick-prev:focus:before,
    .slick-next:hover:before,
    .slick-next:focus:before {
        opacity: 1;
    }

    .slick-prev.slick-disabled:before,
    .slick-next.slick-disabled:before {
        opacity: .25;
    }

    .slick-prev:before,
    .slick-next:before {
        font-size: 20px;
        line-height: 1;

        opacity: .75;
        color: white;

        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
        left: -25px;
    }

    [dir='rtl'] .slick-prev {
        right: -25px;
        left: auto;
    }

    .slick-prev:before {
        content: '←';
    }

    [dir='rtl'] .slick-prev:before {
        content: '→';
    }

    .slick-next {
        right: -25px;
    }

    [dir='rtl'] .slick-next {
        right: auto;
        left: -25px;
    }

    .slick-next:before {
        content: '→';
    }

    [dir='rtl'] .slick-next:before {
        content: '←';
    }

    /* Dots */
    .slick-dotted.slick-slider {
        margin-bottom: 30px;
    }

    .slick-dots {
        position: absolute;
        bottom: -25px;

        display: block;

        width: 100%;
        padding: 0;
        margin: 0;

        list-style: none;

        text-align: center;
    }

    .slick-dots li {
        position: relative;

        display: inline-block;

        width: 20px;
        height: 20px;
        margin: 0 5px;
        padding: 0;

        cursor: pointer;
    }

    .slick-dots li button {
        font-size: 0;
        line-height: 0;

        display: block;

        width: 20px;
        height: 20px;
        padding: 5px;

        cursor: pointer;

        color: transparent;
        border: 0;
        background: transparent;
    }

    .slick-dots li button:hover:before,
    .slick-dots li button:focus:before {
        opacity: 1;
    }

    .slick-dots li button:before {

        font-size: 6px;
        line-height: 20px;

        position: absolute;
        top: 0;
        left: 0;

        width: 20px;
        height: 20px;

        content: '•';
        text-align: center;

        opacity: .25;
        color: black;

        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-dots li.slick-active button:before {
        opacity: .75;
        color: black;
    }


    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .art_slick {
        font-size: 0;
        line-height: 1.8;
        position: absolute;
        top: 50%;
        display: block;
        width: 55px;
        height: 55px;
        padding: 0;
        -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        cursor: pointer;
        color: #777;
        border: none;
        background: #dee2e6;
        border-radius: 36px;
        z-index: 1;
        box-shadow: 3px 0px 2px #9599a2;
    }

    .art_slick_next {
        left: 0
    }

    .art_slick_prev {
        right: 0
    }

    .art_slick_next::before,
    .art_slick_prev::before {
        font-size: 42pt;
    }

    .slick-disabled {
        opacity: .2;
        cursor: initial;
        box-shadow: none
    }

    .slider {
        width: 50%;
        margin: 0px auto;
    }

    .art_course_container {
        background: white;
        box-shadow: 0 6px 19px 1px rgba(5, 70, 93, 0.062);
        margin-bottom: 2pc;
        position: relative;
        overflow: hidden;
        border-radius: 2em;
    }

    .art_course_details {
        position: absolute;
        bottom: -9px;
        background: white;
        text-shadow: none;
        font-weight: 600;
        color: #2ec0f5;
        width: 100%;
        padding: 6px 20px;
        box-shadow: 0 2px 60px #8e979e;
        overflow: hidden;
    }



    .price small {
        font-size: 80%;
        font-weight: 400;
        text-decoration: line-through;
        color: #e0e7ec;
    }

    .art_btn_cart {
        margin: auto 0 16px;
        padding: 10px;
        border-radius: 22px;
        border: 1px solid #e12d84;
        background: white;
        float: right;
        color: #e12d84;
    }

    .art_btn_cart.addedToCart {
        opacity: 0.5;
    }

    @media screen and (min-width:320px) {
        .art_course_details {
            position: relative;
            bottom: 0;
            padding: 2px 14px;
        }
    }

    @media screen and (min-width:768px) {
        .art_course_details {
            position: relative;
            bottom: 0;
            padding: 6px 20px;
        }
    }

    @media screen and (min-width:1024px) {
        .art_course_details {
            position: relative;
            bottom: 0;
            padding: 6px 20px;
        }
    }

    @media screen and (min-width:1440px) {
        .art_course_details {
            position: absolute;
            bottom: -9px;
            padding: 6px 20px;
        }
    }
</style>
<section class="course-carousel-area ">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title">
                    <?php echo get_phrase('top') . ' ' . get_phrase('courses'); ?>
                </h2>
                <div class=" regular slider">
                    <?php
                    $latest_courses = $this->crud_model->get_latest_10_course();
                    foreach ($latest_courses as $latest_course) :

                        $course_details = $this->crud_model->get_course_by_id($latest_course['id'])->row_array();
                        ?>

                        <div class="art_course_container">
                            <a href="<?php echo site_url('home/course/' . slugify($latest_course['title']) . '/' . $latest_course['id']); ?>" class="art_course" onclick="return preventDef_(event);">

                                <div class="art_course_image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="art_course_details">
                                    <h5 class="title"><?php echo $latest_course['title']; ?></h5>

                                    <?php if ($latest_course['is_free_course'] == 1) : ?>
                                        <p class="price text-right"><?php echo get_phrase('free'); ?></p>
                                    <?php else : ?>
                                        <?php if ($latest_course['discount_flag'] == 1) : ?>
                                            <p class="price text-right"><small><?php echo currency($latest_course['price']); ?></small><?php echo currency($latest_course['discounted_price']); ?></p>
                                        <?php else : ?>
                                            <p class="price text-right"><?php echo currency($latest_course['price']); ?></p>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if (!empty($course_details['id']) && in_array($course_details['id'], $this->session->userdata('cart_items'))) : ?>
                                        <button class="art_btn art_btn_cart addedToCart" type="button" id="<?php echo $course_details['id']; ?>" onclick="handleCartItems_(this)" title="<?php echo get_phrase('remove_item_to_cart'); ?>"><?php echo get_phrase('added_to_cart'); ?>
                                        </button>
                                    <?php else : ?>
                                        <button class="art_btn art_btn_cart" type="button" id="<?php echo $course_details['id']; ?>" onclick=" handleCartItems_(this)" title="<?php echo get_phrase('cart_item'); ?>"><?php echo get_phrase('add_to_cart'); ?>
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            nextArrow: '<button class="art_slick art_slick_next aui-icon-back-large" aria-label="Next" type="button" style="" aria-disabled="false">Next</button>',
            prevArrow: '<button class="art_slick art_slick_prev aui-icon-forward-large" aria-label="Previous" type="button" aria-disabled="false" style="">Previous</button>',
            responsive: [{
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: false,
                        dots: false
                    }
                }, {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });

    function preventDef_(e) {
        if (!e.target.classList.contains('art_btn_cart')) {
            return true
        }
        // handleCartItems_(e.target)
        return false
    }

    function handleCartItems_(elem) {
        console.log(elem);
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $(elem).removeClass('addedToCart')
                    $(elem).text("<?php echo get_phrase('add_to_cart'); ?>");
                } else {
                    $(elem).addClass('addedToCart')
                    $(elem).text("<?php echo get_phrase('added_to_cart'); ?>");
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });
            }
        });
    }

    function handleBuyNow(elem) {

        url1 = '<?php echo site_url('home/handleCartItemForBuyNowButton'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        urlToRedirect = '<?php echo site_url('home/shopping_cart'); ?>';
        var explodedArray = elem.id.split("_");
        var course_id = explodedArray[1];

        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: course_id
            },
            success: function(response) {
                $('#cart_items').html(response);
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                        toastr.warning('<?php echo get_phrase('please_wait') . '....'; ?>');
                        setTimeout(
                            function() {
                                window.location.replace(urlToRedirect);
                            }, 1500);
                    }
                });
            }
        });
    }

    function handleEnrolledButton() {

        $.ajax({
            url: '<?php echo site_url('home/isLoggedIn'); ?>',
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                }
            }
        });
    }
</script>