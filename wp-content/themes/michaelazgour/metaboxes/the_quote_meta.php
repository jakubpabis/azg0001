<div class="my_meta_control">
	<h3>Assign this quote to following years:</h3>
	<p>
		<?php $mb->the_field('year1'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year2'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year3'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year4'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year5'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year6'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year7'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year8'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year9'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>
	<p>
		<?php $mb->the_field('year10'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="none">None</option>
		<?php
		global $thispost;
		$myposts = get_terms( array(
		    'taxonomy' => 'years',
		    'hide_empty' => false,
		) );
		foreach($myposts as $thispost) : ?>
			<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->slug; ?></option>
		<?php endforeach; ?>
		<?php setup_postdata($thispost); ?>
		</select>
	</p>

</div>