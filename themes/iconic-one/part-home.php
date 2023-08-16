<div id="page-home">

<div id="boxes2" class="flex f1 center">
	<a class="box box-attend" href="/retreats/">
	    <div class="box-bg"><img src="/wp-content/uploads/bg-box.jpg"></div>
	    <div class="box-over1">
    		<div class="box-ico">
    		    <img class="box-ico-off" src="/wp-content/uploads/ico-attend.svg">
    		    <img class="box-ico-on" src="/wp-content/uploads/ico-attend-b.svg">
    		</div>
    		<h3>Attend a Retreat</h3>
    	</div>
		<div class="box-over2">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
    </a>
	<a class="box box-donate" href="/donate/">
	    <div class="box-bg"><img src="/wp-content/uploads/bg-box.jpg"></div>
	    <div class="box-over1">
    		<div class="box-ico">
    		    <img class="box-ico-off" src="/wp-content/uploads/ico-donate.svg">
    		    <img class="box-ico-on" src="/wp-content/uploads/ico-donate-b.svg">
    		</div>
    		<h3>Donate</h3>
    	</div>
		<div class="box-over2">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
    </a>
	<a class="box box-vol" href="/volunteer/">
	    <div class="box-bg"><img src="/wp-content/uploads/bg-box.jpg"></div>
	    <div class="box-over1">
    		<div class="box-ico">
    		    <img class="box-ico-off" src="/wp-content/uploads/ico-volunteer.svg">
    		    <img class="box-ico-on" src="/wp-content/uploads/ico-volunteer-b.svg">
    		</div>
    		<h3>Volunteer</h3>
    	</div>
		<div class="box-over2">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
    </a>
	<a class="box box-email" href="#">
	    <div class="box-bg"><img src="/wp-content/uploads/bg-box.jpg"></div>
	    <div class="box-over1">
    		<div class="box-ico">
    		    <img class="box-ico-off" src="/wp-content/uploads/ico-email.svg">
    		    <img class="box-ico-on" src="/wp-content/uploads/ico-email-b.svg">
    		</div>
    		<h3>Email Signup</h3>
    	</div>
		<div class="box-over2">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
    </a>
</div>

<!--
	<div class="section boxes-section">
		<div id="boxes" class="flex f1 center">
		  	<div class="b-box b-box-1"><div class="bb-inner bb-inner1"><div class="bb-inner2">
		    	<a href="#"><div class="b-ico b-ico1"></div></a>
		    	<a href="#"><h3>Donate</h3></a>
			    <div class="b-txt">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
			  </div></div></div>
			  <div class="b-box b-box-2"><div class="bb-inner"><div class="bb-inner2">
			    <a href="#"><div class="b-ico b-ico2"></div></a>
		    	<a href="#"><h3>Volunteer</h3></a>
			    <div class="b-txt">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
			  </div></div></div>
			  <div class="b-box b-box-3"><div class="bb-inner"><div class="bb-inner2">
			    <a href="#"><div class="b-ico b-ico3"></div></a>
		    	<a href="#"><h3>Attend a Retreat</h3></a>
			    <div class="b-txt">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
			  </div></div></div>
			  <div class="b-box b-box-4"><div class="bb-inner"><div class="bb-inner2">
			    <a href="#"><div class="b-ico b-ico4"></div></a>
		    	<a href="#"><h3>Email Signup</h3></a>			    	
			    <div class="b-txt">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
		  	</div></div></div>
		</div>
	</div>
-->

	<div class="section camp-section">
		<div class="limit">
			<div class="image-wrap"><img src="/wp-content/uploads/camp2.png"></div>
			<p>The Patriot Resilient Leader Institute runs Camp Resilience Retreats to help service members, veterans, first responders and their loved ones recover and maintain their physical, psychological and emotional well-being. These free 3-4 day retreats combine peer-to-peer counseling, life skills workshops and outdoor experiential learning. Camp Resilience strives to provide attendees with the tools to develop self-improvement goals and sustained ties to their community. The retreats stress the importance of camaraderie and wellness in fostering resilience.
			Learn more about our programs and scheduled sessions.</p>
		</div>
	</div>
	<div class="section retreats-section">
		<div class="limit">
			<div class="title">
				<h2>Retreats</h2>
				<a href="/retreats/">VIEW ALL RETREATS</a>
			</div>
			<div class="posts-block">

				<?php 
					$args_s = array(
						'numberposts'   => 3, 
						'post_type' 	=> 'retreats'
					);
					$galy_s = new WP_Query( $args_s );
					if( $galy_s->have_posts()):
					while($galy_s->have_posts()): $galy_s->the_post();
				?>
				<div class="each-block-wrap">
					<div class="each-block">
						<div class="date-part">

							<div class="date"><span class="d-date"><?php echo date("M j", strtotime(get_field('retreat_date')));?></span>
								<br><?php echo get_field('retreat_time');?></div>
							<span class="instructor"><?php echo get_field('retreat_instructor');?></span>
						</div>
						<div class="contents">
							<div class="limit-content">
								<h3><a href="<?php echo get_permalink(); ?>" class="learn_more"><?php echo get_the_title(); ?></a></h3>
								<p><?php echo get_the_content(); ?></p>
							</div>
							<div class="button-area">
								<a href="<?php echo get_field('retreat_link');?>" class="register primary">REGISTER</a>
								<a href="<?php echo get_permalink(); ?>" class="learn_more">LEARN MORE</a>
							</div>
							
						</div>
					</div>
					<div class="featured-image">
						<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Featured Image"></a>
					</div>
				</div>

				<?php endwhile; endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div class="section support-section">
		<div class="text-block-wrap">
			<h2>We Support...</h2>
			<div class="text-block" style="">
				<h3 class="text1" >MILITARY VETERANS</h3>
				<h3 class="text2" >FIRST RESPONDERS</h3>
				<h3 class="text3" >AND THEIR FAMILIES</h3>
			</div>
		</div>
		
	</div>
</div>