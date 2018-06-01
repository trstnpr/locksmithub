<div class="contactus-content">

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


			<div class="section-content">

				<h2 class="section-title"><?php echo $page->title; ?></h2>

				<hr/>

				<div class="content-wrap">
    				
					<?php echo $page->content; ?>

					<br/>

					<div class="form-wrap">

						<form class="form-horizontal form-contact" method="post" action="<?php echo base_url('contact/send'); ?>">
							<div class="form-group">
								<label class="col-sm-2 control-label">Name *</label>
								<div class="col-sm-10">
									<input type="text" class="form-control name" name="name" placeholder="Your Name ..." required />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Email *</label>
								<div class="col-sm-10">
									<input type="email" class="form-control email" name="email" placeholder="Your Email ..." required />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Subject *</label>
								<div class="col-sm-10">
									<input type="text" class="form-control subject" name="subject" placeholder="Your Subject ..." required />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Message *</label>
								<div class="col-sm-10">
									<textarea type="text" class="form-control message" name="message" rows="5" placeholder="Your Message ..." required ></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-2">
									<div class="g-recaptcha" data-sitekey="<?php echo $gr_data['site_key']; ?>"></div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success btn-send">Send <i class="fa fa-paper-plane"></i></button>
								</div>
							</div>
						</form>

					</div>

    			</div>

			</div>

		</div>

    </section>

</div>