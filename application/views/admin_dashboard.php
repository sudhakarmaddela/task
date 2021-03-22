<?php $this->load->view('admin_header'); ?>

<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<div class="media align-items-center">
							<div class="widget-chart-two-content media-body">
								<p class="text-muted mb-0">Daily Sales</p>
								<h3 class="mb-0">$35,715</h3>
							</div>
							<div dir="ltr" class="knob-chart">
								<input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-bgColor="rgba(150, 150, 150, 0.1)"
									   data-fgColor="#0acf97" value="37" data-skin="tron" data-angleOffset="180"
									   data-readOnly=true data-thickness=".1"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<div class="media align-items-center">
							<div class="widget-chart-two-content media-body">
								<p class="text-muted mb-0">Sales Analytics</p>
								<h3 class="mb-0">$97,511</h3>
							</div>
							<div dir="ltr" class="knob-chart">
								<input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-bgColor="rgba(150, 150, 150, 0.1)"
									   data-fgColor="#f9bc0b" value="92" data-skin="tron" data-angleOffset="180"
									   data-readOnly=true data-thickness=".1"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<div class="media align-items-center">
							<div class="widget-chart-two-content media-body">
								<p class="text-muted mb-0">Statistics</p>
								<h3 class="mb-0">$954</h3>
							</div>
							<div dir="ltr" class="knob-chart">
								<input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-bgColor="rgba(150, 150, 150, 0.1)"
									   data-fgColor="#f1556c" value="14" data-skin="tron" data-angleOffset="180"
									   data-readOnly=true data-thickness=".1"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<div class="media align-items-center">
							
							<div class="widget-chart-two-content media-body">
								<p class="text-muted mb-0">Total Revenue</p>
								<h3 class="mb-0">$32,540</h3>
							</div>
							<div dir="ltr" class="knob-chart">
								<input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-bgColor="rgba(150, 150, 150, 0.1)"
									   data-fgColor="#2d7bf4" value="60" data-skin="tron" data-angleOffset="180"
									   data-readOnly=true data-thickness=".1"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- end row -->



		<div class="row">
			<div class="col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="dropdown float-right">
							<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
								<i class="mdi mdi-dots-horizontal"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Settings</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Download</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Upload</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Action</a>
							</div>
						</div>

						<h4 class="header-title">Sales Overview</h4>

						<div id="sales-overview" class="apex-charts" dir="ltr" data-colors="#45bbe0,#f1556c"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="dropdown float-right">
							<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
								<i class="mdi mdi-dots-horizontal"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Settings</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Download</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Upload</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Action</a>
							</div>
						</div>

						<h4 class="header-title">Order Overview</h4>
						<div id="order-overview" class="apex-charts" dir="ltr" data-colors="#0acf97,#2d7bf4"></div>

					</div>
				</div>
			</div>
		</div>
		<!-- end row -->


		<div class="row">
			<div class="col-xl-8">
				<div class="card">
					<div class="card-body">
						<div class="dropdown float-right">
							<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
								<i class="mdi mdi-dots-horizontal"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Settings</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Download</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Upload</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Action</a>
							</div>
						</div>

						<h4 class="header-title mb-3">Wallet Balances</h4>

						<div class="table-responsive">
							<table class="table table-hover table-centered table-nowrap m-0">

								<thead>
								<tr>
									<th>Profile</th>
									<th>Name</th>
									<th>Currency</th>
									<th>Balance</th>
									<th>Reserved in orders</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<img src="<?php echo base_url();?>public/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
									</td>

									<td>
										<h5 class="m-0 font-weight-normal">Tomaslau</h5>
										<p class="mb-0 text-muted"><small>Member Since 2017</small></p>
									</td>

									<td>
										<i class="mdi mdi-currency-btc text-primary"></i> BTC
									</td>

									<td>
										0.00816117 BTC
									</td>

									<td>
										0.00097036 BTC
									</td>

									<td>
										<a href="#" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i></a>
										<a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
									</td>
								</tr>

								<tr>
									<td>
										<img src="<?php echo base_url();?>public/assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
									</td>

									<td>
										<h5 class="m-0 font-weight-normal">Erwin E. Brown</h5>
										<p class="mb-0 text-muted"><small>Member Since 2017</small></p>
									</td>

									<td>
										<i class="mdi mdi-currency-eth text-primary"></i> ETH
									</td>

									<td>
										3.16117008 ETH
									</td>

									<td>
										1.70360009 ETH
									</td>

									<td>
										<a href="#" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i></a>
										<a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<img src="<?php echo base_url();?>public/assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
									</td>

									<td>
										<h5 class="m-0 font-weight-normal">Margeret V. Ligon</h5>
										<p class="mb-0 text-muted"><small>Member Since 2017</small></p>
									</td>

									<td>
										<i class="mdi mdi-currency-eur text-primary"></i> EUR
									</td>

									<td>
										25.08 EUR
									</td>

									<td>
										12.58 EUR
									</td>

									<td>
										<a href="#" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i></a>
										<a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<img src="<?php echo base_url();?>public/assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
									</td>

									<td>
										<h5 class="m-0 font-weight-normal">Jose D. Delacruz</h5>
										<p class="mb-0 text-muted"><small>Member Since 2017</small></p>
									</td>

									<td>
										<i class="mdi mdi-currency-cny text-primary"></i> CNY
									</td>

									<td>
										82.00 CNY
									</td>

									<td>
										30.83 CNY
									</td>

									<td>
										<a href="#" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i></a>
										<a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<img src="<?php echo base_url();?>public/assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
									</td>

									<td>
										<h5 class="m-0 font-weight-normal">Luke J. Sain</h5>
										<p class="mb-0 text-muted"><small>Member Since 2017</small></p>
									</td>

									<td>
										<i class="mdi mdi-currency-btc text-primary"></i> BTC
									</td>

									<td>
										2.00816117 BTC
									</td>

									<td>
										1.00097036 BTC
									</td>

									<td>
										<a href="#" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i></a>
										<a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
									</td>
								</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

			<div class="col-xl-4">
				<div class="card">
					<div class="card-body">
						<div class="dropdown float-right">
							<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
								<i class="mdi mdi-dots-horizontal"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Settings</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Download</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Upload</a>
								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item">Action</a>
							</div>
						</div>

						<h4 class="header-title">Total Wallet Balance</h4>

						<div id="wallet-balance" dir="ltr" class="apex-charts" data-colors="#02c0ce,#2d7bf4,#0acf97"></div>

						<div class="row text-center">
							<div class="col-6">
								<p class="text-muted mb-1">This Month</p>
								<h3 class="mt-0 font-20">$120,254 <small class="badge badge-soft-success font-12">+15%</small></h3>
							</div>

							<div class="col-6">
								<p class="text-muted mb-1">Last Month</p>
								<h3 class="mt-0 font-20">$98,741 <small class="badge badge-soft-danger font-12">-5%</small></h3>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
		<!-- end row -->

	</div> <!-- container-fluid -->

</div> <!-- content -->
<?php $this->load->view('admin_footer'); ?>