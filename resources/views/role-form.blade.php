<!-- Centered form -->
<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Add Role</h5>
						</div>

						<div class="card-body">
							Horizontal form can have a %-based width and aligned to the center. Use a regular grid markup with offsetting classes as a form wrapper. Mind the breakpoint in <code>.col-*</code> classes to ensure the proper width is used on small screens. This example is using <code>lg</code> breakpoint, which means on desktop screens the form has 33.3% width and 100% on small screens.
						</div>

						<div class="card-body border-top">
							<div class="row">
								<div class="col-lg-8 offset-lg-2">
									<form action="{{route('role.add')}}" method="POST">
										@csrf
										<div class="row mb-3">
											<label class="col-lg-4 col-form-label">Add new role ID:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" name="role_id" id="" placeholder="">
											</div>
										</div>
										
										<div class="row mb-3">
											<label class="col-lg-4 col-form-label">Add new role name:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" name="role_name" id="" placeholder="">
											</div>
										</div>
									

										<div class="text-end">
											<button type="submit" class="btn btn-success">Submit <i class="ph-paper-plane-tilt ms-2"></i></button>
										</div>
										<a href="{{route('index')}}" class="btn btn-primary"><- Go to main page</a>
									</form>
                                    
								</div>
							</div>
						</div>
					</div>
					<!-- /centered form -->