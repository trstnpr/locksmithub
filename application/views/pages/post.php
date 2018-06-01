<div class="page-content">

	<section class="section-header data-img" data-bg="<?php echo base_url('build/images//banner-bg-3.jpeg'); ?>">

    	<div class="overlay">

	    	<div class="container">

	    		<h1 class="page-title"><?php echo $page->title; ?></h1>

	    	</div>

	    </div>

    </section>

    <section class="section-page">

    	<div class="container">

    		<div class="breadcrumb-wrap">
	    		<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="active"><?php echo $page->title; ?></li>
				</ol>
			</div>
    		
    		<div class="row">

    			<div class="col-md-8">

    				<div class="section-content">

	    				<h2 class="section-title"><?php echo $page->title; ?></h2>

	    				<p class="page-info">Posted on <?php echo date_proper($page->created_at); ?> by <?php echo $page->author; ?></p>

	    				<hr/>	

	    				<div class="content-wrap">
	    				
	    					<?php if($page->featured_image != NULL) { ?>
	    					<div class="page-thumb">
	    						<img src="<?php echo base_url($page->featured_image); ?>" class="img-responsive" alt="<?php echo $page->title; ?>" title="<?php echo $page->title; ?>" />
	    					</div>
		    				<?php } ?>


	    					<?php echo $page->content; ?>

		    			</div>

	    			</div>

    			</div>


    			<div class="col-md-4">

    				<div class="aside">

	    				<?php if($blogs != 0) { ?>
	    				<div class="blogs-wrap">
	    					<div class="header">
	    						<h4>Recent Posts</h4>
	    					</div>
	    					<div class="content">
	    					<?php foreach($blogs as $blog) { ?>

	    						<div class="blog-item">
	    							<small><?php echo date_proper($blog->created_at); ?></small>
	    							<p class="blog-title"><?php echo $blog->title; ?><p>
	    							<a class="btn btn-xs btn-success" href="<?php echo base_url($blog->slug); ?>">Read more</a>
	    						</div>

	    					<?php } ?>
	    					</div>
	    				</div>
	    				<?php } ?>
	    				
	    				<div class="promo-wrap">
	    					<h4>
	    						<i class="fa fa-thumbs-up hidden-xs"></i> Need Emergency Locksmith Near<br>
	    						<strong><?php echo $promo_ad->name.', '.strtoupper($promo_ad->state); ?></strong>?
	    						<hr>
								<a href="tel:<?php echo $promo_ad->phone; ?>">CALL <?php echo $promo_ad->phone; ?></a>
							</h4>
	    				</div>

	    			</div>

    			</div>

    		</div>

    	</div>

    </section>

</div>