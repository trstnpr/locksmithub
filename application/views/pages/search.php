<div class="searchresult-content">

    <section class="section-searchform data-img" data-bg="<?php echo base_url('build/images/banner-bg-3.jpeg'); ?>">

    	<div class="overlay">

	    	<div class="container">

	    		<div class="row">

	    			<div class="col-md-8 col-md-offset-2">

	    				<div class="search-wrap">

		    				<h2 class="form-title txt-center">Search For Locksmith Near You</h2>

			    			<?php include('parts/form-search.php'); ?>

					    </div>

		    		</div>

	    		</div>

	    	</div>

	    </div>

    </section>

    <section class="section-searchresults">

    	<div class="container">

    		<div class="row">

    			<div class="col-md-8">

    				<div class="section-content">
    					
		    			<h1 class="section-title">Search Results for <strong><?php echo ucwords($location); ?></strong></h1>

			    		<hr/>

			    		<?php if($search_data != NULL) { ?>

				    		<div class="result-wrap">

				    		<?php foreach($search_data as $result) {
				    			$rand_int = array_rand(range(1,12), 1);
				    			$ads_img = 'build/images/thumb-ad/'.$rand_int.'.jpg';
				    		?>

				    			<div class="result-item">

					    			<div class="row">

					    				<div class="col-md-2">
					    					<div class="result-thumb">
					    						<img class="img-responsive" src="<?php echo base_url($ads_img); ?>" alt="" title="" />
					    					</div>
					    				</div>

					    				<div class="col-md-10">
											<div class="result-details">
												<h3><i class="fa fa-thumbs-up"></i> For Locksmiths Near <?php echo $result->name.', '.strtoupper($result->state); ?></strong></h3>
												<hr/>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<a href="tel:<?php echo $result->phone; ?>" class="btn btn-danger btn-block cta-city"><i class="fa fa-mobile"></i> CALL <?php echo $result->phone; ?></a>
													</div>
													<div class="col-md-6 col-sm-6">
														<a href="<?php echo base_url('city/'.$result->slug); ?>" class="btn btn-block btn-warning  cta-city"><i class="fa fa-sign-in"></i> GO TO THIS PAGE</a>
													</div>
												</div>
											</div>
					    				</div>

					    			</div>

					    		</div>

					    	<?php } ?>

				    		</div>

			    		<?php } else { ?>

			    			<h3 class="txt-center">No Results Found.</h3>

			    		<?php } ?>

    				</div>

    			</div>

    			<div class="col-md-4">

    				<div class="aside">   				

	    				<div class="map-wrap">
	    					<div id="search-map-overlay"></div>
	    				</div>

	    			</div>

    			</div>

    		</div>

    	</div>

    </section>

</div>