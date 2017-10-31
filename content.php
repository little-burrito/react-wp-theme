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
                <?php the_content(); ?>
                <?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','tracks'), 'after' => '</p>', ) ); ?>
			</article>

<div class="post-article-links">
<?php
global $post;
$post_id = get_the_ID();
$categories = get_the_category();
$category = $categories[0];
$cat_ID = $category->cat_ID;

$posts = get_posts("numberposts=20&category=$cat_ID");

echo "<h4>";
switch ( $category->slug ) { 
	case "actions": {
		echo "Other Actions";
		break;
	}
	case "actions-sv": {
		echo "Andra Aktioner";
		break;
	}
	case "actions-fr": {
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
<?php foreach($posts as $post) :?>
<?php if ( $post_id != get_the_ID() ) { ?>
<li /><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php } ?>
<?php endforeach; ?>
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
