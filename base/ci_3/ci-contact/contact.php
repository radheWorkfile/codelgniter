


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCk9MTsj5pE-i-GeCcNBfs-ae6xP4-xkyidA&s" alt="">
            </div>
            <div class="col-lg-7 col-sm-12 col-xs-12 d-flex align-items-center">
				<div class="contact">
					<h4>Contact Us.</h4>
					<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> -->
					<form class="form" name="enq" method="post" action="<?php echo base_url() ?>Site/formhandler">
						<div class="row">
							<div class="form-group col-12">
								<input type="text"
									oninput="this.value = this.value.toUpperCase().replace(/[^a-zA-Z ]/g, '').replace(/(  *?)/g, ' ')"
									name="name" class="form-control" placeholder="Name" id="name" required="required">
							</div>
							<div class="form-group col-12">
								<input type="email" oninput="this.value = this.value.toUpperCase()" name="email"
									oninput="this.value = this.value.replace(/[^A-Za-z@.0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
									id="email" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group col-md-12">
								<input type="text"
									oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
									maxlength="10" name="mobile" class="form-control" id="number"
									placeholder="Mobile Number *" required="required">
							</div>
							
							<div class="form-group col-md-12">
								<textarea rows="3"
									oninput="this.value = this.value.replace(/[^A-Za-z0-9 ]/g, '').replace(/ +/g, ' ')"
									name="message" id="message" class="form-control" placeholder="Your Message"
									required="required"></textarea>
							</div>

							<div class="form-group col-md-12 mt-3">
								<div class="outer-box">
									<div class="inner-box1 d-flex justify-content-around  align-items-center py-2"
										style="border:0.2px solid black ">
										<span class="text-primary">Enter Captcha</span>
										<div class="captcha-box-in d-flex align-items-center ">
											<div class="in-colo">
												<span id="first"></span>
												<span id="plus">+</span>
												<span id="second"></span>
											</div>
											<!-- <div class="set-pa "> <a  onclick="refresh();"><i
															class="fa-solid fa-arrows-rotate"></i></a></div> -->
										</div>

									</div>
								</div>
							</div>
							<div class="form-group col-md-12 mt-3">
								<input type="text"
									oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
									id="num" placeholder="Enter Captcha Here" class="set-sum" onkeyup="myFunction()" />
							</div>


							<div class="col-md-12 text-center">
								<button type="submit" value="Send message" name="submit" id="submitButton"
									onclick="return Handleform();" class="btn btn-lg contact_btn"
									title="Submit!">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div><!-- END COL  -->
        </div>
    </div>
</section>