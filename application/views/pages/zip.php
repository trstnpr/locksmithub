<div class="zip-content">

    <section class="section-searchform data-img" data-bg="<?php echo base_url('build/images/banner-bg-3.jpeg'); ?>" >

		<div class="overlay">

	    	<div class="container">

	    		<div class="row">

	    			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

	    				<div class="search-wrap">

	    					<h2 class="form-title txt-center">Search For Locksmiths Near You</h2>

		    				<?php include('parts/form-search.php'); ?>

					    </div>

		    		</div>

	    		</div>

	    	</div>

	    </div>

    </section>

    <section class="section-zip-wrap">

   		<div class="container">

   			<div class="breadcrumb-wrap">
	    		<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url('states'); ?>">State</a></li>
					<li><a href="<?php echo base_url('state/'.$city_data->state); ?>"><?php echo $state->state; ?></a></li>
					<li><a href="<?php echo base_url('city/'.$city_data->slug); ?>"><?php echo $city_data->name; ?></a></li>
					<li class="active"><?php echo $zip; ?></li>
				</ol>
			</div>

			<div class="title-block">

				<h1 class="page-title">
					Need Emergency Locksmith Near
					<br class="visible-xs"/>
					<?php echo $city_data->name.', '.strtoupper($city_data->state).' '.$zip; ?>?
					<br/>
					<a href="tel:<?php echo $city_data->phone; ?>"><strong>CALL <?php echo $city_data->phone; ?></strong></a>
				</h1>

			</div>

    		<div class="row">

    			<div class="col-md-8">

    				<div class="section-content">

    					<div class="service-image">
    						<img src="<?php echo base_url($banner_img); ?>" class="img-responsive" alt="<?php echo $state->state; ?>" title="<?php echo $state->state; ?>"/>
    						
    					</div>

			    		<div class="zip-promo-wrap">
			    			
			    			<div class="promo-item">

				    			<div class="row">

				    				<div class="col-md-2">
				    					<div class="promo-thumb">
				    						<img class="img-responsive" src="<?php echo base_url($ads_img); ?>" alt="" title="" />
				    					</div>
				    				</div>

				    				<div class="col-md-10">
										<div class="promo-details">
											<!-- <h3><i class="fa fa-thumbs-up"></i> For Locksmiths Near <strong><?php echo ucwords($location); ?></strong></h3>
											<hr/>
											<h2><a href="tel:<?php echo $city_data->phone; ?>">CALL <?php echo $city_data->phone; ?></a></h2> -->
											<h2>
												<i class="fa fa-thumbs-up hidden-xs"></i> Looking For Locksmiths Near <br class="visible-xs"/><strong><?php echo ucwords($location); ?></strong>
												<hr/>
												<a href="tel:<?php echo $city_data->phone; ?>">CALL <?php echo $city_data->phone; ?></a>
											</h2>
										</div>
				    				</div>

				    			</div>

				    		</div>

			    		</div>

			    		<div class="service-item-wrap">

				    		<?php
			    				
						    	foreach($yelp as $biz) {
						    		$image_url = ($biz->image_url == null) ? base_url('build/images/lock.png') : $biz->image_url;
			    			?>

					    		<div class="biz-item">

					    			<div class="row">

					    				<div class="col-md-2 col-sm-3">
					    					<div class="biz-thumb">
					    						<img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php echo $biz->name; ?>" title="<?php echo $biz->name; ?>" />
					    					</div>
					    				</div>

					    				<div class="col-md-6 col-sm-5">
											<div class="biz-info">
												<h3 class="biz-title"><?php echo $biz->name; ?></h3>
												<span class="line hidden-xs"></span>
												<ul class="list-default">
													<li><i class="fa fa-map-marker fa-list"></i> <?php echo $biz->location->address1.' '.$biz->location->city; ?></li>
													<li><i class="fa fa-folder fa-list"></i> <?php echo $biz->categories[0]->title; ?></li>
												</ul>
											</div>
					    				</div>

					    				<div class="col-md-4 col-sm-4">
					    					<div class="biz-info">
					    						<ul class="list-default">
					    							
					    							<li><i class="fa fa-location-arrow fa-list"></i> <?php echo $biz->location->zip_code.' '.$biz->location->city.', '.$biz->location->state; ?></li>
					    							<li class="phone"><i class="fa fa-phone fa-list"></i> <?php echo $biz->display_phone; ?></li>
					    							<li>
														<a href="https://www.yelp.com/" target="_blank">
															<img src="<?php echo base_url('build/images/yelp_300-o.png'); ?>" width="50px" alt="Yelp" title="Yelp" />
														</a>
													</li>
					    						</ul>
					    					</div>
					    				</div>

					    			</div>

					    		</div>

					    	<?php  } ?>

			    		</div>

			    	</div>

    			</div>

    			<div class="col-md-4">
    				
    				<div class="aside">
    					
    					<div class="map-wrap">
    					<?php
	    					if(empty($yelp)) {
	    				?>
	    					<iframe frameborder="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $location; ?>&amp;aq=&amp;sspn=0.111915,0.295601&amp;ie=UTF8&amp;hq=&amp;&amp;t=m&amp;z=6&amp;output=embed" ></iframe>
	    				<?php } else { ?>
	    					<div id="map-overlay"></div>
	    				<?php } ?>
	    				</div>

	    				<div class="promo-wrap">
	    					<h3>
	    						<i class="fa fa-thumbs-up hidden-xs"></i> If You Need 24 Hour Locksmith In<br/><strong><?php echo ucwords($location); ?></strong>
	    						<hr/>
								<a href="tel:<?php echo $city_data->phone; ?>">CALL <?php echo $city_data->phone; ?></a>
							</h3>
	    				</div>

	    				<div class="weather-wrap">
	    					<div class="weather-heading" style="padding:5px;">
								<strong><i class="fa fa-sun-o"></i> Local Weather</strong>
							</div>
	    					<div class="weather-widget" data-weather="<?php echo ucwords($location); ?>" ></div>
	    				</div>

	    				<?php include('parts/key-services.php'); ?>

    				</div>

    			</div>

    		</div>

    	</div>

    </section>

</div>