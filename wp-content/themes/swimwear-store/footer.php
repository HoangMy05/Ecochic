</div>
<footer class="footer-area">  
	<div class="f-oly"></div>
	<div class="footer-top">
		<div class="container content"> 
			<div class="f-innbx">
			
			 <?php do_action('swimwearstore_footer_above'); 
			  if ( is_active_sidebar( 'swimwear-store-footer-widget-area' ) ) { ?>	
				 <div class="row footer-row"> 
					 <?php  dynamic_sidebar( 'swimwear-store-footer-widget-area' ); ?>
				 </div>  
			 <?php } ?>
			</div>
		 </div>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');

		
	?>
	<div class="copy-right"> 
		<div class="container"> 

			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$swimwearstore_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="https://www.buywpthemes.net/products/free-swimwear-wordpress-theme/" target="_blank">Swimwear Store</a>', 'swimwear-store')),
				);
			?>
		
			<div class="copyright-text">	 
				<div class="row m-0"> 
					<div class="col-md-12 m-0">                         
						<p >
							<?php
								echo apply_filters('swimwearstore_footer_copyright', wp_kses_post(swimwearstore_str_replace_assoc($swimwearstore_copyright_allowed_tags, $footer_copyright)));
							?>
						</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div> 
	</div>
</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

