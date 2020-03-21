<style>
    .masonry2 .post-content {
        padding-bottom: 28px;
        max-width: 100%;
        max-height: 12vh;
    }

    .blog-single .sh-blog-single-meta {
        border-top: 0px solid #eaeaea;
        border-bottom: 0px solid #eaeaea;
        padding: 0;
        margin: 0;
    }
</style>
<div id="sidebar" class="sidebar-right">

    <div id="recent_posts-2" class="widget_social_links widget-item widget_recent_posts">
        <div class="wrap-recent-posts">

            <h3 class="widget-title"><?php echo get_phrase('latest_posts') ?></h3>

            <div class="sh-recent-posts-widgets">
                <?php
                foreach ($latest_articels as $row) { ?>

                    <div class="sh-recent-posts-widgets-item">
                        <div class="sh-recent-posts-widgets-item-thumb">
                            <a href="<?php echo base_url() . 'home/post/' . $row['post_link'] ?> ">

                                <div class="sh-ratio">
                                    <div class="sh-ratio-container sh-ratio-container-square">
                                        <div class="sh-ratio-content" style="background-image: url(<?php echo base_url() ?>uploads/posts/<?= $row['id'] ?>.jpg);">
                                        </div>
                                    </div>
                                </div>
                                <div class="sh-mini-overlay">
                                    <div class="sh-mini-overlay-container">
                                        <div class="sh-table-full">
                                            <div class="sh-table-cell">
                                                <i class="icon-link"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="sh-recent-posts-widgets-item-content">

                            <span class="post-meta-categories hidden" hidden>
                                <?php if ($row['tags'] !== null) { ?>
                                    <a href="<?php echo base_url() ?><?php echo  'home/post/' . $row['post_link'] ?> ">People</a>,
                                    <a href="<?php echo base_url() ?><?php echo  'home/post/' . $row['post_link'] ?>">Travel</a>
                                <?php
                                    } ?>
                            </span>

                            <a href="<?php echo base_url() . 'home/post/' . $row['post_link'] ?>">
                                <h6><?php echo  $row['title'] ?> </h6>
                            </a>

                        </div>
                    </div>

                <?php
                } ?>
            </div>
        </div>
    </div>

    <div id="imagev2-2" class="widget_advertise widget-item widget_imagev2 hidden" hidden>
        <a href="https://jevelin.shufflehound.com/">
            <img src="<?php echo base_url() ?>assets/frontend/default/blog/img/ad.png">
        </a>
    </div>

    <div id="search-2" class="widget-item widget_search">
        <form method="GET" class="search-form" action="<?php echo base_url().'home/news/search'; ?>">
            <div>
                <label>
                    <input type="search" class="sh-sidebar-search art_search-field" placeholder="Search here..." value="" name="q" title="Search text" required="">
                </label>
                <button type="submit" class="search-submit">
                    <i class="icon-magnifier"></i>
                </button>
            </div>
        </form>
    </div>

    <?php
    if (function_exists('include_sahre_btn')) {
        include_sahre_btn(true, function () {
            include "sharebutton.php";
        });
    }
    ?>
</div>