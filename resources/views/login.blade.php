<!-- Centered form -->
<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Welcome User</h5>
						</div>

						<div class="card-body">
							Horizontal form can have a %-based width and aligned to the center. Use a regular grid markup with offsetting classes as a form wrapper. Mind the breakpoint in <code>.col-*</code> classes to ensure the proper width is used on small screens. This example is using <code>lg</code> breakpoint, which means on desktop screens the form has 33.3% width and 100% on small screens.
						</div>

						<div class="card-body border-top">
							<div class="row">
								<div class="col-lg-8 offset-lg-2">
									<form action="{{route('login.valid')}}" method="post">
										{{ csrf_field() }}
										<div class="row mb-3">
											<label class="col-lg-4 col-form-label">Enter your email:</label>
											<div class="col-lg-8">
												<input type="email" class="form-control" name="email" id="email" placeholder="">
											</div>
										</div>
										
										<div class="row mb-3">
											<label class="col-lg-4 col-form-label">Enter your password:</label>
											<div class="col-lg-8">
												<input type="password" class="form-control" name="password" id="password" placeholder="Your strong password">
											</div>
										</div>
									

										<div class="text-end">
											<button type="submit" class="btn btn-success">Login <i class="ph-paper-plane-tilt ms-2"></i></button>
										</div>
										<a href="{{route('register.form')}}">-> New user? Sign up</a>
										<br>
										<a href="{{route('role.form')}}">-> Add new role</a>
									</form>
                                    
								</div>
							</div>
						</div>
					</div>
					<!-- /centered form -->	