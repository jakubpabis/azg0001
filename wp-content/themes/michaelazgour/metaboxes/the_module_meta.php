<div class="my_meta_control">

    <p>
		<?php $mb->the_field('module_link'); ?>
		<label>Module link</label>
		<textarea name="<?php $mb->the_name(); ?>" rows="2"><?php $mb->the_value(); ?></textarea>
	</p>
	<label>Open in new tab?</label><br/>
	<?php $mb->the_field('is_new_tab'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="new_tab"<?php $mb->the_checkbox_state('new_tab'); ?>/>Yes<br/>
 
	<br/>
	<br/>	
	<h3>Assign this module to following years:</h3>

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