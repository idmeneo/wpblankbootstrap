<?php get_header(); ?>

<div class="row">

	<div class="col-md-8">

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title('<h1>','</h1>'); ?>
		 		<?php the_content(); ?>
			</div>
			 
			 	// tags anyone?
				the_tags();

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
 
			?>
		   <?php endwhile;   ?>
  
		<?php else : ?>

		<div class="alert alert-info">
		  <strong>Pas de contenu</strong>
		</div>

		<?php endif; ?>
	</div>

	<div class="col-md-4">

		<?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
		?>
		<?php
		     endif;
		?>
	</div>

</div>
 
<?php get_footer(); ?>
