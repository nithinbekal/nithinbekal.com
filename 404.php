<?php
/**
 * @package WordPress
 * @subpackage MyTheme
 */

get_header(); ?>

		<section id="posts">
			<p>Uh-oh! We couldn't find any posts matching that description in our database.
            Why do't you try searching for it?</p>

			<section id="search-404">
				<form id="searchform-404" method="get" action="<?php bloginfo('home'); ?>">
					<input type="text" name="s" id="s-404" value="" />
					<input type="submit" id="submit" value="Search" />
				</form>
			</section>

			<p>Or, you might want to read some of our most commented articles:</p>

			<section class="popular-posts">
				<ul><?php echo popularPosts(5); ?></ul>
			</section>

	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>