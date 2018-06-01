<?php if(key_services() != 0) { ?>
<div class="keysvc-widget">

	<h4>Key Services</h4>

	<div class="ksvc-wrap">
		
		<ul class="list-default">
			<?php foreach(key_services() as $key) { ?>
			<li class="item">
				<a href="<?php echo base_url($key->slug); ?>">
					<?php echo $key->title; ?>
					<small class="txt-inblock">in <?php echo ucwords($location); ?></small>
				</a>
				<p class="excerpt"><?php echo truncate($key->excerpt, 50); ?></p>
			</li>
			<?php } ?>
		</ul>

	</div>
</div>
<?php } ?>