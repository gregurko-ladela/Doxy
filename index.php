<?php get_header(); ?>
<div>

<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="/wp-content/themes/Doxy/library/images/avatar3.png" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>Hello, Jane</p>

				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active">
				<a href="index.html">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="pages/widgets.html">
					<i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-bar-chart-o"></i>
					<span>Charts</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
					<li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
					<li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-laptop"></i>
					<span>UI Elements</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
					<li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
					<li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
					<li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
					<li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-edit"></i> <span>Forms</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
					<li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
					<li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-table"></i> <span>Tables</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
					<li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/calendar.html">
					<i class="fa fa-calendar"></i> <span>Calendar</span>
					<small class="badge pull-right bg-red">3</small>
				</a>
			</li>
			<li>
				<a href="pages/mailbox.html">
					<i class="fa fa-envelope"></i> <span>Mailbox</span>
					<small class="badge pull-right bg-yellow">12</small>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-folder"></i> <span>Examples</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
					<li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
					<li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
					<li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
					<li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
					<li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
					<li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

    <div class="container">

			<div id="content" class="row clearfix">

						<div id="main" class="col-md-8 clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

						</div> <?php // end #main ?>


						<?php get_sidebar(); ?>


			</div> <?php // end #content ?>

    </div> <!-- end ./container -->

</div>
<?php get_footer(); ?>
