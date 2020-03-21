 <link type="text/css" href="<?php echo base_url() ?>assets/frontend/default/blog/css/main.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/default/blog/css/sh-style.css">
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/default/blog/css/responsive.css">
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/default/blog/css/style.css" type="text/css" media="all">
 <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/default/blog/js/jquery.js"></script>

 <div id="page-container" class="">


     <div id="wrapper">


         <div class="content-container sh-page-layout-default">
             <div class="container entry-content">



                 <div id="content" class="content-with-sidebar-right">
                     <div class="blog-single blog-style-large">
                         <?php

                            foreach ($post as $key => $row) {

                                ?>
                             <article id="post-<?php echo $row['id'] ?>" class="post-item post-item-single post-<?php echo $row['id'] ?> post type-post status-publish format-standard has-post-thumbnail hentry category-design category-photography tag-movie tag-stormtrooper">
                                 <div class="post-container">

                                     <div class="post-meta-thumb">
                                         <img width="1200" height="675" src="<?php echo base_url(); ?>uploads/posts/<?php echo $row['id'] ?>.jpg" class="attachment-jevelin-landscape-large size-jevelin-landscape-large wp-post-image" alt="">

                                         <div class="sh-overlay-style1">
                                             <div class="sh-table-full">

                                                 <a href="<?php echo base_url(); ?>uploads/posts/<?php echo $row['id'] ?>.jpg" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                                     <div class="sh-overlay-item-container">
                                                         <i class="icon-magnifier-add"></i>
                                                     </div>
                                                 </a>
                                             </div>
                                         </div>

                                     </div>

                                     <a href="<?php echo base_url() ?><?= 'home/post/' . $row['post_link'] ?>" class="post-title">
                                         <h1><?php echo $row['title'] ?></h1>
                                     </a>

                                     <div class="post-meta-data sh-columns">
                                         <div class="post-meta post-meta-one">

                                             <a href="<?php echo base_url() ?><?= 'home/post/' . $row['post_link'] ?>" class="post-meta-date sh-default-color"><?php echo $post_date ?></a>

                                         </div>
                                         <?php
                                                if ($row['tags'] !== null) { ?>
                                             <div class="post-meta post-meta-two hidden" hidden>

                                                 <div class="sh-columns post-meta-comments">
                                                     <span class="post-meta-categories">
                                                         <i class="icon-tag"></i>
                                                         <a href="#">Design</a>,
                                                         <a href="#">Photography</a>
                                                     </span>
                                                 </div>

                                             </div>
                                         <?php
                                                } ?>
                                     </div>

                                     <div class="post-content">
                                         <?php echo  $row['description'] ?>
                                     </div>

                                 </div>
                             </article>

                             <?php
                                    if ($row['tags'] !== null) { ?>
                                 <div class="sh-blog-tags">
                                     <h5>Tags In</h5>
                                     <div class="sh-blog-tags-list">
                                         <a href="#tag" class="sh-blog-tag-item">
                                             Movie </a>
                                         <a href="#tag" class="sh-blog-tag-item">
                                             Stormtrooper </a>
                                     </div>
                                 </div>
                             <?php

                                    } ?>
                         <?php

                            } ?>

                         <div class="sh-blog-single-meta row">
                             <div class="col-md-6 col-sm-6 col-xs-6">

                                 <div class="sh-blog-social">

                                     <div class="sh-social-share">
                                         <div class="sh-social-share-button sh-noselect">
                                             <i class="icon-share"></i>
                                             <span><?php echo get_phrase('share') ?></span>
                                         </div>
                                         <div class="sh-social-share-networ">
                                             <?php
                                                include_once "sharebutton.php";
                                                ?>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>




                         <div class="sh-related-posts hidden" hidden>
                             <div class="sh-related-posts-title">
                                 <h3>Related Posts</h3>
                             </div>
                             <div class="blog-list blog-style-largeimage">

                                 <article id="post-76" class="post-item post-76 post type-post status-publish format-standard has-post-thumbnail hentry category-commercial category-design">
                                     <div class="post-container">


                                         <div class="post-meta-thumb">
                                             <img width="660" height="420" src="<?php echo base_url(); ?>assets/img/6-660x420.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
                                             <div class="sh-overlay-style1">
                                                 <div class="sh-table-full">
                                                     <a href="https://jevelin.me.com/blog1/2016/11/23/the-proper-way-to-dress-up-for-the-business-meeting/" class="sh-overlay-item sh-table-cell">
                                                         <div class="sh-overlay-item-container">
                                                             <i class="icon-link"></i>
                                                         </div>
                                                     </a>

                                                     <a href="https://cdn.jevelin.me.com/wp-content/uploads/sites/11/2016/11/6-1024x600.jpg" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                                         <div class="sh-overlay-item-container">
                                                             <i class="icon-magnifier-add"></i>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>

                                         </div>
                                         <a href="https://jevelin.me.com/blog1/2016/11/23/the-proper-way-to-dress-up-for-the-business-meeting/" class="post-title">
                                             <h2>The proper way to dress up for the business meeting</h2>
                                         </a>


                                         <div class="post-meta post-meta-two">

                                             <div class="sh-columns post-meta-comments">
                                                 <span class="post-meta-categories">
                                                     <i class="icon-tag"></i>
                                                     <a href="https://jevelin.me.com/blog1/category/commercial/">Commercial</a>,
                                                     <a href="https://jevelin.me.com/blog1/category/design/">Design</a>
                                                 </span>
                                             </div>

                                         </div>

                                     </div>
                                 </article>



                                 <article id="post-91" class="post-item post-91 post type-post status-publish format-gallery has-post-thumbnail hentry category-photography category-tech tag-camera tag-gear post_format-post-format-gallery">
                                     <div class="post-container">


                                         <div class="sh-gallery slick-initialized slick-slider slick-dotted"><button type="button" class="slick-prev slick-arrow" style="display: block;"><span class="ti-angle-left"></span></button>

                                             <div class="slick-list draggable" style="height: 166px;">
                                                 <div class="slick-track" style="opacity: 1; width: 1305px; transform: translate3d(-261px, 0px, 0px);">
                                                     <div class="sh-gallery-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 261px;" tabindex="-1">
                                                         <img src="<?php echo base_url(); ?>assets/img/2_3-660x420.jpg" alt="" class="width-full">
                                                     </div>
                                                     <div class="sh-gallery-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 261px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                                                         <img src="<?php echo base_url(); ?>assets/img/2_2-660x420.jpg" alt="" class="width-full">
                                                     </div>
                                                     <div class="sh-gallery-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 261px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                                                         <img src="<?php echo base_url(); ?>assets/img/2_3-660x420.jpg" alt="" class="width-full">
                                                     </div>
                                                     <div class="sh-gallery-item slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" style="width: 261px;" tabindex="-1">
                                                         <img src="<?php echo base_url(); ?>assets/img/2_2-660x420.jpg" alt="" class="width-full">
                                                     </div>
                                                     <div class="sh-gallery-item slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 261px;" tabindex="-1">
                                                         <img src="<?php echo base_url(); ?>assets/img/2_3-660x420.jpg" alt="" class="width-full">
                                                     </div>
                                                 </div>
                                             </div>




                                             <button type="button" class="slick-next slick-arrow" style="display: block;"><span class="ti-angle-right"></span></button>
                                             <ul class="slick-dots" style="display: table;" role="tablist">
                                                 <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li>
                                                 <li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
                                             </ul>
                                         </div>
                                         <a href="https://jevelin.me.com/blog1/2016/11/23/gear-on-the-white-cloth/" class="post-title">
                                             <h2>Must-have gear</h2>
                                         </a>


                                         <div class="post-meta post-meta-two">

                                             <div class="sh-columns post-meta-comments">
                                                 <span class="post-meta-categories">
                                                     <i class="icon-tag"></i>
                                                     <a href="https://jevelin.me.com/blog1/category/photography/">Photography</a>,
                                                     <a href="https://jevelin.me.com/blog1/category/tech/">Tech</a>
                                                 </span>


                                             </div>

                                         </div>

                                     </div>
                                 </article>



                                 <article id="post-72" class="post-item post-72 post type-post status-publish format-standard has-post-thumbnail hentry category-design category-people tag-girl">
                                     <div class="post-container">


                                         <div class="post-meta-thumb">
                                             <img width="660" height="420" src="<?php echo base_url(); ?>assets/img/8-660x420.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
                                             <div class="sh-overlay-style1">
                                                 <div class="sh-table-full">
                                                     <a href="https://jevelin.me.com/blog1/2016/11/23/black-and-white-portrait/" class="sh-overlay-item sh-table-cell">
                                                         <div class="sh-overlay-item-container">
                                                             <i class="icon-link"></i>
                                                         </div>
                                                     </a>

                                                     <a href="https://cdn.jevelin.me.com/wp-content/uploads/sites/11/2016/11/8-780x1024.jpg" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                                         <div class="sh-overlay-item-container">
                                                             <i class="icon-magnifier-add"></i>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </div>

                                         </div>
                                         <a href="https://jevelin.me.com/blog1/2016/11/23/black-and-white-portrait/" class="post-title">
                                             <h2>Black and white portrait</h2>
                                         </a>


                                         <div class="post-meta post-meta-two">

                                             <div class="sh-columns post-meta-comments">
                                                 <span class="post-meta-categories">
                                                     <i class="icon-tag"></i>
                                                     <a href="https://jevelin.me.com/blog1/category/design/">Design</a>,
                                                     <a href="https://jevelin.me.com/blog1/category/people/">People</a>
                                                 </span>
                                             </div>

                                         </div>

                                     </div>
                                 </article>


                             </div>
                         </div>









                         <div class="sh-comments hidden" hidden>
                             <div class="sh-comment-form">
                                 <div id="respond" class="comment-respond">
                                     <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="https://jevelin.me.com/blog1/2016/11/23/movie-like-photo-shoot/#respond" style="display:none;">Cancel reply</a></small></h3>
                                     <form action="https://jevelin.me.com/blog1/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                         <label>Message <i class="icon-check sh-accent-color"></i></label>
                                         <p class="comment-form-comment">
                                             <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                         </p><label>Name <i class="icon-check sh-accent-color"></i> </label>
                                         <p class="comment-form-author">
                                             <input id="author" name="author" type="text" value="" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                         </p>
                                         <label>Email <i class="icon-check sh-accent-color"></i> </label>
                                         <p class="comment-form-email">
                                             <input id="email" name="email" type="text" value="" required="">
                                         </p>
                                         <label>Website </label>
                                         <p class="comment-form-url">
                                             <input id="url" name="url" type="text" value="">
                                         </p>
                                         <div class="sh-comments-required-notice">Required fields are marked <i class="icon-check sh-accent-color"></i></div>
                                         <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Send a comment"> <input type="hidden" name="comment_post_ID" value="88" id="comment_post_ID">
                                             <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                         </p>
                                     </form>
                                 </div>
                                 <!-- #respond -->
                             </div>
                         </div>

                     </div>
                 </div>
                 <?php
                    include_once 'blog_aside.php';
                    ?>

             </div>
         </div>

     </div>




     <a class="sh-back-to-top sh-back-to-top3 active" href="#">
         <i class="icon-arrow-up"></i>
     </a>

 </div>

 <script type="text/javascript" defer="" src="<?php echo base_url() ?>assets/frontend/default/blog/js/main.js"></script>
 <?php
    include_once 'footer_bottom.php';
    ?>