<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$asset = get_site_url() . '/assets/img/';

?>

</main>
<footer class="container-fluid bg-Black">
	<div class="row">
		<div class="col-12">
			<div class="container">

			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= get_site_url() . "/assets/js/main.js"; ?>"></script>
</body>

</html>