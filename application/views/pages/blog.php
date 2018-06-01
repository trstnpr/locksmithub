<div class="blogs-content">

	<section class="section-header data-img" data-bg="<?php echo base_url('build/images//banner-bg-3.jpeg'); ?>">

    	<div class="overlay">

	    	<div class="container">

	    		<h1 class="page-title">Blog</h1>

	    	</div>

	    </div>

    </section>

    <section class="section-blogs-wrap">

    	<div class="container">

    		<div class="breadcrumb-wrap">
	    		<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>

			<div class="row">

    			<div class="col-md-8">

    				<div class="section-content">

    				<?php
    				if($blogs->result() != 0) {
    					foreach($blogs->result() as $blog) {
    				?>
    					
    					<div class="blog-item">
                            <?php
                                if($blog->featured_image != NULL) {
                                    $blog_thumb = ($blog->featured_image != NULL) ? base_url($blog->featured_image) : base_url('build/images/lock.png');
                            ?>

                            <div class="blog-thumb">
                                <a href="<?php echo base_url($blog->slug); ?>">
                                    <img src="<?php echo $blog_thumb; ?>" class="img-resonsive" alt="<?php echo $blog->title; ?>" title="<?php echo $blog->title; ?>" />
                                </a>
                            </div>

                            <?php } ?>
                            <div class="blog-content">
        						<div class="blog-head">
        							<h4 class="blog-title">
        								<a href="<?php echo base_url($blog->slug); ?>">
        									<?php echo $blog->title; ?>
        								</a>		
        							</h4>

        							<small class="blog-info">Posted on <?php echo date_proper($blog->created_at); ?> by <?php echo $blog->author; ?></small>
        						</div>

        						<p class="blog-excerpt">
                                    <?php
                                        if($blog->excerpt != NULL) {
                                            echo truncate($blog->excerpt, 300);
                                        } else {
                                            echo truncate($blog->excerpt, 300);
                                        }
                                    ?>    
                                </p>

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

    				<?php
    					}

                        if (strlen($pagination)) {
                            echo $pagination;
                        }
    				} else { ?>

                    <div class="well">
                        <h2>No Blog Posts Available</h2>
                    </div>

                    <?php } ?>

    				</div>

    			</div>

    			<div class="col-md-4">

    				<div class="aside">

                        <?php if($recent_blogs != 0) { ?>
                        <div class="blogs-wrap">
                            <div class="header">
                                <h4>Recent Posts</h4>
                            </div>
                            <div class="content">
                            <?php foreach($recent_blogs as $blog) { ?>

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