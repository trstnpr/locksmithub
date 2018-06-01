<div class="states-content">

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

    <section class="section-states">

    	<div class="container">

    		<div class="breadcrumb-wrap">
	    		<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="active">State</li>
				</ol>
			</div>
    		
    		<div class="row">

    			<div class="col-md-8">

    				<div class="section-content">

	    				<h1 class="section-title">Find a Locksmiths By <strong>State</strong></h1>

	    				<hr/>	    				

	    				<div class="states-wrap">
		    				<ul class="row">

		    					<?php

			    					foreach($states as $state) {

			    				?>

		    					<li class="col-md-4 col-sm-6">
		    						<a href="<?php echo base_url('state/'.strtolower($state->abbrev)); ?>">
		    							<?php echo $state->state; ?>
		    						</a>
		    					</li>

		    					<?php } ?>

		    				</ul>
		    			</div>

	    			</div>

    			</div>

    			<div class="col-md-4">

    				<div class="aside">

	    				<div class="map-wrap">
	    					<iframe frameborder="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $location; ?>&amp;aq=&amp;sspn=0.111915,0.295601&amp;ie=UTF8&amp;hq=&amp;&amp;t=m&amp;z=4&amp;output=embed" ></iframe>
	    				</div>

	    			</div>

    			</div>

    		</div>

    	</div>

    </section>

</div>