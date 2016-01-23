<?php $__env->startSection('contend_site'); ?>
<br>
<div class="col-md-12">
	<h1 class="text-center title-web">WORLD EXPERTS</h1>
</div>


<div class="container container-service">
	
	<div class="col-md-5 ">
		<img class="img-responsive" src="http://dummyimage.com/570x380/ededed/686a82.gif&text=placeholder+image" alt="placeholder+image">
	</div>	
	<div class="col-md-7">

	<h2 class="text-center text-title">Hello Hello ?</h2>
		<p class="p-home text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do uis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p class="p-home text-justify">
		Laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

</div>
<br>

<div class="container container-service">

<div class="col-md-6 col-sm-6 hidden-lg hidden-md">
	<img class="img-responsive" src="http://dummyimage.com/570x330/ededed/686a82.gif&text=placeholder+image" alt="placeholder+image">
</div>
	
<div class="col-md-6 ">
	<p class="p-home text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p class="p-home text-justify">
	Laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>		

<div class="col-md-6  hidden-sm hidden-xs">
	<img class="img-responsive" src="http://dummyimage.com/570x330/ededed/686a82.gif&text=placeholder+image" alt="placeholder+image">
</div>

</div>
	

</div>
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.website', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>