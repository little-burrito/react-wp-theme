<div class='entry'>
    <?php
    // check for Featured Video
    $video = get_post_meta( $post->ID, 'ct_tracks_video_key', true );

    // if has a video, embed it instead of featured image
    if( $video ) {
        echo '<div class="featured-video">';
            echo wp_oembed_get( esc_url( $video ) );
        echo '</div>';
    }
    elseif(get_theme_mod('premium_layouts_setting') == 'full-width-images' || get_theme_mod('premium_layouts_setting') == 'two-column-images'){
        if (has_post_thumbnail( $post->ID ) ) {
            echo "<div class='featured-image-container'>";
                ct_tracks_featured_image();
            echo "</div>";
        }
    } else {
        ct_tracks_featured_image();
    }
    ?>
	<?php if ( get_field( 'display_headline' ) == true ) { ?>
		<div class='entry-header'>
				<h1 class='entry-title'><?php
				if ( get_field( 'custom_headline' ) == '' ) {
					the_title();
				} else {
					the_field( 'custom_headline' );
				}
				?></h1>
		</div>
	<?php } ?>
    <div class="entry-container">
        <div class='entry-content'>
            <article>
                <?php the_content(); ?>
                <?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','tracks'), 'after' => '</p>', ) ); ?>
            </article>
        </div>
        <?php get_template_part('sidebar','after-page-content'); ?>
    </div>
</div>
