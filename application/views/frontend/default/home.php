<section class="home-landing-banner">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="./assets/frontend/default/img/slide_1.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3><?php echo get_phrase('slide-one-title'); ?></h3>
                    <?php if (get_phrase('slide-one-description') !== '') { ?>
                        <p id="slide-one-description"></p>
                        <script>
                            var siteUrl = `<?php echo site_url('home/courses') ?>`,
                                slideDescription = `<?php echo get_phrase('slide-one-description') ?>`;

                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join("'");
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join('"').split("&apos;").join("'");

                            document.querySelector("#slide-one-description").innerHTML = slideDescription !== 'Slide-one-description' ? `${slideDescription}` : ``;
                        </script>
                    <?php } ?>

                    <br />
                    <br />
                </div>
            </div>

            <!-- <div class="item">
                <img src="./assets/frontend/default/img/slide_2.jpg" alt="Nziza_training_academy" style="width:100%;">
                <div class="carousel-caption">
                    <h3><?php echo get_phrase('slide-two-title'); ?></h3>
                    <?php if (get_phrase('slide-two-description') !== '') { ?>
                        <p id="slide-two-description"></p>
                        <script>
                            var siteUrl = `<?php echo site_url('home/sign_up') ?>`,
                                slideDescription = `<?php echo get_phrase('slide-two-description') ?>`;

                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join("'");
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join('"').split("&apos;").join("'");

                            document.querySelector("#slide-two-description").innerHTML = slideDescription !== 'Slide-two-description' ? `${slideDescription}` : ``;
                        </script>
                    <?php } ?>
                </div>
            </div> -->

            <div class="item">
                <img src="./assets/frontend/default/img/slide_3.jpg" alt="Nziza_training_academy" style="width:100%;">
                <div class="carousel-caption">
                    <h3><?php echo get_phrase('slide-three-title'); ?></h3>
                    <?php if (get_phrase('slide-three-description') !== '') { ?>
                        <p id="slide-three-description"></p>
                        <script>
                            var siteUrl = `<?php echo site_url('home/sign_up') ?>`,
                                slideDescription = `<?php echo get_phrase('slide-three-description') ?>`;

                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join("'");
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join('"').split("&apos;").join("'");

                            document.querySelector("#slide-three-description").innerHTML = slideDescription !== 'Slide-three-description' ? `${slideDescription}` : ``;
                        </script>
                    <?php } ?>
                </div>
            </div>
            <div class="item">
                <img src="./assets/frontend/default/img/slide_4.jpg" alt="Nziza_training_academy" style="width:100%;">
                <div class="carousel-caption">
                    <h3><?php echo get_phrase('slide-four-title'); ?></h3>

                    <?php if (get_phrase('slide-four-description') !== '') { ?>
                        <p id="slide-four-description"></p>
                        <script>
                            var siteUrl = `<?php echo site_url('home/sign_up') ?>`,
                                slideDescription = `<?php echo get_phrase('slide-four-description') ?>`;

                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&lt;").join('<').split('&gt;').join('>');
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join("'");
                            slideDescription = slideDescription.split("&amp;").join('&').split("&quot;").join('"').split("&apos;").join("'");

                            document.querySelector("#slide-four-description").innerHTML = slideDescription != 'Slide-four-description' ? `${slideDescription}` : ``;
                        </script>
                    <?php } ?>

                </div>
            </div>

        </div> <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="aui-icon-back-large" aria-hidden="true" style="font-size: 61pt; position: absolute; top: 50%; right:0"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="aui-icon-forward-large" aria-hidden="true" style="font-size: 61pt; position: absolute; top: 50%; left:0"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="home-banner-area">
    <div class="container-lg">
        <div class="row">
            <div class="col" style="-ms-flex-align:center;-ms-flex-align-self:center;align-self:center;">
                <div class="home-banner-wrap">
                    <h2><?php echo get_frontend_settings('banner_title'); ?></h2>
                    <p><?php echo get_frontend_settings('banner_sub_title'); ?></p>
                    <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query" placeholder="<?php echo get_phrase('what_do_you_want_to_learn'); ?>?">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            // Insert the Intro video
            include_once "home_video_banner.php";
            ?>
        </div>
    </div>
</section>
<section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <?php $courses = $this->crud_model->get_courses(); ?>
            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fas fa-bullseye float-left"></i>
                    <div class="text-box">
                        <h4><?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                            echo /* $number_of_courses . ' ' . */ get_phrase('online_courses'); ?></h4>
                        <p><?php echo get_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fa fa-check float-left"></i>
                    <div class="text-box">
                        <h4><?php echo get_phrase('expert_instruction'); ?></h4>
                        <p><?php echo get_phrase('find_the_right_course_for_you'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fa fa-clock float-left"></i>
                    <div class="text-box">
                        <h4><?php echo get_phrase('lifetime_access'); ?></h4>
                        <p><?php echo get_phrase('learn_on_your_schedule'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-courses-area">
    <?php
    // Include the academy courses
    include_once 'academy_courses.php';
    ?>
</section>

<?php
// Include top courses
//include_once 'top_courses.php';
?>

<?php
include_once 'enroll_banner.php';
?>
<?php
include_once 'academy_description.php';
?>
<?php
include_once 'how_it_works.php';
?>
<?php
include_once 'footer_bottom.php';
?>


<script type="text/javascript">
    function handleWishList(elem) {

        $.ajax({
            url: '<?php echo site_url('home/handleWishList'); ?>',
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                } else {
                    if ($(elem).hasClass('active')) {
                        $(elem).removeClass('active')
                    } else {
                        $(elem).addClass('active')
                    }
                    $('#wishlist_items').html(response);
                }
            }
        });
    }

    function handleCartItems(elem) {
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<script>
    // $(document).ready(function() {

    $(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') {
                $(this).carousel('next');
            }
            if (direction == 'right') {
                $(this).carousel("prev");
            }
        },
        allowPageScroll: "vertical"
    });


    // });

    function name(params) {
        console.log(params);

        $("#myCarousel").carousel("prev");

    }
</script>