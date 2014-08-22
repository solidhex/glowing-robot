	</div><!--#eof main -->
	<footer>
		The footer
	</footer>
</div><!--#eof container -->
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/dist/main.min.js"></script>
</body>
</html>