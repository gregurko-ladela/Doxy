<?php get_header();?>

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <?php get_sidebar(); ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">

    <!-- Main content -->
    <section class="content">
      <div id="main" class="col col-lg-12 clearfix" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

                    <header class="article-header">
                      <div class="titlewrap clearfix">
                        <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <p class="byline vcard">
                          by <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> -
                          <time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
                          <span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
                        </p>
                      </div>

                    </header> <?php // end article header ?>

                    <?php global $brew_options; ?>
                    <?php if( $brew_options['featured'] == '2' || ( $brew_options['featured'] == '4' && is_single() ) || ( $brew_options['featured'] == '3' && is_home() ) ) { ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
                    <?php if ( $image[1] < '750' && has_post_thumbnail() ) { ?>
                    <section class="featured-content featured-img featured-img-bg" style="background: url('<?php echo $image[0]; ?>')">
                      <?php } // end if
                      else { ?>
                      <section class="featured-content featured-img">
                        <?php if ( has_post_thumbnail() ) { ?>
                          <a class="featured-img" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'post-featured' ); ?>
                          </a>
                        <?php } // end if
                        else { ?>
                          <hr>
                        <?php } //end else?>
                        <?php } // end else ?>
                        <?php } // end if
                        else { ?>
                        <section class="featured-content featured-img">
                          <?php } // end else ?>

                        </section>

                        <section class="entry-content clearfix">
                          <?php the_content('dddd'); ?>
                          <?php wp_link_pages(
                            array(

                              'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
                              'after' => '</div>'
                            )
                          ); ?>
                        </section> <?php // end article section ?>

                        <footer class="article-footer clearfix">
                          <span class="tags pull-left"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="fa fa-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>
                          <span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span>
                        </footer> <?php // end article footer ?>

                        <?php // comments_template(); // uncomment if you want to use them ?>

                  </article> <?php // end article ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>


          <?php if (function_exists("emm_paginate")) { ?>
            <?php emm_paginate(); ?>
          <?php } else { ?>
            <nav class="wp-prev-next">
              <ul class="clearfix">
                <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
              </ul>
            </nav>
          <?php } ?>

        <?php else : ?>

          <article id="post-not-found" class="hentry clearfix">
            <header class="article-header">
              <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
            <section class="entry-content">
              <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>
            <footer class="article-footer">
              <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
            </footer>
          </article>


        <?php endif; ?>
      </div>
    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php get_footer(); ?>
