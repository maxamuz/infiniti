<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infiniti
 */

?>
<div class="container">
	<footer id="colophon" class="site-footer">
		<div id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$infiniti_description = get_bloginfo('description', 'display');
				if ($infiniti_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $infiniti_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'infiniti'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="call-header">
				<a class="call-header-link" href="#"><img src="<?php echo get_template_directory_uri() . '/img/icon-call.png' ?>" alt="Иконка телефонной трубки"></a>
			</div>
		</div><!-- #masthead -->
		<div class="company-info">
			<p class="company-info-item">© Infiniti Market <?php echo date('Y'); ?></p>
			<p class="company-info-item">ИП Иванов Иван Иванович</p>
			<p class="company-info-item">Реквизиты: 4100000000000041</p>
			<a href="#" class="company-info-item">Политика конфиденциальности</a>
		</div>
		<div class="site-info">
			
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Разработано: %2$s.', 'infiniti'), 'infiniti', '<a href="https://bizsoul.ru/">Маркетинговое агентство BizSoul</a>');
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>