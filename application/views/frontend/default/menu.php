<div class="main-nav-wrap">
  <div class="mobile-overlay"></div>

  <ul class="mobile-main-nav">
    <div class="mobile-menu-helper-top"></div>
    <li class="has-children">
      <a href="" class="course_title btn btn-sign-in">
        <i class="aui-icon-dashboard-small d-inline"></i>
        <span><?php echo get_phrase('courses'); ?></span>
        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
      </a>

      <ul class="category corner-triangle top-left is-hidden">
        <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>

        <?php
        $categories = $this->crud_model->get_categories()->result_array();
        foreach ($categories as $key => $category) :
          $sub_categories = $this->crud_model->get_sub_categories($category['id']);
          foreach ($sub_categories as $sub_category) : ?>

            <li class="has-children__">
              <a href="<?php echo site_url('home/courses?category=' . $sub_category['slug']); ?>">
                <span><?php echo $sub_category['name']; ?> </span>
              </a>

              <?php /*
            <ul class="sub-category hidden">
              <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
              <li class="go-back"><a href="">
                  <i class="fas fa-angle-left"></i>
                  <span class="icon"><i class="<?php echo $category['font_awesome_class']; ?>"></i></span>
                  <?php echo $category['name']; ?>
                </a></li>
              <?php
                $sub_categories = $this->crud_model->get_sub_categories($category['id']);
                foreach ($sub_categories as $sub_category) : ?>
                <li><a href="<?php echo site_url('home/courses?category=' . $sub_category['slug']); ?>"><?php echo $sub_category['name']; ?></a></li>
              <?php endforeach; ?>
            </ul>
            <?php */ ?>
            </li>

          <?php endforeach; ?>
        <?php endforeach; ?>
        <li class="all-category-devided">
          <a href="<?php echo site_url('home/courses'); ?>">
            <span class="icon"><i class="fa fa-align-justify"></i></span>
            <span><?php echo get_phrase('all_courses'); ?></span>
          </a>
        </li>
      </ul>
    </li>

    <div class="mobile-menu-helper-bottom"></div>
  </ul>
</div>