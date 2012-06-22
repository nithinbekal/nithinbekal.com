<?php
/**
 * @package WordPress
 * @subpackage wp_monochrome
 */

get_header(); ?>

    <section id="posts">
    
      <?php if (have_posts()) : ?>
      
        <?php while (have_posts()) : the_post(); ?>
        
          <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <header>
              <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
              <section class="post-meta">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d M, Y'); ?></time> |
                <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
              </section>
            </header>
             
            <section class="post-content">
              <?php the_content('Read the rest of this entry...'); ?>
              <?php wp_link_pages(); ?>
            </section>
            
            <footer class="post-meta">
              <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            </footer>
            
          </article>
    
          <?php endwhile; ?>
    
          <nav class="page-navigation">
            <div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
          </nav>

        <?php else: ?>
    
          <p>Uh-oh! There are no posts matching that description. Why don't you try searching for it?</p>
          
          <section id="search-404">
            <form id="searchform-404" method="get" action="<?php bloginfo('home'); ?>">
              <input type="text" name="s" id="s-404" value="" />
              <input type="submit" id="submit" value="Search" />
            </form>
          </section>
          
        <?php endif; ?>
        
      </section>
      
<?php get_footer(); ?>