<?php
/**
* Template Name: Blog Submission
 */
?>

<?php

get_header();
?>

<script>$('div.main-header').css("background-color","rgba(0,29,48,1)")</script>
<?php $custom_query = new WP_Query( array( 'category_name' => 'blog-submission' )); ?>


<section id="mainDiv" class="container-fluid">

<div id="upload-blog-area">
	<div id="upload-blog-description">
		<p> Got a blog you want to submit? Upload now! A word document file would do. </p>
	</div>
	<div id="upload-blog-button">
		<?php 
			echo do_shortcode( '[wordpress_file_upload]' ); 
		?>
	</div>
</div>
<? if ($custom_query->have_posts()):
while($custom_query->have_posts()) : $custom_query->the_post(); ?>
	<a href="<?php the_permalink(); ?>"><div class="row newsletterListDiv" id="newsletterListDiv1">
		<div class="col-md-4 newsletterListImageDiv">
		<div id="newsletterListImageDiv1">
			<div id="newsletterListLayer"><?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?></div>
		</div>
		</div>
		<div class="col-md-8 newsletterListTextDiv" id="newsletterListTextDiv1">
			<div id="newsletterListInfo">BLOG SUBMISSION<span id="division"> | </span><?php the_date(); ?></div><br />
			<div id="newsletterListTitle"><?php the_title(); ?></div><br />
			<div class="newsletterListBody">
<?php the_excerpt(); ?>
			</div>
			<div class="tags">
				<p><?php the_tags(); ?></p>
			</div>
		</div>
	</div></a>
<?php endwhile;
else:
?>

<div id="newsletterListTitle">NO POSTS FOUND :(</div>
<?php endif; ?>


</section>

<?php get_footer()?>