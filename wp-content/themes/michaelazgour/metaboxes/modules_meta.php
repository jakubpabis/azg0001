<div class="my_meta_control">

    <p>
		<?php $mb->the_field('module1'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>

		<?php

		global $thispost;
		$myposts = get_posts('post_type=modules&posts_per_page=-1');

		foreach($myposts as $thispost) : ?>

		<option value="<?php echo $thispost->ID; ?>" <?php $mb->the_select_state($thispost->ID);?> ><?php echo get_the_title($thispost->ID); ?></option>

		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('module2'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>

		<?php

		global $thispost;
		$myposts = get_posts('post_type=modules&posts_per_page=-1');

		foreach($myposts as $thispost) : ?>

		<option value="<?php echo $thispost->ID; ?>" <?php $mb->the_select_state($thispost->ID);?> ><?php echo get_the_title($thispost->ID); ?></option>

		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('module3'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>

		<?php

		global $thispost;
		$myposts = get_posts('post_type=modules&posts_per_page=-1');

		foreach($myposts as $thispost) : ?>

		<option value="<?php echo $thispost->ID; ?>" <?php $mb->the_select_state($thispost->ID);?> ><?php echo get_the_title($thispost->ID); ?></option>

		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
 
 
</div>