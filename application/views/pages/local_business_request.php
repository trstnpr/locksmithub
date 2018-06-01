<div class="localbizreq-content">

	<section class="section-header data-img" data-bg="<?php echo base_url('build/images//banner-bg-3.jpeg'); ?>">

    	<div class="overlay">

	    	<div class="container">

	    		<h1 class="page-title"><?php echo $page->title; ?></h1>

	    	</div>

	    </div>

    </section>

    <section class="section-localbizreq-page">

    	<div class="container">

    		<div class="breadcrumb-wrap">
	    		<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="active"><?php echo $page->title; ?></li>
				</ol>
			</div>


			<div class="section-content">

				<h2 class="section-title"><?php echo $page->title; ?></h2>

				<hr/>

				<div class="content-wrap">
    				
					<?php echo $page->content; ?>

					<br/>

					<div class="form-wrap">

						<form class="submit-biz" method="post" action="<?php echo base_url('business/post/process'); ?>" enctype="multipart/form-data">

							<div class="row">

								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleInputFile">Business Photo</label>
										<input type="file" class="biz_photo" name="photo" accept=".jpg, .jpeg, .png" onchange="readURL(this);" required />
										<p class="help-block">Format .jpg .jpeg and .png only.</p>
										<button type="button" class="btn btn-xs btn-warning remove-preview" style="display:none;">Remove</button>
										<img class="img-responsive preview" src="" />
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label>Business Name *</label>
										<input type="text" class="form-control input-lg biz_name" name="name" placeholder="Business Name" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>City *</label>
										<input type="text" class="form-control input-lg biz_city" name="city" placeholder="City" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>State *</label>
										<input type="text" class="form-control input-lg biz_state" name="state" placeholder="State Abbreviation" maxlength="2" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Zip Code *</label>
										<input type="text" class="form-control input-lg biz_zip" name="zip" placeholder="Zip Code" maxlength="5" required/>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Email Address *</label>
										<input type="email" class="form-control input-lg biz_email" name="email" placeholder="Email Address" required/>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Contact Number *</label>
										<input type="text" class="form-control input-lg biz_contact" name="contact" placeholder="Contact Number" required/>
									</div>
								</div>

							</div>

							<div class="g-recaptcha" data-sitekey="<?php echo $gr_data['site_key']; ?>"></div>

							<br/>

							<button type="submit" class="btn btn-success btn-lg submit-biz-btn">Submit <i class="fa fa-paper-plane"></i></button>

						</form>

					</div>

    			</div>

			</div>

		</div>

    </section>

</div>