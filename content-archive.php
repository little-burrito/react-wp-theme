<div <?php post_class(); ?>>
	<?php
	// output Featured Image
	echo '<a class="featured-image-link" href="' . get_permalink() . '">';
		ct_tracks_featured_image();
	echo '</a>';
	?>
	<div class="excerpt-container">
		<div class="excerpt-meta">
			<?php //get_template_part('content/post-meta'); ?>
		</div>
		<div class='excerpt-header'>
			<h1 class='excerpt-title'>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
		</div>
		<div class='excerpt-content'>
			<article>
			<p><a class='more-link' href="<?php the_permalink(); ?>"><?php
$category = get_the_category(); 
switch ( $category[ 0 ]->cat_name ) { 
	case "Actions": {
		echo "Read more";
		break;
	}
	case "Members": {
		echo "Read more";
		break;
	}
	default: {
		echo "Read more";
		break;
	}
}
?><span class='screen-reader-text'><?php the_title(); ?></span></a></p>
				<?php //ct_tracks_excerpt(); ?>
			</article>
		</div>
	</div>
</div>
