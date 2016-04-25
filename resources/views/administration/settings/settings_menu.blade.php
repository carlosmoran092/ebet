<div class="hpanel">
    <div class="panel-body">
        <a class="small-header-action" href="#">
            <div class="clip-header">
                <i class="fa fa-arrow-down"></i>
            </div>
        </a>

        <div id="hbreadcrumb" class="pull-right">
            {{--  --}}
			<div class="btn-group" role="group" aria-label="...">
            {!! HTML::link('settings/api', ' API',array('class'=>'btn btn-default btn-md icon-wrench-1')); !!}
            {!! HTML::link('settings/languages_available', ' Languages Available',array('class'=>'btn btn-default btn-md icon-language')); !!}
            {!! HTML::link('settings/job_applications', ' Job Applications',array('class'=>'btn btn-default btn-md icon-person')); !!}
            {!! HTML::link('settings/dealings', ' Dealings',array('class'=>'btn btn-default btn-md icon-dollar-1')); !!}
            {!! HTML::link('settings/user_accounts', ' User Accounts',array('class'=>'btn btn-default btn-md icon-users-2')); !!}
			</div>
            {{--  --}}
        </div>
        <h2 class="font-light m-b-xs">

        </h2>
    </div>
</div>