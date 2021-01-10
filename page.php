<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
if ( is_front_page() ) :
	 get_template_part( 'global-templates/hero', 'none' );
endif;
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
			<img src="<?php echo get_template_directory_uri(); ?>/images/columns.jpg" alt="Greek columns in blue sky"></img>
				<h2>Menu</h2>
				<div class="menu">
					<a href="#lunch" class="menu-heading">Lunch</a>
					<a href="#starters" class="menu-heading">Starters</a>
					<a href="#soups_salads"class="menu-heading">Soups and Salads</a>
					<a href="#sandwiches" class="menu-heading">Sandwiches</a>
					<a href="#pizza" class="menu-heading">Pizza</a>
					<a href="#pasta" class="menu-heading">Pasta</a>
					<a href="#entrees" class="menu-heading">Entrees</a>
				
					
					<div class="container">
						<h3 class="menu-body" id="lunch">Lunch</h3>
						<!-- image lunch special-->
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>

					<div class="container">
						<h3 class="menu-body" id="starters">Starters</h3>
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>
	
					<div class="container">
						<h3 class="menu-body" id="soups_salads">Soups and Salads</h3>
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>

					<div class="container">
						<h3 class="menu-body" id="sandwiches">Sandwiches</h3>
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>

					<div class="container">
						<h3 class="menu-body" id="pizza">Pizza</h3>
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>

					<div class="container">
						<h3 class="menu-body" id="pasta">Pasta</h3>
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>

					<div class="container">
						<h3 class="menu-body" id="entrees">Entrees</h3>
						<ul>
							<div class="row">
								<div class="col">
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
								</div>
								<div class="col">
									<li>Nulla et.</li>
									<p>Proin nisi sem, efficitur quis nunc vel.</p>
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis.<div>-Nunc fermentum eget massa vel tempus.</div></p> 
									<li>Lorem ipsum</li>
									<p>Praesent quis augue felis. Nunc fermentum eget massa vel tempus. Cras aliquam a tellus quis.</p>
								</div>
							</div>
						</ul>
					</div>
					
				</div> <!-- end menu -->

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
