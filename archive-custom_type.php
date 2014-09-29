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
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>
			<!-- UNCOMMENT FOR BREADCRUMBS
            <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?> -->
		</section>

		<!-- Main content -->
		<section class="content">

			<div id="main" class="col-md-8 clearfix" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

						<header class="article-header">

							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<p class="byline vcard"><?php
								printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link());
								?></p>

						</header> <?php // end article header ?>

						<section class="entry-content clearfix">

							<?php the_excerpt(); ?>

						</section> <?php // end article section ?>

						<footer class="article-footer">

						</footer> <?php // end article footer ?>

					</article> <?php // end article ?>

				<?php endwhile; ?>

					<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
						<?php bones_page_navi(); ?>
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
							<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</div> <?php // end #main ?>

		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php get_footer(); ?>
