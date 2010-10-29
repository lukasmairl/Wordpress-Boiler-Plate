<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 0.1
 */
?>

	</div><!-- #main -->    
    <footer></footer>
</div> <!-- end of #container -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php echo bloginfo('template_url'); ?>/js/plugins.js"></script>
  <script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="<?php echo bloginfo('template_url'); ?>/js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->

  <!-- yui profiler and profileviewer - remove for production -->
  <script src="<?php echo bloginfo('template_url'); ?>/js/profiling/yahoo-profiling.min.js"></script>
  <script src="<?php echo bloginfo('template_url'); ?>/js/profiling/config.js"></script>
  <!-- end profiling code -->


  <!-- change the UA-XXXXX-X to be your site's ID -->
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  
  
</body>
</html>
