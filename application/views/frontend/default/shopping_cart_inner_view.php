<section class="aui-breadcrumb aui-js-breadcrumb" aria-label="Breadcrumbs" role="navigation">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h3 class="page-title"><span class="title"><?php echo sizeof($this->session->userdata('cart_items')); ?> </span> <?php echo get_phrase('courses_available_in_cart'); ?></h3>
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
                        </div>
                        <button type="button" class="checkout-btn" onclick="handleCheckOut()"><?php echo get_phrase('checkout'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
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
</script>