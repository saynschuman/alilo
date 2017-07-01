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
		.camera_pag {
			display: none;
		}
		.slide-more {
			background: rgb(255, 90, 116);
			border: 1px solid rgb(255, 90, 116);
			color: #fff;
			padding: 7px 20px;
			width: 130px;
			margin: auto;
			margin-top: 30px;
			transition: .3s;
		}
		.slide-more:hover {
			background: #fff;
			color: rgb(255, 90, 116);
			transition: .3s;

		}
		.alilo-toy {

		}
		.features-img {
			width: 40%;
			float: left;
		}
		.features-img img {
			display: block;
			margin: auto;
		}
		.features_text {
			width: 60%;
			float: right;
		}
		.features_text h2 {
			font-weight: bold;
		}
		.features_text .purple {
			color: rgb(228, 85, 165);
		}
		.features_text .pink {
			color: rgb(255, 90, 116);
		}
		.features_text .yellow {
			color: rgb(255, 182, 0);
		}
		.features_text .green {
			color: rgb(148, 207, 28);
		}
		.features_text p {
			max-width: 385px;
		}
		.features_text ul {
			padding: 0;
			margin: 0;
		}
		.features_text ul li img {
			position: absolute;
		}
		.features_text ul li.light_feature {
			padding-left: 10px;
			width: calc(50% - 10px);
		}
		.features_text ul li.power_feature {
			padding-left: 30px;
			width: calc(50% - 10px);
		}
		.features_text ul li span {
			padding-left: 46px;
			display: block;
		}
		.features_text ul li {
			width: 50%;
			float: left;
			list-style: none;
			padding: 0;
			margin: 0;
			margin-bottom: 30px;
			position: relative;
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