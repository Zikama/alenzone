<div class="card-md-4">
    <?php
    // Split titles
    $topCourses_tile = explode(",", get_phrase('top_course_title'));
    // Description is beeing splited uniquely to others with the partern [ ., ] spaces must be included at the begining and to the end
    $topCourses_description = explode(" ., ", get_phrase('top_course_description'));
    // Split links for filtering courses
    $topCourses_links = explode(" ", get_phrase('top_course_filter_link')); //remove blanc spaces
    $topCourses_links = explode(",", implode($topCourses_links));
    $topCourses_imgs = ['architect', 'structural_engineering', 'project_management'];
    // Loop through the titles
    foreach ($topCourses_tile as $key => $title) { ?>
        <a href="<?php echo site_url('home/courses?' . 'category=' . $topCourses_links[$key]); ?>" class="art-md">
            <div>
                <img src="<?php echo site_url('uploads/system/top_courses/' . $topCourses_imgs[$key] . '.jpg') ?>">
                <h5><?php echo $title; ?></h5>
                <p><?php echo $topCourses_description[$key] ?>
                    <br /><i class="fas fa-arrow-right follow_link"></i>
                </p>
            </div>
        </a>
    <?php
    }
    ?>
</div>