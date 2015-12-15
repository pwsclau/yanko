<?php 
/*Template Name: Forms Page*/

get_header(); ?>
<div class="subpage-banner" style="background: #000 url('<?php echo the_field('subbanner_image'); ?>') no-repeat;">
		
		<h1 class="heading-46 ">
			<?php the_title(); ?>
		</h1>
	</div>

	<div class="forms-wrapper text-center">
		<div class="container">
			<div class="section-title">
				<h2>List of Forms</h2>
				<div class="cline-13 is-triggered"></div>
			</div>
			
			<div class="forms-list">
				<div class="forms-holder">
					<ul class="forms">
							<?php 
			          if( have_rows('forms') ): 
			            while( have_rows('forms') ): the_row();
			            $form_name = get_sub_field('form_name');
			            $form_file = get_sub_field('form_file');
			        ?>

								<li><a href="<?php echo $form_file ?>"><?php echo $form_name ?></a></li>

								<?php endwhile; ?>
    					<?php endif; ?>

						</ul>
				</div>
			</div>

        	
			
		</div>
	</div>
<?php get_footer(); ?>