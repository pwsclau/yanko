<?php 
/* Template Name: Contact Us Page*/
get_header(); ?>
	<div class="subpage-banner cu-subpg">
		<h1 class = "heading-46">CONTACT US</h1>
	</div>

	<div class="section section-contact">
		<div class="container">
			<div class="row">
					<div class="col-md-8 para-18">

						<div class="section-title">
							<h2>Free Consultation</h2>
							<div class="line-20"></div>
						</div>
						
						<p>
							At the law firm of Yanko & Popovic our lawyers work closely with each client, personally handling every aspect of every case to ensure that all avenues of compensation are fully exhausted.
							<br><br>
							During your free consultation, we will give you an honest assessment of the merits of your case. If you can't come to our office, we can meet you in your home, hospital, or doctor's office.
							<br><br>
							Time is an important element in your case. Do not delay in contacting us. We look forward to exceeding your expectations in everything we do.
						</p>

						<div class="form-wrapper">
							<?php echo do_shortcode('[contact-form-7 id="42" title="Contact Us"]'); ?>
							

						</div>
					</div>
					<div class="col-md-4 para-16" >
						<h2 class="section-title left">Contact Info</h2>
						<div class="line-20"></div>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<span>
									Suite 301, 300 Manning Road N.E., <br>
									Calgary, Alberta <br>
									T2E 8K4
								</span>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<span>
									yanko&popovic@yplaw.ca
								</span>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<span>
									403.262.0262<br>
									403.204.0284
								</span>
							</li>
						</ul>
					</div>
				</div>
		</div>
	</div>

	<div class="location-map" id="googleMap">
		
	</div>

<?php get_footer(); ?>