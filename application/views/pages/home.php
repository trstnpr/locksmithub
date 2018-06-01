<div class="app-content">

    <section class="section-banner parallax" data-parallax="scroll" data-image-src="<?php echo base_url('build/images/banner-bg-1.jpg'); ?>">
      
		<div class="overlay">

			<div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

						<div class="homesearch-wrap">

							<h1 class="form-title">Search For Locksmiths Near You</h1>

							<div class="search-panel">

								<?php include('parts/form-search.php'); ?>

							</div>

						</div>

					</div>

				</div>  

			</div>

		</div>

	</section>

	<?php if(key_services() != 0) { ?>
	<section class="section-offers">

		<div class="container">
			
			<div class="section-title">
				<h2>24/7 Locksmith Providers</h2>
				<span class="line center-block"></span>
		    </div>

		    <div class="offer-wrap">
		    	
		    	<div class="slick-responsive slider-container">
					
					<?php
						$x = 0;
						foreach(key_services() as $key) {
							$x++;
							$data_thumb = base_url('build/images/random/'.$x.'.jpg');
					?>

		    		<div class="item">

		    			<div class="item-block data-img" data-bg="<?php echo $data_thumb; ?>">
		    				
		    				<div class="overlay">
		    					
		    					<div class="content">
		    						
		    						<h3><?php echo $key->title; ?></h3>

		    						<br/>

		    						<a href="<?php echo base_url($key->slug); ?>" class="btn btn-cta">Read More</a>

		    					</div>	

		    				</div>

		    			</div>

		    		</div>

		    		<?php } ?>

				</div>

		    </div>

		</div>

	</section>
	<?php } ?>

    <section class="section-featsvc">

		<div class="container">
	    
		    <div class="section-title">
		      <h2>Rockstar Providers</h2>
		      <span class="line center-block"></span>
		    </div>

			<div class="featsvc-wrap">
				<?php if($yelp_count >= 4) { ?>
				<div class="row">

					<?php
				    	foreach($yelp as $result) {
				    		$image_url = ($result->image_url == null) ? base_url('build/images/business.png') : $result->image_url;
				    ?>
				
					<div class="col-md-3 col-sm-6">

						<div class="yelp-svc-item">
							<div class="svc-thumbnail hidden-xs">
								
								<img src="<?php echo $image_url; ?>" alt="<?php echo $result->name; ?>" title="<?php echo $result->name; ?>" />

							</div>
							<div class="svc-info">
								<div class="svc-details">
									<h3 class="svc-title"><?php echo $result->name; ?></h3>
									<ul class="list-default">
										<li class="star"><?php echo star($result->rating); ?></li>
										<li><?php echo $result->categories[0]->title; ?></li>
										<li><?php echo $result->location->city.', '.$result->location->zip_code; ?></li>
									</ul>

								</div>
							</div>
						</div>

					</div>

					<?php } ?>

			    </div>
			    <?php }
			    	if($business_count >= 4) {
			    ?>
				<div class="row">
			    <?php foreach($local_business as $bus) { ?>
			    	<div class="col-md-3 col-sm-6">
						<div class="svc-item">
							<div class="svc-thumbnail hidden-xs">
								
								<img src="<?php echo base_url($bus->photo); ?>" alt="<?php echo $bus->name; ?>" title="<?php echo $bus->name; ?>" />
								
							</div>
							<div class="svc-info">
								<div class="svc-details">
									<h3 class="svc-title"><?php echo $bus->name; ?></h3>
									<ul class="list-default">
										<li>Keys &amp; Locksmiths</li>
										<li><?php echo $bus->city; ?>, <?php echo $bus->zip; ?></li>

									</ul>
									<a href="tel:<?php echo $bus->contact; ?>" class="btn btn-danger btn-sm"><?php echo $bus->contact; ?></a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

				</div>
				<?php } ?>

			</div>

		</div>

	</section>

	<section class="section-about parallax" data-parallax="scroll" data-image-src="<?php echo base_url('build/images/banner-bg-5.jpeg'); ?>">

		<div class="overlay">
			
			<div class="container">

				<div class="section-title">
					<h2>Welcome to <?php echo the_config('site_name'); ?></h2>
					<span class="line center-block"></span>
			    </div>
				
				<div class="about-wrap">

					<div class="row">

						<div class="col-md-10 col-md-offset-1">

							<div class="row">
								
								<div class="col-md-6">
									
									<div class="content-left">
										<p>
											Welcome to LocksmitHub - where competent locksmith contractors are available in every state in the United States. We are your one-stop shop for all your locksmith and locksmith services needs. We connect you to the nearest local 24 hour available locksmith expert for free! All you have to do is type in your area and a click of the search button. We'll provide you list of locksmith businesses around your area with complete contact details.
										</p>

										<p>
											Whatever it is you need to be done with your locks, keys or security systems, LocksmitHub has the most professional locksmiths to save your agitating day. What makes our locksmith directory the best among the other is that we cover all states in the US. Found yourself frequently needing locksmith assistance? Bookmark our website now!
										</p>
									</div>

								</div>

								<div class="col-md-5">
									
									<div class="content-right">
										
										<h3>Information</h3>
										<br/>
										<ul class="fa-ul">
											<li><i class="fa fa-li fa-map-marker"></i> <?php echo the_config('full_address'); ?></li>
											<li><i class="fa fa-li fa-paper-plane"></i> <?php echo the_config('admin_email'); ?></li>
											<li><i class="fa fa-li fa-phone"></i> <?php echo the_config('phone_number'); ?></li>
										</ul>
										<br/>
										<h3>Follow Us</h3>
										<br/>
										<ul class="social-list list-inline">
				
											<li><a href="<?php echo the_config('facebook_link'); ?>"><i class="fa fa-facebook text-muted fa-fw fa-2x"></i></a></li>

											<li><a href="<?php echo the_config('twitter_link'); ?>"><i class="fa fa-twitter text-muted fa-fw fa-2x"></i></a></li>

											<li><a href="<?php echo the_config('googleplus_link'); ?>"><i class="fa fa-google-plus text-muted fa-fw fa-2x"></i></a></li>

										</ul>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<?php if($blogs != 0) { ?>

	<section class="section-blog">
		
		<div class="container">
	    
		    <div class="section-title">
		      <h2>Blog</h2>
		      <span class="line center-block"></span>
		    </div>

		    <div class="blog-wrap">

		    	<div class="row">

		    	<?php foreach($blogs as $blog) { ?>
		    		
		    		<div class="col-md-6">
		    			
		    			<div class="blog-item">
		    				
		    				<div class="row">

		    					<div class="col-md-3 hidden-sm hidden-xs">

		    						<?php
		    							$blog_thumb = ($blog->featured_image != NULL) ? base_url($blog->featured_image) : base_url('build/images/lock.png');
		    						?>
		    						
		    						<div class="blog-thumb">
										<a href="#" data-lity>
											<img src="<?php echo $blog_thumb; ?>" class="img-responsive" alt="<?php echo $blog->title; ?>" title="<?php echo $blog->title; ?>">
										</a>
									</div>

		    					</div>

		    					<div class="col-md-9">
		    						
		    						<div class="blog-details">
		    							<h3 class="blog-title" title="<?php echo $blog->title; ?>">
		    								<a href="<?php echo base_url($blog->slug); ?>">
		    									<?php echo truncate($blog->title, 35); ?>
		    								</a>	
		    							</h3>

		    							<small class="blog-date">
		    								Posted on <?php echo date_proper($blog->created_at); ?> by <?php echo $blog->author; ?>
		    							</small>

		    							<p class="blog-excerpt"><?php echo truncate($blog->excerpt, 150); ?></p>

		    							<div class="blog-category">
    							
			  								<?php
							            		if(unserialize($blog->category) != NULL) {
							            			$data = array();
								            		foreach(unserialize($blog->category) as $category) {
								            			$data[] = '<span class="label label-success">'.$category.'</span> ';
								            		}
								            		$category = trim(join(' ', $data), ' ');
								            		echo $category;
								            	}
							            	?>

			    						</div>

		    						</div>

		    					</div>

		    				</div>

		    			</div>

		    		</div>

		    	<?php } ?>

		    	</div>

		    </div>

		</div>

	</section>

	<?php } ?>

	<section class="section-majorcity parallax" id="section_majorcity" data-parallax="scroll" data-image-src="<?php echo base_url('build/images/banner-bg-4.jpeg'); ?>">

		<div class="overlay">

			<div class="container">

				<div class="section-title">
			    	<h2>Major Cities</h2>
			    	<span class="line center-block"></span>
			    </div>

			    <?php if ($popular_city['result'] == 'success') { ?>
						
				<div class="popcity-wrap">

				    <ul class="row">

				    <?php foreach ($popular_city['data'] as $popcity) { ?>

				    	<li class="col-md-2 col-sm-4 col-xs-6"><a href="<?php echo base_url('city/'.$popcity->slug); ?>"><?php echo $popcity->name; ?></a></li>

				    <?php } ?>
				    
				    </ul>

				</div>

				<?php } else { echo '<p>'.$popular_city['message'].'</p>'; } ?>

			</div>

		</div>

	</section>

	<section class="section-tagline">

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-10 col-md-offset-1">

					<div class="tagline">
					
						<h2 class="title">NEED AN IMMEDIATE LOCKSMITH SERVICE?</h2>
						<h3 class="subtitle">Let us connect you with the most competent locksmith companies today!</h3>

					</div>

					<div class="cta">

						<a href="<?php echo base_url('contact-us'); ?>" class="btn btn-cta">Contact Us</a>

						<a href="tel:<?php echo the_config('phone_number'); ?>" class="btn btn-cta">Call Toll-Free</a>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section class="section-disclaimer">

		<!-- <div class="overlay data-img" data-bg="<?php //echo base_url('build/images/grid.png'); ?>"> -->
		<div class="overlay">
		
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-4 hidden-sm hidden-xs">
						<div class="thumb-icon">
							<img src="<?php echo base_url('build/images/disclaimer.png'); ?>" class="img-responsive center-block" alt="Disclaimer" title="Disclaimer" width="250px" />
						</div>
					</div>

					<div class="col-md-8">

						<div class="section-title">
							<h2>NOTE</h2>
							<span class="line"></span>
					    </div>

						<div class="section-content">
							<p>
								Please bear in mind that we are a directory website that lists locksmith companies near your area. We want to make your search get better and easier by just entering your location, city or zipcode to the search bar and provide you a list of trusted locksmith service providers upon clicking the search button.
							</p>
							<p>
								Please also note that we do not directly dispatch technicians, these companies on our website are independent locksmith contractors. In line with this, we cannot give you an exact estimate of the service you require as the costs can vary.
							</p>
							<p>
								It is our goal to connect you with the nearest locksmith service provider in your area. It is the responsibility of the user to verify the technician's credibility. Please make sure to get official receipt along with the company or the technician's information.
							</p>
							<p>
								By using our website, you agree to our terms. And if any issue occurred during any service, please call us and we'll have you assisted by our representatives properly.
							</p>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	
</div>