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
			<h1 class="page-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
			<?php get_template_part( 'breadcrumb' ); ?>
		</section>

		<!-- Main content -->
		<section class="content">

			<div id="main" class="col-md-8 clearfix" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="page-content entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>

						</section> <!-- end article section -->

						<footer>

							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

				<?php endwhile; ?>

				<?php else : ?>

					<article id="post-not-found">
						<header>
							<h1><?php _e("Not Found", "bonestheme"); ?></h1>
						</header>
						<section class="post_content">
							<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
						</section>
						<footer>
						</footer>
					</article>

				<?php endif; ?>

			</div> <!-- end #main -->

		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php get_footer(); ?>
