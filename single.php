<?php
/**
 * @package WordPress
 * @subpackage nithinbekal
 */

get_header(); ?>


    <section id="posts">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      
      <article <?php post_class(); ?> id=post-"<?php the_ID(); ?>">
      
        <header>
          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <section class="post-meta">
            <time><?php the_date(); ?></time> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
          </section>
        </header>
        
        <section class="post-content">
          <?php the_content('...'); ?>
          <?php wp_link_pages(); ?>
        </section>
        
        <footer class="post-footer">
          <section id="comments-template"><?php comments_template(); ?></section>
        </footer>
      
      </article>

      <?php endwhile; ?>

      <nav class="page-navigation">
        <div class="left"><?php previous_post_link(); ?></div>
        <div class="right"><?php next_post_link(); ?></div>
      </nav>

    <?php else: ?>

      <p>Uh-oh! I couldn't find any pages matching that description in the database. Why don't you try searching for it?</p>

        <section id="search-404">
          <form id="searchform-404" method="get" action="<?php bloginfo('home'); ?>">
            <input type="text" name="s" id="s-404" value="" />
            <input type="submit" id="submit" value="Search" />
          </form>
        </section>

    <?php endif; ?>

</section>

<?php get_footer(); ?>