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
	
			?>
		<div class='archContainer'>
				
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Cloud Computing
								</h4>
								<div class="nh1">
								18.10.2012 Warszawa


								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								25.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Data Center – nowoczesne centrum danych
								</h4>
								<div class="nh2">
								25.10.2012 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								28.11.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								BPM – efektywne zarządzanie…
								</h4>
								<div class="nh1">
								28.11.2012 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								22.01.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Edu IT – nowoczesne technologie dla szkół
								</h4>
								<div class="nh2">
								22.01.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								24.01.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Trendy IT 2013
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								28.02.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Document Workflow
								</h4>
								<div class="nh2">
								28.02.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								20.03.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Backup & Storage Systems
								</h4>
								<div class="nh1">
								20.03.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								21.03.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								GIS – innowacyjne i nowoczesne…
								</h4>
								<div class="nh2">
								21.03.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								16.05.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								ERP – skuteczne zarządzanie zasobami firmy
								</h4>
								<div class="nh1">
								16.05.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								20.06.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Business Intelligence Trends
								</h4>
								<div class="nh2">
								20.06.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								27.06.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								EDU IT Trends


								</h4>
								<div class="nh1">
								27.06.2013 Warszawa


								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								03.07.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Banking Tech&Security
								</h4>
								<div class="nh2">
								03.07.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								28.08.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								IT Logistic Tech
								</h4>
								<div class="nh1">
								28.08.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								12.09.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Workflow & Document Management Trends
								</h4>
								<div class="nh2">
								12.09.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								17.10.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Knowledge Management Solutions
								</h4>
								<div class="nh1">
								17.10.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								24.10.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Data Center Trends
								</h4>
								<div class="nh2">
								24.10.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								27.11.2013
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								BPM Trends
								</h4>
								<div class="nh1">
								27.11.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								28.11.2013
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								IT Security Trends
								</h4>
								<div class="nh2">
								28.11.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								27.02.2014


								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Workflow & Document Management Trends
								</h4>
								<div class="nh1">
								27.02.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								5.12.2013


								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Digital Signage Summit
								</h4>
								<div class="nh2">
								5.12.2013 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								20.03.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Cloud Computing Trends
								</h4>
								<div class="nh1">
								20.03.2014 Warszawa 
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								20.03.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Security Connected
								</h4>
								<div class="nh2">
								20.03.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								29.01.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Mobile Summit
								</h4>
								<div class="nh1">
								29.01.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								26.03.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Backup&Storage Systems Summit
								</h4>
								<div class="nh2">
								26.03.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								16.04.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Infratech – infrastruktura fizyczna
dla serwerowni i centrów danych
								</h4>
								<div class="nh1">
								16.04.2014 Warszawa 
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								14.05.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								ERP Trends
								</h4>
								<div class="nh1">
								14.05.2014 Warszawa 
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								28.05.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								IT Logistic Tech
								</h4>
								<div class="nh2">
								28.05.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								28.05.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								E-commerce Summit
								</h4>
								<div class="nh1">
								28.05.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								10-11.06.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Targi IT Future Expo
								</h4>
								<div class="nh2">
								10-11.06.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								24.06.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								BI Trends
								</h4>
								<div class="nh1">
								24.06.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								23.09.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Integrated IT Systems
								</h4>
								<div class="nh2">
								23.09.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								24.09.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Workflow Trends
								</h4>
								<div class="nh1">
								24.09.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								25.09.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Retail Congress
								</h4>
								<div class="nh2">
								25.09.2014 Warszawa 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								09.10.2014


								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Network Trends


								</h4>
								<div class="nh1">
								09.10.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								29.10.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Edu IT Trends
								</h4>
								<div class="nh2">
								29.10.2014 Warszawa 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								29.10.2014
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Knowledge Management Solutions
								</h4>
								<div class="nh1">
								29.10.2014 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								30.10.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Data Center Trends
								</h4>
								<div class="nh2">
								30.10.2014 Warszawa 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								26.11.2014	
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Big Data Summit
								</h4>
								<div class="nh1">
								26.11.2014, Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								27.11.2014
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								HR Solutions Trends
								</h4>
								<div class="nh2">
								27.11.2014, Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								14.01.2015
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								BPM Trends
								</h4>
								<div class="nh1">
								14.01.2015, Warszawa 
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								15.01.2015
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Banking Tech&Security
								</h4>
								<div class="nh2">
								15.01.2015, Warszawa 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								24.02.2015
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								HR Solutions Trends
								</h4>
								<div class="nh1">
								24.02.2015, Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
								25.02.2015
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
								<h4 class="h42">
								Workflow & Document Management Trends
								</h4>
								<div class="nh2">
								25.02.2015, Warszawa
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
								19.03.2015
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
								Digital Signage Summit
								</h4>
								<div class="nh1">
								19.03.2015, Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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
				<div class="Row1">
					<div class='l1'>
						<div class='li1'>
							
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk1">
										18.10.2012
								</div>
							
						</div>
						<div class='ln1'>
							<div class='lo1'>
								<h4 class="h41">
									Cloud Computing
								</h4>
								<div class="nh1">
									18.10.2021 Warszawa
								</div>
							</div>
						</div>
					</div>
					<div class='l2'>
						<div class='li2'>
						
								<img src="http://itdb.biz/wp-content/uploads/2022/01/icon1.jpg">
								<div class="lk2">
										18.10.2012
								</div>
							
						</div>
						<div class='ln2'>
							<div class='lo2'>
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