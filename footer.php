	</div><!--#eof main -->
	<footer>
		<div class="sosumi">
			(c) Copyright 2014 <a href="<?php bloginfo( 'url' ); ?>">Glowing Robot</a>. All Rights Reserved. 
		</div>
		<div class="sharing">
			<span>Stay Connected</span>
			<a href="" class="facebook"></a>
			<a href="" class="twitter"></a>
			<a href="" class="pinterest"></a>
			<a href="" class="instagram"></a>
		</div>
	</footer>
</div><!--#eof container -->
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/dist/main.min.js"></script>

</body>
</html>