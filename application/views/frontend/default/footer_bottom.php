<section class="home-banner-area">
    <div class="container-lg">
        <div class="row">
            <div class="col d-flex flex-wrap_ col_foot">
                <div class="home-banner-wrap">
                    <h4><?php echo get_phrase('contact_info'); ?></h4>
                    <div class="foot_text_box">
                        <p class="footer_ico_container float-left"><i class="fab fa-font-awesome-flag"></i></p>
                        <h6><?php echo get_phrase('address'); ?>:</h6>
                        <p class="text_content"><?php echo get_phrase('huye_campus,_kigali_campus'); ?></p>
                    </div>
                    <div class="foot_text_box">
                        <p class="footer_ico_container float-left"><i class="fas fa-envelope-open-text"></i></p>
                        <p class="text_content"><?php echo get_phrase('(+250)_785_568_718'); ?></p>
                        <a href="mailto:<?php echo strtolower(get_phrase('academynziza@gmail.com')); ?>">
                            <p class="text_content"><?php echo get_phrase('academynziza@gmail.com'); ?></p>
                        </a>
                    </div>
                    <div class="foot_text_box">
                        <p class="footer_ico_container float-left"><i class="fas fa-stopwatch"></i></i></p>
                        <p class="text_content"><?php echo get_phrase('monday') . ' - ' . get_phrase('friday') . ' ' . get_phrase('9:00') . ' - ' . get_phrase('17:00'); ?></p>
                        <p class="text_content"><?php echo get_phrase('weekend') . ' ' . get_phrase('10:00') . ' - ' . get_phrase('20:00'); ?></p>
                    </div>
                </div>
                <div class="home-banner-wrap">
                    <h4><?php echo get_phrase('helpful_link'); ?></h4>
                    <div class="foot_text_box mt-3">
                        <!-- <p class="footer_ico_container float-left"><i class="fas fa-link"></i></i></p> -->
                        <a href="<?php echo base_url() . 'home/about_us'; ?>">
                            <p class="text_content"><?php echo get_phrase('about_us'); ?></p>
                        </a>
                    </div>

                    <?php
                    // Remove team in menu
                    /*
                    <div class="foot_text_box mt-3">
                        <!-- <p class="footer_ico_container float-left"><i class="fas fa-link"></i></i></p> -->
                        <a href="<?php echo base_url() . 'home/team'; ?>">
                            <p class="text_content"><?php echo get_phrase('team'); ?></p>
                        </a>
                    </div>
                    */ ?>

                    <div class="foot_text_box mt-3 fw-1">
                        <!-- <p class="footer_ico_container float-left"><i class="fas fa-link"></i></i></p> -->
                        <a href="<?php echo  base_url() . 'home/news'; ?>">
                            <p class="text_content"><?php echo get_phrase('news'); ?></p>
                        </a>
                    </div>
                    <div class="foot_text_box mt-3 fw-1">
                        <!-- <p class="footer_ico_container float-left"><i class="fas fa-link"></i></i></p> -->
                        <a href="<?php echo  base_url() . 'home/why_us'; ?>">
                            <p class="text_content"><?php echo get_phrase('why') . ' NTA'; ?></p>
                        </a>
                    </div>
                    <div class="foot_text_box mt-3">
                        <!-- <p class="footer_ico_container float-left"><i class="fas fa-link"></i></i></p> -->
                        <a href="<?php echo  base_url() . 'home/works'; ?>">
                            <p class="text_content"><?php echo get_phrase('work_of_our_Finalists'); ?></p>
                        </a>
                    </div>

                    <div class="foot_text_box mt-3">
                        <!-- <p class="footer_ico_container float-left"><i class="fas fa-link"></i></i></p> -->
                        <a href="<?php echo  base_url() . 'home/contact_us'; ?>">
                            <p class="text_content"><?php echo get_phrase('contact_us'); ?></p>
                        </a>
                    </div>



                </div>
                <div class="home-banner-wrap">
                    <h4><?php echo get_phrase('social_madia'); ?></h4>

                    <div class="foot_text_box">
                        <?php
                        include_once 'fb_widget.php' ?>
                        <!-- 
                        <a href="https://<?php echo strtolower(get_phrase('facebook.com/nzizatrainingacademy')); ?>" target="_blank">
                            <p class="footer_ico_container float-left" style=" font-size: 28px;padding: 7px 20px;"><i class="fab fa-facebook-f"></i></p>
                        </a>
                        <a href="https://<?php echo strtolower(get_phrase('twitter.com/AcademyNziza')); ?>" target="_blank">
                            <p class="footer_ico_container float-left " style=" font-size: 28px;padding: 7px 12px;"><i class="fab fa-twitter"></i></p>
                        </a> -->
                    </div>

                </div>
            </div>

            <?php
            // Insert the Intro video
            // include_once "home_video_banner.php";
            ?>
        </div>
    </div>
</section>