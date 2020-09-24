	<?php do_action( 'basic_main_wrap_inner_end' ); ?>

</div>
<!-- #main -->

<?php do_action( 'basic_before_footer' ); ?>

<footer id="footer" class="footer <?php echo apply_filters( 'basic_footer_class', '' );?>">
	<?php do_action( 'basic_before_footer_menu' ); ?>
	<div class="container">
		<div class="footer-menu">
			<div class="inner">
				<div class="footer-column">
					<?//виджет в футере(адрес)?>
					<div class="footer-block">
						<?dynamic_sidebar( 'footer-include-left' );?>
					</div>
					<?//виджет в футере(форма обратной связи)?>
					<div class="footer-block">
						<?dynamic_sidebar( 'footer-include-form' );?>
					</div>
				</div>
				<div class="footer-column">
					<?//Первое меню в футере?>
					<?if (has_nav_menu('bottom-top')):?>
						<div class="footer-block">
							<?$location = 'bottom-top';
							$theme_locations = get_nav_menu_locations(); // взяли все theme_location
							$menu_obj = get_term($theme_locations[$location]); // ищем нашу theme_location
							$bottomTop = wp_nav_menu( [
								'theme_location' => $location,
								'echo' => false
							]);
							$menu_name = $menu_obj->name; // получаем имя?>
							<h4 class="footer-block__title"><?=$menu_name?></h4>
							<?echo $bottomTop;?>
						</div>
					<?endif;?>
					<?//Второе меню в футере?>
					<?if (has_nav_menu('bottom-bottom')):?>
						<div class="footer-block">
							<?$location = 'bottom-bottom';
							$theme_locations = get_nav_menu_locations(); // взяли все theme_location
							$menu_obj = get_term($theme_locations[$location]); // ищем нашу theme_location
							$bottomTop = wp_nav_menu( [
								'theme_location' => $location,
								'echo' => false
							]);
							$menu_name = $menu_obj->name; // получаем имя?>
							<h4 class="footer-block__title"><?=$menu_name?></h4>
							<?echo $bottomTop;?>
						</div>
					<?endif;?>
					<?//виджет в футере?>
					<div class="footer-block">
						<?dynamic_sidebar( 'footer-include' );?>
					</div>
					<?if( apply_filters( 'basic_footer_copyrights_enabled', true ) ) :?>
						<div class="<?php echo apply_filters( 'basic_footer_copyrights_class', 'copyrights maxwidth grid' );?>">
							<div class="<?php echo apply_filters( 'basic_footer_copytext_class', 'copytext col6' );?>">
								<p id="copy">
									<!--noindex-->
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
									<!--/noindex--> &copy; <?php echo date("Y",time()); ?>
									<br/>
									<span class="copyright-text"><?php echo basic_get_theme_option('copyright_text'); ?></span>
									<?if ( function_exists( 'the_privacy_policy_link' ) ) {
										the_privacy_policy_link( '<br>' );
									}?>
								</p>
							</div>
						</div>
    				<?endif;?>
					<?do_action( 'basic_after_footer_copyrights' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-map"><iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d36871.12423081269!2d20.496384000000017!3d54.71938234855745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1596538927515!5m2!1sru!2sru"
			width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
			tabindex="0"></iframe></div>
</footer>

<?php do_action( 'basic_after_footer' ); ?>


</div> 
<!-- .wrapper -->

<a id="toTop">&#10148;</a>

<?php wp_footer(); ?>

</body>
</html>