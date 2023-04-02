<?php
/**
 * @package Standard
 */
?>

	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="logo-text">
		<?php if(is_active_sidebar('widget-4') ) { ?>
		<a class="logo_footer" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Logo Footer">
		<ul>
			<?php dynamic_sidebar('widget-4');?>
		</ul>
		</a> 
		<?php } ?>
		</div>
		<div class="row">
		<div class="firstcol footercols col-lg-3">
		<?php dynamic_sidebar('footer1');?>
		</div>
		<div class="secondcol footercols col-lg-2">
		<?php dynamic_sidebar('footer2');?>
		</div>
		<div class="thirdcol footercols col-lg-2">
		<?php dynamic_sidebar('footer3');?>
		</div>
		<div class="fourthcol footercols col-lg-5">
		<?php dynamic_sidebar('footer4');?>
		</div>
		</div>
	</div>

	<div class="copyr">
		<div class="container">
      	<p>Copyright<?php echo date(' Y  ') ;?>CASH ITT | All Rights Reserved</p>
	  	</div>
  	</div>
	</footer><!-- #colophon -->

</div><!-- #page -->


<?php wp_footer(); ?>
</body>
</html>
