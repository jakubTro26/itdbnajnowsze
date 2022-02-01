<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Consultix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header c">
		<?php 
		$rt_blog_style = consultix_global_var( 'blog-style','',false );
		if ( ( '' == $rt_blog_style ) && get_post() && !preg_match( '/vc_row/', get_post()->post_content ) ) : ?>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    <?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php


		if('11484'!=$post->ID){
			
				
		
			the_content();

			
		}
		else{
			the_content();
			?>
		<div class='archContainer'>
				
				<div class="Row1">
					<div class='l1'>
						<div clas='li1'>
							<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
							<div class="ln1">
									18.10.2012
							</div>
						</div>
						<div class='ln1'>
							<h4 class="h41">
								Cloud Computing
							</h4>
							<div class="nh1">
								18.10.2021 Warszawa
							</div>
						</div>
					</div>
					<div class='l2'>
						<div clas='li2'>
							<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
							<div class="ln2">
									18.10.2012
							</div>
						</div>
						<div class='ln2'>
							<h4 class="h42">
								Cloud Computing
							</h4>
							<div class="nh2">
								18.10.2021 Warszawa
							</div>
						</div>
					</div>
				</div>
			
																	
				
				
			</div>

	<?php
		}

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'consultix' ),
					'after'  => '</div>',
				)
			);
		?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'consultix' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->