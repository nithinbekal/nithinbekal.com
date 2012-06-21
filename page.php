<?php
/**
 * @package WordPress
 * @subpackage MyTheme
 */

get_header(); ?>

<section id="posts">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?> id=post-"<?php the_ID(); ?>">
                <header>
                    <section class="post-meta-top">
                        <time><?php the_date(); ?></time><br/>
                        Posted by <?php the_author_posts_link(); ?><br/>
                        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                    </section>
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                </header>

                <section class="post-content">
                            <?php the_content('Read the rest of this entry...'); ?>
                            <?php wp_link_pages(); ?>
                </section>
                <footer class="post-footer">
                    <section class="tags-categories">
                        <p><b>Categories:</b> <?php the_category(', ') ?></p>
                        <p><?php the_tags('<b>Tags:</b> ', ', ', '<br />'); ?></a></p>
                    </section>
                    <section id="comments-template">
                        <?php comments_template(); ?>
                    </section>
                </footer>
            </article>

        <?php endwhile; ?>

        <nav class="prev-next-links">
            <ul>
                <li class="prev-link"><?php previous_post('&laquo; %', '', 'yes'); ?></li>
                <li class="next-link"><?php next_post('% &raquo; ', '', 'yes'); ?></li>
            </ul>
        </nav>

    <?php else: ?>

        <p>Uh-oh! We couldn't find any posts matching that description in our database.
            Why do't you try searching for it?
        </p>

        <section id="search-404">
            <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
                <input type="text" name="s" id="s-404" value="" />
                <input type="submit" id="submit-404" value="Search" />
            </form>
        </section>

        <p>Or, you might want to read some of our most commented articles:</p>

        <section class="popular-posts">
            <ul><?php echo popularPosts(5); ?></ul>
        </section>

    <?php endif; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>