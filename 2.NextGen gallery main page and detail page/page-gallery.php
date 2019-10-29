<?php
/*
Template Name: Event Gallery
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<div <?php post_class('custom-padding'); ?>>
		<div class="row">
			<div class="small-12 columns">
				<header class="post-title page-title">
					<?php the_title('<h1 class="cus-title" itemprop="name headline">', '</h1>' ); ?>
				</header>
				<!-- <div class="post-content no-vc">
					<?php //the_content();?>
				</div> -->
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
	<!-- gallery  -->

<div class="container">
                <div class="row">
			            <div class="col-cheez-4">
		                    <h2 id="cheez" class="cheez">Say Cheese!</h2>
		                    <br />
		                    <p>We have a great time at every event we go to. We also like to take
		                    pictures.</p>
		                    
		                    <p>Browse our gallery and download your pictures. If we haven’t already
		                    seen you at one of our events, we hope you’ll join us soon.</p>
		                  
                    <br />
		            </div>
                </div>
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<div <?php post_class('page-padding'); ?>>
		<div class="row">
			<div class="col-md-12">
				<div class="post-content no-vc">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
     
</div>
<!--  -->
	<!-- small 12-->

<?php get_footer(); ?>