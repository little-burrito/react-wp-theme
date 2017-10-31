<?php

global $post;
$post_type = get_post_type();

?>
<div <?php post_class(); ?>>
    <?php ct_tracks_featured_image(); ?>
	<div class="entry-meta">
	<?php /* 
			<?php get_template_part('content/post-meta'); ?>
	 <?php */ ?>
	</div>
	<div class='entry-header'>
		<h1 class='entry-title'><?php the_title(); ?></h1>
	</div>
    <div class="entry-container">
        <div class="entry-content">
            <article>
<?php
// Add links to translated pages if relevant
if ( substr( $post_type, 0, 7 ) === "actions" ) {
	echo '<div class="language-select-container">';
		if ( $post_type !== 'actions' ) {
			echo '<a href="/actions/' . $post->post_name . '/">In English</a>';
		}
		if ( $post_type !== 'actions_fr' ) {
			echo '<a href="/actions-fr/' . $post->post_name . '/">En fran&ccedil;ais</a>';
		}
		if ( $post_type !== 'actions_sv' ) {
			echo '<a href="/actions-sv/' . $post->post_name . '/">P&aring; svenska</a>';
		}
	echo '</div>';
}
?>
                <?php the_content(); ?>
                <?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','tracks'), 'after' => '</p>', ) ); ?>
			</article>

<div class="post-article-links">
<?php
$post_id = get_the_ID();
$categories = get_the_category();
$category = $categories[0];
$cat_ID = $category->cat_ID;

$posts = get_posts("numberposts=20&category=$cat_ID");

echo "<h4>";
switch ( $post_type ) { 
	case "actions": {
		echo "Other Actions";
		break;
	}
	case "actions_sv": {
		echo "Andra Aktioner";
		break;
	}
	case "actions_fr": {
		echo "Autres Actions";
		break;
	}
	case "members": {
		echo "Other members";
		break;
	}
	default: {
		echo "Other";
		break;
	}
}
echo "</h4>";
?>

<ul>
<?php

$query = new WP_Query( array(
	'post_type' => get_post()->post_type,
	'post_status' => 'publish',
	'posts_per_page' => -1
) );

while ( $query->have_posts() ) {
	$query->the_post();
	if ( $post_id != get_the_ID() ) { 
		echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
	}
}
?>
</ul>

</div>

        </div>
        <?php get_template_part('sidebar','after-post-content'); ?>
        <div class='entry-meta-bottom'>
            <?php get_template_part('content/further-reading'); ?>
            <?php //get_template_part('content/category-links'); ?>
            <?php get_template_part('content/tag-links'); ?>
        </div>
        <?php
        if(get_theme_mod('additional_options_author_meta_settings') != 'hide'){ ?>
            <div class="author-meta">
                <div class="author">
                    <?php ct_tracks_profile_image_output(); ?>
                    <span><?php
                            _e( 'Written by:', 'tracks');
                            the_author_posts_link();
                          ?>
                    </span>
                </div>
                <div class="bio">
                    <p><?php the_author_meta( 'description' ); ?></p>
                    <?php get_template_part('content/author-social-icons'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
