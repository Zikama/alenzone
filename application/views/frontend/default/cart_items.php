<?php
$total_price = 0;
?>
<div class="icon">
	<a href="javascript::" onclick="showCartPage()"><svg width="48" height="48" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<title>
				shopping-basket-large
			</title>
			<path d="M13.8,19.5 L43.8,19.5 M10.6,11.5 L46.5,11.5 L41,27.5 L16.9,27.5 M38.5,44.5 C40.1568542,44.5 41.5,43.1568542 41.5,41.5 C41.5,39.8431458 40.1568542,38.5 38.5,38.5 C36.8431458,38.5 35.5,39.8431458 35.5,41.5 C35.5,43.1568542 36.8431458,44.5 38.5,44.5 Z M22.5,44.5 C24.1568542,44.5 25.5,43.1568542 25.5,41.5 C25.5,39.8431458 24.1568542,38.5 22.5,38.5 C20.8431458,38.5 19.5,39.8431458 19.5,41.5 C19.5,43.1568542 20.8431458,44.5 22.5,44.5 Z M1,3.5 L7.5,3.5 L20,35.5" stroke="currentColor" stroke-width="1" fill="none" fill-rule="evenodd" />
		</svg></a>
	<span class="number"><?php echo sizeof($this->session->userdata('cart_items')); ?></span>
</div>

<!-- Cart Dropdown goes here -->
<div class="dropdown course-list-dropdown corner-triangle top-right" style="display: none;">
	<!-- Just remove the display none from the css to make it work -->
	<div class="list-wrapper">
		<div class="item-list">
			<ul>
				<?php foreach ($this->session->userdata('cart_items') as $cart_item) :
					$course_details = $this->crud_model->get_course_by_id($cart_item)->row_array();
					$instructor_details = $this->user_model->get_all_user($course_details['user_id'])->row_array();
					?>
					<li>
						<div class="item clearfix">
							<div class="item-image">
								<a href="">
									<img src="<?php echo $this->crud_model->get_course_thumbnail_url($cart_item); ?>" alt="" class="img-fluid">
								</a>
							</div>
							<div class="item-details">
								<a href="">
									<div class="course-name"><?php echo $course_details['title']; ?></div>
									<div class="instructor-name"><?php echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?></div>
									<div class="item-price">
										<?php if ($course_details['discount_flag'] == 1) :
												$total_price += $course_details['discounted_price']; ?>
											<span class="current-price"><?php echo currency($course_details['discounted_price']); ?></span>
											<span class="original-price"><?php echo currency($course_details['price']); ?></span>
										<?php else :
												$total_price += $course_details['price']; ?>
											<span class="current-price"><?php echo currency($course_details['price']); ?></span>
										<?php endif; ?>
									</div>
								</a>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="dropdown-footer">
			<div class="cart-total-price clearfix">
				<span><?php echo get_phrase('total'); ?>:</span>
				<div class="float-right">
					<span class="current-price"><?php echo currency($total_price); ?></span>
					<!-- <span class="original-price">$94.99</span> -->
				</div>
			</div>
			<a href="<?php echo site_url('home/shopping_cart'); ?>"><?php echo get_phrase('go_to_cart'); ?></a>
		</div>
	</div>
	<div class="empty-box text-center d-none">
		<p><?php echo get_phrase('your_cart_is_empty') ?>.</p>
		<a href="">Keep Shopping</a>
	</div>
</div>

<script type="text/javascript">
	function showCartPage() {
		window.location.replace("<?php echo site_url('home/shopping_cart'); ?>");
	}
</script>