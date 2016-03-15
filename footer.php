</div> <!-- .main -->


<footer id="site-footer" class="site-footer" role="contentinfo">
    <?php if(get_bloginfo('description') && ( get_theme_mod('tagline_display_setting') == 'header-footer' ) || ( get_theme_mod('tagline_display_setting') == 'footer' )){ ?>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    <?php } ?>
    <?php
        // add footer menu if set
        get_template_part( 'menu', 'footer' );
    ?>
    <?php
        // add social icons if set
        if( (get_theme_mod('social_icons_display_setting') == 'header-footer') || (get_theme_mod('social_icons_display_setting') == 'footer')){
	        get_template_part('content/social-icons');
        }
    ?>
	<?php get_template_part('sidebar','footer'); ?>

	<div class="partners">
		<h4>ReAct! is part of</h4>
		<div class="images">
			<!--<span class="partner left">-->
				<a href="http://danskonsulentdis.se/" target="_blank"><img src="<?php echo get_bloginfo( "template_url" ); ?>/assets/images/dis.png" alt="DIS - Dans i Stockholms stad och län" /></a>
			<!--</span>
			<span class="partner right">-->
				<a href="http://www.subtopia.se/start-page/" target="_blank"><img src="<?php echo get_bloginfo( "template_url" ); ?>/assets/images/subtopia.png" alt="Subtopia" /></a>

				<span class="vcenter"><a href="http://mojlighetsministeriet.se/" target="_blank">M&ouml;jlighetsministeriet</a></span>
			<!--</span>-->
		</div>

		<h4 class="marginated">With support from</h4>
		<p>
			<a href="http://www.konstnarsnamnden.se/" target="_blank"><img src="<?php echo get_bloginfo( "template_url" ); ?>/assets/images/supported_by_konstnarsnamnden.png" alt="Konstn&auml;rsn&auml;mnden" class="supported_by_konstnarsnamnden" /></a>
		</p>

		<h4 class="marginated">Media</h4>
		<p>
			<a href="https://www.youtube.com/user/reactactions" target="_blank">YouTube</a><br />
			<a href="https://www.facebook.com/reactactions" target="_blank">Facebook</a>
		</p>

		<h4 class="marginated">Contact us</h4>
		<p>
			<a href="mailto:info@reactactions.com">info@reactactions.com</a><br />
			<span style="font-family: sans-serif">+46 738 794 025</span>
		</p>

		<p>
			<a href="/cookie-policy/">Cookie Policy</a>
		</p>
	</div>

    <div class="design-credit">
        <p>
            <?php
            /* Get the user's footer text input */
            $user_footer_text = get_theme_mod('ct_tracks_footer_text_setting');

            /* If it's not empty, output their text */
            if( ! empty($user_footer_text) ) {
                echo $user_footer_text;
            }
            /* Otherwise, output the default text */
            else {
                $site_url = 'https://www.competethemes.com/tracks/';
                $footer_text = sprintf( __( '<a target="_blank" href="%s">Tracks WordPress Theme</a> by Compete Themes. <a href="https://github.com/little-burrito/react-wp-theme">This version</a> is modified by ReAct! - Actions moving.', 'tracks' ), esc_url( $site_url ) );
                echo $footer_text;
            }
            ?>
        </p>
    </div>
</footer>

<?php if( get_theme_mod('additional_options_return_top_settings') != 'hide' ) { ?>
	<button id="return-top" class="return-top">
		<i class="fa fa-arrow-up"></i>
	</button>
<?php } ?>

<?php
    // add the background image if being used
    if(get_theme_mod( 'ct_tracks_background_image_setting')){
        echo "<div class='background-image'></div>";
    }
?>

</div><!-- .overflow-container -->

<?php wp_footer(); ?>
</body>
</html>
