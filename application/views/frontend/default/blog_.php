<?php
function include_sahre_btn($rule, $cb)
{
    if ($rule == true || $rule == 'true' || $rule == 'yes') {

        $cb();
    }
} ?>

<link type="text/css" href="<?php echo base_url() ?>assets/frontend/default/blog/css/main.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/default/blog/css/sh-style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/default/blog/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/default/blog/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/default/blog/js/jquery.js"></script>
<section class="home page-template ">
    <noscript>Javascript is disabled in your browser, make sure Javascript is enabled in your Browser</noscript>
    <div id="page-container" class="primary-desktop">
        <div id="wrapper">
            <div class="content-container sh-page-layout-default">
                <div class="container entry-content">
                    <div class="sh-filter-blog sh-filter-container sh-portfolio-filter-style3 sh-portfolio-filter-style4 hidden" hidden>
                        <div class="sh-filter">
                            <span class="sh-filter-item active">
                                <a href="<?php echo base_url() ?>news/category" class="sh-filter-item-content">All</a>
                            </span>

                            <span class="sh-filter-item">
                                <a href="<?php echo base_url() ?>news/category?category=tech" class="sh-filter-item-content">
                                    Tech </a>
                            </span>
                            <span class="sh-filter-item">
                                <a href="<?php echo base_url() ?>news/category?category=uncategorized" class="sh-filter-item-content">
                                    Uncategorized </a>
                            </span>

                        </div>
                    </div>

                    <div id="content" class="content-with-sidebar-right blog-page-list">
                        <div class="sh-group blog-list blog-style-masonry masonry2" style="position: relative; height: 4421.78px; opacity: 1;">
                            <?php
                            if (is_array($all_articels) && count($all_articels)) {
                                foreach ($all_articels  as  $row) {
                                    ?>
                                    <article id="post-<?= $row['id'] ?>" class="post-item post-<?= $row['id'] ?> post type-post status-publish format-standard has-post-thumbnail hentry category-people category-travel tag-girl tag-lifestyle" style="position: absolute; left: 0px; top: 0px;">
                                        <div class="post-container">

                                            <div class="post-meta-thumb">

                                                <img width="1024" height="777" src="<?php echo base_url() ?>uploads/posts/<?= $row['id'] ?>.jpg" class="attachment-large size-large art-post-image" alt="" sizes="(max-width: 1024px) 100vw, 1024px">

                                                <div class="sh-overlay-style1">
                                                    <div class="sh-table-full">
                                                        <a href="<?php echo base_url() ?><?= 'home/post/' . $row['post_link'] ?>" class="sh-overlay-item sh-table-cell">
                                                            <div class="sh-overlay-item-container">
                                                                <i class="icon-link"></i>
                                                            </div>
                                                        </a>

                                                        <a href="<?php echo base_url() ?>uploads/posts/<?= $row['id'] ?>.jpg" class="sh-overlay-item sh-table-cell hidden" hidden data-rel="lightcase">
                                                            <div class="sh-overlay-item-container">
                                                                <i class="icon-magnifier-add"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="post-content-container">

                                                <div class="post-meta post-meta-one">
                                                    <a href="<?php echo base_url() ?><?= 'home/post/' . $row['post_link'] ?>" class="post-meta-date sh-default-color">
                                                        <?php

                                                                $montn_array = array('1' => 'January', '2' => 'February', '3' => 'Mars', '4' => 'April', '5' => 'May', '6' => 'June', '7' => 'Jully', '8' => 'August', '9' => 'September', '10' => 'October', '11' => 'November', '12' => 'December');

                                                                $date_ = explode('-', $row['date_added']);
                                                                $date_year = $date_[0];
                                                                $date_month = $montn_array[$date_[1]];
                                                                $date_day = $date_[2];

                                                                $post_date = $date_month . ' ' . $date_day . ', ' . $date_year;
                                                                echo $post_date
                                                                ?> </a>

                                                </div>

                                                <a href="<?php echo base_url() ?><?= 'home/post/' . $row['post_link'] ?>" class="post-title">
                                                    <h2> <?php echo $row['title'] ?> </h2>
                                                </a>

                                                <div class="post-content">
                                                    <?php echo $row['description'] ?>
                                                </div>

                                                <div class="post-meta post-meta-two hidden" hidden>

                                                    <div class="sh-columns post-meta-comments">
                                                        <span class="post-meta-categories">
                                                            <i class="icon-tag"></i>
                                                            <a href="<?php echo base_url() ?>news/categorycategory/people/">People</a>,
                                                            <a href="<?php echo base_url() ?>news/categorycategory/travel/">Travel</a>
                                                        </span>

                                                        <a href="<?php echo base_url() ?>news/category2016/11/23/trip-that-youll-never-forget/#comments" class="post-meta-comments">
                                                            <i class="icon icon-bubble"></i> 0 </a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </article>
                                <?php

                                    }
                                } else { ?>
                                <article id="post-00" class="post-item post-00 post type-post status-publish format-standard has-post-thumbnail hentry category-people category-travel tag-girl tag-lifestyle" >
                                    <div class="post-container">

                                        <h1 class="widget-title"><?php echo get_phrase('no_record_found') ?></h1>
                                    </div>
                                </article>
                            <?php
                            }
                            ?>

                        </div>

                        <div class="sh-pagination sh-default-color hidden" hidden>
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="<?php echo base_url() ?>news/categorypage/2/">2</a>
                                </li>
                                <li><a class="next page-numbers" href="<?php echo base_url() ?>news/categorypage/2/">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php include_once 'blog_aside.php';
                    ?>


                </div>
            </div>

        </div>


        <a class="sh-back-to-top sh-back-to-top3 active" href="#">
            <i class="icon-arrow-up"></i>
        </a>
    </div>
</section>

<script src="<?php echo base_url() . 'assets/frontend/default/js/three_dots.js'; ?>"></script>
<script>
    if (typeof three_dots === 'function') {
        three_dots('.post-content', '.post-content p')
    }
</script>

<script type="text/javascript" defer="" src="<?php echo base_url() ?>assets/frontend/default/blog/js/main.js"></script>
<?php
include_once 'footer_bottom.php';
?>