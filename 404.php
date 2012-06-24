<?php
/**
 * @package WordPress
 * @subpackage MyTheme
 */

get_header(); ?>

		<section id="posts">
			<p>Uh-oh, the page you are looking for couldn't be found! Would you like to search for the content instead?</p>

			<section id="search-404">
				<form id="searchform-404" method="get" action="<?php bloginfo('home'); ?>">
					<input type="text" name="s" id="s-404" value="" />
					<input type="submit" id="submit" value="Search" />
				</form>
			</section>

	</section>

<?php get_footer(); ?>