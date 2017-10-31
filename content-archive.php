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
			<p><a class='more-link' href="<?php the_permalink(); ?>">

<pre style="text-transform: none"><? print_r( get_post() ); ?></pre>
<pre style="text-transform: none"><? print_r( get_post()->post_type ); ?></pre>

<?php
$post_type = get_post()->post_type;
switch ( $post_type ) { 
	case "actions": {
		echo "Read more";
		break;
	}
	case "actions-fr": {
		echo "Voir plus";
		break;
	}
	case "actions-sv": {
		echo "L&auml;s mer";
		break;
	}
	case "members": {
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
