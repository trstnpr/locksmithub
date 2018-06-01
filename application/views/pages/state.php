<?php
	$state = $state_arr[0];
?>

<div class="state-content">

    <section class="section-header data-img" data-bg="<?php echo base_url('build/images//banner-bg-3.jpeg'); ?>">

    	<div class="overlay">

	    	<div class="container">

	    		<h1 class="page-title">Locksmiths in <?php echo $state->state; ?></h1>

	    	</div>

	    </div>

    </section>

    <section class="section-state-wrap">

    	<div class="container">

    		<div class="breadcrumb-wrap">
	    		<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url('states'); ?>">State</a></li>
					<li class="active"><?php echo $state->state; ?></li>
				</ol>
			</div>

    		<div class="row">

    			<div class="col-md-8">

    				<div class="section-content">

    					<div class="service-image">
    						
    						<img src="<?php echo base_url($banner_img); ?>" class="img-responsive" alt="<?php echo $state->state; ?>" title="<?php echo $state->state; ?>"/>
    						
    					</div>
			    		
			    		<div class="cities-wrap">

			    			<h2 class="section-title">Cities in State of <strong><?php echo $state->state; ?></strong></h2>

	    					<hr/>

	    					<div class="city-list">

	    					<?php if(!empty($cities)) { ?>

		    					<ul class="row">

		    						<?php foreach($cities as $city) { ?>
		    						<li class="col-md-4 col-sm-6">
		    							<a href="<?php echo base_url('city/'.$city->slug); ?>"><?php echo $city->name; ?></a>
		    						</li>
		    						<?php } ?>

		    					</ul>

		    				<?php } ?>

		    				</div>
				    		
			    		</div>

			    		<div class="zips-wrap">

			    			<h2 class="section-title">Zipcodes in <strong><?php echo $state->state; ?></strong></h2>

	    					<hr/>

	    					<div class="zip-list">

	    					<?php if(!empty($cities)) { ?>

	    						<p class="justify">

	    						<?php
	    							$zips = array();
	    							foreach($cities as $city) { $zips[] = $city->zip_code; }
	    							$zipcodes = implode($zips, ', ');
	    							$zipcode = explode(', ', $zipcodes);

	    							$zip_codes = array();
	    							foreach($zipcode as $zip_code) {
	    								$zip_codes[] = trim('<a href="'.base_url('zip/'.$zip_code).'" >'.$zip_code.'</a>, ', ', ');
	    							}

	    							$zip = trim(implode(', ',$zip_codes), ', ');

	    							echo $zip;

	    						?>
	    						
	    						</p>

	    					<?php } ?>

	    					</div>

	    					

			    		</div>

    				</div>

    			</div>

    			<div class="col-md-4">

    				<div class="aside">

	    				<div class="map-wrap">
	    					<iframe frameborder="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $state->state.', '.$state->abbrev; ?>&amp;aq=&amp;sspn=0.111915,0.295601&amp;ie=UTF8&amp;hq=&amp;&amp;t=m&amp;z=7&amp;output=embed" ></iframe>
	    				</div>

	    				<?php include('parts/weather.php'); ?>

	    				<div class="state-info-wrap">

			    			

			    		</div>


	    			</div>

    			</div>

    		</div>

    	</div>

    </section>

</div>