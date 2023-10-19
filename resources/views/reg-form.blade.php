<!-- Centered form -->
<div class="card">
	<div class="card-header">
		<h5 class="mb-0">Register</h5>
	</div>

	<div class="card-body">
		card-body : Horizontal form can have a %-based width and aligned to the center. Use a regular grid markup with offsetting classes as a form wrapper. Mind the breakpoint in <code>.col-*</code> classes to ensure the proper width is used on small screens. This example is using <code>lg</code> breakpoint, which means on desktop screens the form has 33.3% width and 100% on small screens.
	</div>

	<div class="card-body border-top">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<form action="{{route('user.add')}}" method="POST">
					@csrf
					<div class="row mb-3">
						<label class="col-lg-4 col-form-label">Enter your name:</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="name" id="name" placeholder="">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-lg-4 col-form-label">Enter your email:</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="email" id="email" placeholder="">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-lg-4 col-form-label">Select your role:</label>
						<div class="col-lg-8">
							<select data-placeholder="Select your state" class="form-control form-control-select2" name="role" id="role">
								<option></option>
								<optgroup label="Development">
									<option value="Web Developer">Web Developer</option>
									<option value="Mobile App Developer">Mobile App Developer</option>
								</optgroup>
								<optgroup label="Quality Assurance">
									<option value="QA">QA</option>
								</optgroup>
								<optgroup label="Design">
									<option value="Graphic Designer">Graphic Designer</option>
								</optgroup>
								<optgroup label="Content">
									<option value="Junior Content Writer">Junior Content Writer</option>
									<option value="Senior Content Writer">Senior Content Writer</option>
								</optgroup>
								<optgroup label="Account">
									<option value="Accountant">Accountant</option>
								</optgroup>
							</select>
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-lg-4 col-form-label">Set your password:</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" name="password" id="password" placeholder="Your strong password">
						</div>
					</div>

					<!-- <div class="row mb-3">
											<label class="col-lg-4 col-form-label">Select your state:</label>
											<div class="col-lg-8">
												<select data-placeholder="Select your state" class="form-control form-control-select2">
													<option></option>
													<optgroup label="Development">
														<option value="AK">Web Developer</option>
														<option value="HI">Mobile App Developer</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div> -->

					<!-- <div class="row mb-3">
											<label class="col-lg-4 col-form-label">Attach screenshot:</label>
											<div class="col-lg-8">
												<input type="file" class="form-control">
												<div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
											</div>
										</div> -->

					<!-- <div class="row mb-3">
											<label class="col-lg-4 col-form-label">Your message:</label>
											<div class="col-lg-8">
												<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</div> -->

					<div class="row">
						<div class="col">
							<a href="{{route('index')}}" class="btn btn-primary"><- Go to main page</a>
						</div>
						<div class="col text-end">
							<button type="submit" class="btn btn-success">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<!-- /centered form -->