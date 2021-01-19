<div class="my_meta_control">

    <p>
		<?php $mb->the_field('module_link'); ?>
		<label>Module link</label>
		<textarea name="<?php $mb->the_name(); ?>" rows="2"><?php $mb->the_value(); ?></textarea>
	</p>
	<label>Open in new tab?</label><br/>
	<?php $mb->the_field('is_new_tab'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" value="new_tab"<?php $mb->the_checkbox_state('new_tab'); ?>/>Yes<br/>
	
	<?php /*
	<br/>
	<br/>	
	<h3>Assign this module to following years:</h3>

	<?php for( $i = 1; $i <= 10; $i++  ): ?>
		<p>
			<?php $mb->the_field('year'.$i); ?>
			<select name="<?php $mb->the_name(); ?>">
			<option value="none">None</option>
			<?php
			global $thispost;
			$myposts = get_terms( array(
				'taxonomy' => 'years',
				'hide_empty' => false,
			) );
			foreach($myposts as $thispost) : ?>
				<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->name; ?></option>
			<?php endforeach; ?>
			<?php setup_postdata($thispost); ?>
			</select>
		</p>
	<?php endfor; */ ?>

	<br/>
	<br/>	
	<h3>Assign this module to following series:</h3>

	<?php for( $i = 1; $i <= 10; $i++  ): ?>
		<p>
			<?php $mb->the_field('year'.$i); ?>
			<select name="<?php $mb->the_name(); ?>">
			<option value="">None</option>
			<?php
			global $thispost;
			$myposts = get_terms( array(
				'taxonomy' => 'years',
				'hide_empty' => false,
			) );
			foreach($myposts as $thispost) : ?>
				<option value="<?php echo $thispost->slug; ?>" <?php $mb->the_select_state($thispost->slug);?> ><?php echo $thispost->name; ?></option>
			<?php endforeach; ?>
			<?php setup_postdata($thispost); ?>
			</select>
		</p>
	<?php endfor; ?>

</div>