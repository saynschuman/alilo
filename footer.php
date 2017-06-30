		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-footer'); ?>
					</div>
				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>
	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<style>
		.icon-rss:before {
		    content: "\f189";
		}
		.icon-google-plus:before {
		    content: "\f16d";
		}

		.icon-pinterest:before {
		    content: "\f263";
		}
		.logo {
		    left: 50%;
		    text-align: center;
		}
		.call-num {
		    display: block;
		    font-size: 18px;
		    top: 18px;
		    margin-bottom: 5px;
		    text-align: right;
		    position: absolute;
		    right: 47px;
		}		
		.icon-twitter:before {
		    content: "\f167";
		}
		header nav.fixed {
				position: fixed;
				background: #fff;
				top: 0;
				padding-bottom: 13px;
		}
		@media screen and (max-width: 769px) {
			.logo {
				left: 0;
			}
			.call-num {
			    display: block;
			    font-size: 18px;
			    text-align: center;
			    position: relative;
			    right: 0;
			    margin-bottom: 10px;
			}
			.social-nets-wrapper .social {
				display: block;
				text-align: center;
			}
		} 
	</style>
	<script>
		(function($) {
    		
    		$(window).scroll(function(){
    			if ($(this).scrollTop() > 100) {
    				$('.nav__primary').addClass('fixed');
    			} if ($(this).scrollTop() <= 100) {
    				$('.nav__primary').removeClass('fixed');
    			}
        });

	
		})(jQuery);
	</script>
</body>
</html>