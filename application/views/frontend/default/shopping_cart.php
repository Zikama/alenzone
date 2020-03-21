<div id="cart_items_details">

    <section class="aui-breadcrumb aui-js-breadcrumb" aria-label="Breadcrumbs" role="navigation">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"><span class="title"><?php echo sizeof($this->session->userdata('cart_items')); ?> </span> <?php echo get_phrase('course(s)_available'); ?></h3>
                </div>
            </div>
        </div>
    </section>


    <section class="art_cart_list_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <div class="in-cart-box">
                        <div class="title hidden" hidden><?php echo sizeof($this->session->userdata('cart_items')) . ' ' . get_phrase('courses_in_cart'); ?></div>

                        <ul class="art_cart_course_list">
                            <?php
                            $actual_price = 0;
                            $total_price  = 0;
                            foreach ($this->session->userdata('cart_items') as $cart_item) :
                                $course_details = $this->crud_model->get_course_by_id($cart_item)->row_array();
                                $instructor_details = $this->user_model->get_all_user($course_details['user_id'])->row_array();
                                ?>
                                <li class="art_cart_course_wrapper">

                                    <div class="art_cart_course_image">
                                        <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $course_details['id']); ?>">
                                            <img src="<?php echo $this->crud_model->get_course_thumbnail_url($cart_item); ?>" alt="" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="art_cart_course_details">
                                        <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $course_details['id']); ?>">
                                            <div class="name"><?php echo $course_details['title']; ?></div>
                                        </a>
                                    </div>

                                    <button class="move-remove" id="<?php echo $course_details['id']; ?>" onclick="removeFromCartList(this)"><?php echo get_phrase('remove'); ?></button>

                                    <div class="price">
                                        <?php if ($course_details['discount_flag'] == 1) : ?>
                                            <p class="current-price">
                                                <?php
                                                        $total_price += $course_details['discounted_price'];
                                                        echo currency($course_details['discounted_price']);
                                                        ?>
                                            </p>
                                            <p class="original-price text">
                                                <?php
                                                        $actual_price += $course_details['price'];
                                                        echo currency($course_details['price']);
                                                        ?>
                                            </p>
                                        <?php else : ?>
                                            <p class="current-price">
                                                <?php
                                                        $actual_price += $course_details['price'];
                                                        $total_price  += $course_details['price'];
                                                        echo currency($course_details['price']);
                                                        ?>
                                            </p>
                                        <?php endif; ?>
                                        <span class="coupon-tag">
                                            <i class="fas fa-tag"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="cart-sidebar">
                        <div class="d-flex flex-wrap justify-content-center flex-wrap flex-column align-items-center">
                            <div class="total"><?php echo get_phrase('total'); ?>:</div>
                            <span id="total_price_of_checking_out" hidden><?php echo $total_price; ?></span>
                            <div class="total-price"><?php echo currency($total_price); ?></div>
                            <div class="total-original-price">
                                <span class="original-price"><?php echo currency($actual_price); ?></span>
                                <!-- <span class="discount-rate">95% off</span> -->
                            </div>
                            <?php if (!empty($total_price)) { ?>
                                <button type="button" class="checkout-btn" onclick="handleCheckOut()"><?php echo get_phrase('pay_now'); ?></button>
                            <?php
                            } else { ?>
                                <button type="button" class="checkout-btn art_disabled" disabled aria-disabled="disabled" style="cursor:not-allowed;opacity:.5"><?php echo get_phrase('pay_now'); ?></button>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://www.paypalobjects.com/js/external/dg.js"></script>
<script>
    var dgFlow = new PAYPAL.apps.DGFlow({
        trigger: 'submitBtn'
    });
    dgFlow = top.dgFlow || top.opener.top.dgFlow;
    dgFlow.closeFlow();
    // top.close();
</script>

<script type="text/javascript">
    function removeFromCartList(elem) {
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        url3 = '<?php echo site_url('home/refreshShoppingCart'); ?>';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {

                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo get_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo get_phrase('added_to_cart'); ?>");
                }

                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });

                $.ajax({
                    url: url3,
                    type: 'POST',
                    success: function(response) {
                        $('#cart_items_details').html(response);
                    }
                });
            }
        });
    }

    function handleCheckOut() {
        $.ajax({
            url: '<?php echo site_url('home/isLoggedIn'); ?>',
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                } else {
                    $('#paymentModal').modal('show');
                    $('.total_price_of_checking_out').val($('#total_price_of_checking_out').text());
                }
            }
        });
    }

    function handleCartItems(elem) {
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        url3 = '<?php echo site_url('home/refreshShoppingCart'); ?>';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo get_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo get_phrase('added_to_cart'); ?>");
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });

                $.ajax({
                    url: url3,
                    type: 'POST',
                    success: function(response) {
                        $('#cart_items_details').html(response);
                    }
                });
            }
        });
    }
</script>