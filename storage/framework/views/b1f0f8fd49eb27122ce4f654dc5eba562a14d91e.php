<?php $__env->startSection('head_panel'); ?>
<div class="hpanel">
	<div class="panel-body">
		<a class="small-header-action" href="#">
			<div class="clip-header">
				<i class="fa fa-arrow-down"></i>
			</div>
		</a>

		<div id="hbreadcrumb" class="pull-right">

			<button class="btn btn-default btn-sm">Create New</button>
		</div>
		<h2 class="font-light m-b-xs">
			Order <?php echo $id; ?>

		</h2>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contend_panel'); ?>
<div class="animate-panel">
	<!-- STAR ROW -->
	<div class="row">
		<div class="col-md-3">
			<div class="hpanel">
				<div class="panel-body">
					<div class="text-center">
						<h2 class="m-b-xs">Name Company</h2>
						<div class="m">
							<center>
								<?php echo HTML::image('images/empresa1.jpg', 'profile', ['class'=>'img-circle img-responsive']); ?>

							</center>
						</div>
						<button class="btn btn-default btn-sm">Profile</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">


			<div class="hpanel">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#tab-3" aria-expanded="true" class="tex-tab"> <i class="icon-info-4"></i> Information</a></li>
					<li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false"><i class=" icon-adult"></i> Work Team</a></li>
					<li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false"><i class="icon-attach-2"></i> Archive</a></li>

				</ul>
				<div class="tab-content">
					<div id="tab-3" class="tab-pane active">
						<div class="panel-body">
							<div class="col-lg-6">
								<div class="hpanel filter-item">
									<a href="#">
										<div class="panel-body">
											<div class="pull-right text-right">
												<h4>ENG <i class="fa fa-long-arrow-right text-info"></i> SPA</h4>
											</div>
											<h4 class="m-b-xs">Text translation:</h4>
										</div>
									</a>
								</div>

								<div class="hpanel filter-item">
									<a href="#">
										<div class="panel-body">
											<div class="pull-right text-right">
												<h4>MEDIC</h4>
											</div>
											<h4 class="m-b-xs">Text experts:</h4>
										</div>
									</a>
								</div>

								<hr>
								<div class="hpanel filter-item">
									<a href="#" data-toggle="tooltip" data-placement="top" 
									title="<?php echo $carbon->now('America/Bogota')->subDay(4); ?>">

									<div class="panel-body">
										<div class="pull-right text-right">
											<h4><?php echo $carbon->now('America/Bogota')->subDay(4)->diffForHumans();; ?> <i class="fa fa-calendar-check-o text-success"></i></h4>
										</div>
										<h4 class="m-b-xs">Creation Date</h4>
									</div>
								</a>
							</div>

							<div class="hpanel filter-item">
								<a href="#" title="<?php echo $carbon->now('America/Bogota')->addDays(2); ?>">
									<div class="panel-body">
										<div class="pull-right text-right">
											<h4><?php echo $carbon->now('America/Bogota')->addDays(2)->diffForHumans();; ?> <i class="fa fa-calendar-times-o text-danger"></i></h4>
										</div>
										<h4 class="m-b-xs">Closing Date</h4>
									</div>
								</a>
							</div>
							<hr>


						</div>
						<!--  -->
						<div class="col-lg-6">
							<!--  -->

							<div class="col-md-12">
								<div class="hpanel">
									<div class="panel-body">
										<div class="hpanel hbgblue">
											<div class="panel-body">
												<div class="text-center">
													<h3>Number of words</h3>
													<p class="text-big font-light">
														9280
													</p>
												</div>
											</div>
										</div>

										<div class="stats-title">
											<h4>Progress</h4>
										</div>
										<div class="m-t-lg">
											<div class="progress m-t-xs full progress-small">
												<div style="width: 65%" title="65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class=" progress-bar progress-bar-info">
													<span class="sr-only">65% Complete (success)</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--  -->
						</div>
					</div>
				</div>
				<div id="tab-4" class="tab-pane">
					<div class="panel-success">
						<div class="hpanel">
							<div class="panel-body">
								<div class="col-lg-6">
									<div class="hpanel">
										<div class="panel-body">
											<div class="stats-title pull-left">
												<h4>Admin</h4>
											</div>
											<div class="stats-icon pull-right">

												<?php echo HTML::image('images/profile.jpg', 'profile', ['class'=>'img-circle img-responsive']); ?>


											</div>
											<div class="m-t-xl">
												<h1 class="text-success">Walter G</h1>

											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="hpanel">
										<div class="panel-body">
											<div class="stats-title pull-left">
												<h4>Translator</h4>
											</div>
											<div class="stats-icon pull-right">
												<?php echo HTML::image('images/a2.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'76']); ?>

											</div>
											<div class="m-t-xl">
												<h1 class="text-success">Paul F. Rogers</h1>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="hpanel">
										<div class="panel-body">
											<div class="stats-title pull-left">
												<h4>Translator</h4>
											</div>
											<div class="stats-icon pull-right">
												<?php echo HTML::image('images/a4.jpg', 'profile', ['class'=>'img-circle img-responsive','width'=>'76']); ?>

											</div>
											<div class="m-t-xl">
												<h1 class="text-success">Sussy Wang</h1>
											</div>
										</div>
									</div>
								</div>


								<div class="col-lg-6">
									<div class="hpanel">
										<div class="panel-body">
											<div class="stats-title pull-left">
												<h4>Translator</h4>
											</div>
											<div class="stats-icon pull-right">
												<i class="pe pe-7s-user i-27"></i>
											</div>
											<div class="m-t-xl">
												<button type="button" class="btn btn-lg btn-default">Add Translator</button>

											</div>
										</div>
									</div>
								</div>



							</div>
						</div>
					</div>


				</div>

				<div id="tab-5" class="tab-pane">
					<div class="panel-body">

						<div class="hpanel filter-item">
							<a href="#">
								<div class="panel-body">
									<div class="pull-right text-right">
										<button class=" btn btn-default btn-sm">View</button>
									</div>
									<h4 class="m-b-xs"><i class="fa fa-file-pdf-o text-danger"></i> Document_2016.pdf</h4>
								</div>
							</a>
						</div>

						<div class="hpanel filter-item">
							<a href="#">
								<div class="panel-body">
									<div class="pull-right text-right">
										<button class=" btn btn-default btn-sm">View</button>
									</div>
									<h4 class="m-b-xs"><i class="fa fa-file-word-o text-info"></i> Document_2016.docs</h4>
								</div>
							</a>
						</div>

						<div class="hpanel filter-item">
							<a href="#">
								<div class="panel-body">
									<div class="pull-right text-right">
										<button class=" btn btn-default btn-sm">View</button>
									</div>
									<h4 class="m-b-xs"><i class="fa fa-file-excel-o text-success"></i> list_cli_12.xlsx</h4>
								</div>
							</a>
						</div>


					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- END ROW -->

	<!--  -->

	
	<div class="col-lg-12 panel">
		<div class="panel-body">
			<div class="col-md-3">

				<button class="btn-default btn-lg btn"><i class=" icon-plus-5"></i> Add New</button>
				<hr>

				<?php /*  */ ?>
				<div class="hpanel filter-item">
					<a href="#">
						<div class="panel-body">
							<div class="pull-right text-right">
								
							</div>
							<h3 class="m-b-xs"><i class="pe-7s-note"></i> Notes</h3>                          
						</div>
					</a>
				</div>
				<?php /*  */ ?>


				<?php /*  */ ?>
				<div class="hpanel filter-item">
					<a href="#">
						<div class="panel-body">
							<div class="pull-right text-right">
								<h5><span class="label label-success">3</span></h5>
							</div>
							<h3 class="m-b-xs"><i class="pe-7s-comment"></i> Notices</h3>                                             
						</div>
					</a>
				</div>
				<?php /*  */ ?>


				<?php /*  */ ?>
				<div class="hpanel filter-item">
					<a href="#">
						<div class="panel-body">
							
							<div class="pull-right text-right">
								<h5><span class="label label-danger">8</span></h5>
							</div>
							<h3 class="m-b-xs"><i class="pe-7s-attention"></i> Warnings</h3>

						</div>                         
						
					</a>
				</div>
				<?php /*  */ ?>
				
				




			</div>
			<div class="col-md-9 trw-nnw">
				
				<div class="trw-note">
					
					<a class="close-note"><i class=" icon-cancel-circled-outline"></i></a><a class="close-note"><i class=" icon-share"></i></a>
					<h5><?php echo $carbon->now()->subMinutes(2)->diffForHumans();; ?></h5>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi excepturi repellat laudantium numquam sunt quod nam reprehenderit iusto maxime, nemo, deserunt ipsum repellendus iure quia atque dolore quam provident earum.
				</div>

				<div class="trw-note">
					<a class="close-note"><i class=" icon-cancel-circled-outline"></i></a><a class="close-note"><i class=" icon-share"></i></a>
					<h5><?php echo $carbon->now()->subMinutes(56)->diffForHumans();; ?></h5>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi excepturi repellat laudantium numquam sunt quod nam reprehenderit iusto maxime, nemo, deserunt ipsum repellendus iure quia atque dolore quam provident earum.
				</div>

				<div class="trw-note">
					<a class="close-note"><i class=" icon-cancel-circled-outline"></i></a><a class="close-note"><i class=" icon-share"></i></a>
					<h5><?php echo $carbon->now()->subMinutes(80)->diffForHumans();; ?></h5>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi excepturi repellat laudantium numquam sunt quod nam reprehenderit iusto maxime, nemo, deserunt ipsum repellendus iure quia atque dolore quam provident earum.
				</div>

				<div class="trw-note">    
					<a class="close-note"><i class=" icon-cancel-circled-outline"></i></a><a class="close-note"><i class=" icon-share"></i></a>          
					<h5><?php echo $carbon->now()->subDay(1)->diffForHumans();; ?></h5>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi excepturi repellat laula atque dolore quam pronam reprehenderit iusto maxime, nemo, deserunt ipsum repellendus iure quia atque dolore quam provident earum nam reprehenderit iusto maxime, nemo, deserunt ipsum repellendus iure quia atque dolore quam pronam reprehenderit iusto maxime, nemo, deserunt ipsum repellendus iure quia atque dolore quam pro.
				</div>

			</div>
		</div>


		
	</div>

	
</div>

<!--  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>