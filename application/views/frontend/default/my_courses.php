<?php

$my_courses = $this->user_model->my_courses()->result_array();

$categories = array();
foreach ($my_courses as $my_course) {
    $course_details = $this->crud_model->get_course_by_id($my_course['course_id'])->row_array();
    if (!in_array($course_details['category_id'], $categories)) {
        array_push($categories, $course_details['category_id']);
    }
}
?>
<section class="page-header-area my-course-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title"><?php echo get_phrase('my_courses'); ?></h1>
                <ul>
                    <li class="active"><a href="<?php echo site_url('home/my_courses'); ?>"><?php echo get_phrase('all_courses'); ?></a></li>
                    <li><a href="<?php echo site_url('home/my_wishlist'); ?>"><?php echo get_phrase('wishlists'); ?></a></li>
                    <li><a href="<?php echo site_url('home/my_messages'); ?>"><?php echo get_phrase('my_messages'); ?></a></li>
                    <li><a href="<?php echo site_url('home/purchase_history'); ?>"><?php echo get_phrase('purchase_history'); ?></a></li>
                    <li><a href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo get_phrase('user_profile'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="my-courses-area">
    <div class="container">
        <div class="row align-items-baseline">
            <div class="col-lg-6">
                <div class="my-course-filter-bar filter-box">
                    <span><?php echo get_phrase('filter_by'); ?></span>
                    <div class="btn-group">
                        <a class="btn btn-outline-secondary dropdown-toggle all-btn" href="#" data-toggle="dropdown">
                            <?php echo get_phrase('categories'); ?>
                        </a>

                        <div class="dropdown-menu">
                            <?php foreach ($categories as $category) :
                                $category_details = $this->crud_model->get_categories($category)->row_array();
                                ?>
                                <a class="dropdown-item" href="#" id="<?php echo $category; ?>" onclick="getCoursesByCategoryId(this.id)"><?php echo $category_details['name']; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- <div class="btn-group">
                        <a class="btn btn-outline-secondary dropdown-toggle" href="#"data-toggle="dropdown">
                            <?php echo get_phrase('instructors'); ?>
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><?php echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?></a>

                        </div>
                    </div> -->
                    <div class="btn-group">
                        <a href="<?php echo site_url('home/my_courses'); ?>" class="btn reset-btn" disabled><?php echo get_phrase('reset'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="my-course-search-bar">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="<?php echo get_phrase('search_my_courses'); ?>" onkeyup="getCoursesBySearchString(this.value)">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row no-gutters" id="my_courses_area">
            <?php foreach ($my_courses as $my_course) :
                $course_details = $this->crud_model->get_course_by_id($my_course['course_id'])->row_array();
                $instructor_details = $this->user_model->get_all_user($course_details['user_id'])->row_array(); ?>

                <div class="col-lg-3">
                    <div class="course-box-wrap">
                        <div class="course-box">
                            <a href="<?php echo site_url('home/lesson/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>">
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($my_course['course_id']); ?>" alt="" class="img-fluid">
                                    <span class="play-btn"></span>
                                </div>
                            </a>

                            <div class="" id="course_info_view_<?php echo $my_course['course_id'];  ?>">
                                <div class="course-details">
                                    <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>">
                                        <h5 class="title"><?php echo ellipsis($course_details['title']); ?></h5>
                                    </a>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo course_progress($my_course['course_id']); ?>%" aria-valuenow="<?php echo course_progress($my_course['course_id']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small><?php echo ceil(course_progress($my_course['course_id'])); ?>% <?php echo get_phrase('completed'); ?></small>
                                    <div class="rating your-rating-box" style="position: unset; margin-top: -18px;">

                                        <?php
                                            $get_my_rating = $this->crud_model->get_user_specific_rating('course', $my_course['course_id']);
                                            for ($i = 1; $i < 6; $i++) : ?>
                                            <?php if ($i <= $get_my_rating['rating']) : ?>
                                                <i class="fas fa-star filled"></i>
                                            <?php else : ?>
                                                <i class="fas fa-star"></i>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                        <!-- <p class="your-rating-text" id = "<?php echo $my_course['course_id']; ?>" onclick="getCourseDetailsForRatingModal(this.id)">
                                              <span class="your"><?php echo get_phrase('your'); ?></span>
                                              <span class="edit"><?php echo get_phrase('edit'); ?></span>
                                              <?php echo get_phrase('rating'); ?>
                                          </p> -->
                                        <p class="your-rating-text">
                                            <a href="javascript::" id="edit_rating_btn_<?php echo $course_details['id']; ?>" onclick="toggleRatingView('<?php echo $course_details['id']; ?>')" style="color: #2a303b"><?php echo get_phrase('edit_rating'); ?></a>
                                            <a href="javascript::" class="hidden" id="cancel_rating_btn_<?php echo $course_details['id']; ?>" onclick="toggleRatingView('<?php echo $course_details['id']; ?>')" style="color: #2a303b"><?php echo get_phrase('cancel_rating'); ?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="padding: 5px;">
                                    <div class="col-md-6">
                                        <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>" class="btn"><?php echo get_phrase('course_detail'); ?></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo site_url('home/lesson/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>" class="btn"><?php echo get_phrase('start_lesson'); ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="course-details" style="display: none; padding-bottom: 10px;" id="course_rating_view_<?php echo $course_details['id']; ?>">
                                <a href="<?php echo site_url('home/course/' . slugify($course_details['title']) . '/' . $my_course['course_id']); ?>">
                                    <h5 class="title"><?php echo ellipsis($course_details['title']); ?></h5>
                                </a>
                                <?php
                                    $user_specific_rating = $this->crud_model->get_user_specific_rating('course', $course_details['id']);
                                    ?>
                                <form class="" action="" method="post">
                                    <div class="form-group select">
                                        <div class="styled-select">
                                            <select class="form-control" name="star_rating" id="star_rating_of_course_<?php echo $course_details['id']; ?>">
                                                <option value="1" <?php if ($user_specific_rating['rating'] == 1) : ?>selected="" <?php endif; ?>>1 <?php echo get_phrase('out_of'); ?> 5</option>
                                                <option value="2" <?php if ($user_specific_rating['rating'] == 2) : ?>selected="" <?php endif; ?>>2 <?php echo get_phrase('out_of'); ?> 5</option>
                                                <option value="3" <?php if ($user_specific_rating['rating'] == 3) : ?>selected="" <?php endif; ?>>3 <?php echo get_phrase('out_of'); ?> 5</option>
                                                <option value="4" <?php if ($user_specific_rating['rating'] == 4) : ?>selected="" <?php endif; ?>>4 <?php echo get_phrase('out_of'); ?> 5</option>
                                                <option value="5" <?php if ($user_specific_rating['rating'] == 5) : ?>selected="" <?php endif; ?>>5 <?php echo get_phrase('out_of'); ?> 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group add_top_30">
                                        <textarea name="review" id="review_of_a_course_<?php echo $course_details['id']; ?>" class="form-control" style="height:120px;" placeholder="<?php echo get_phrase('write_your_review_here'); ?>"><?php echo $user_specific_rating['review']; ?></textarea>
                                    </div>
                                    <button type="" class="btn btn-block" onclick="publishRating('<?php echo $course_details['id']; ?>')" name="button"><?php echo get_phrase('publish_rating'); ?></button>
                                    <a href="javascript::" class="btn btn-block" onclick="toggleRatingView('<?php echo $course_details['id']; ?>')" name="button"><?php echo get_phrase('cancel_rating'); ?></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<script type="text/javascript">
    function getCoursesByCategoryId(category_id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('home/my_courses_by_category'); ?>',
            data: {
                category_id: category_id
            },
            success: function(response) {
                $('#my_courses_area').html(response);
            }
        });
    }

    function getCoursesBySearchString(search_string) {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('home/my_courses_by_search_string'); ?>',
            data: {
                search_string: search_string
            },
            success: function(response) {
                $('#my_courses_area').html(response);
            }
        });
    }

    function getCourseDetailsForRatingModal(course_id) {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('home/get_course_details'); ?>',
            data: {
                course_id: course_id
            },
            success: function(response) {
                $('#course_title_1').append(response);
                $('#course_title_2').append(response);
                $('#course_thumbnail_1').attr('src', "<?php echo base_url() . 'uploads/thumbnails/course_thumbnails/'; ?>" + course_id + ".jpg");
                $('#course_thumbnail_2').attr('src', "<?php echo base_url() . 'uploads/thumbnails/course_thumbnails/'; ?>" + course_id + ".jpg");
                $('#course_id_for_rating').val(course_id);
                // $('#instructor_details').text(course_id);
                console.log(response);
            }
        });
    }
</script>