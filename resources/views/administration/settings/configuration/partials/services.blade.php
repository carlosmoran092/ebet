       <div class="list-table-items"> 
       	<div class="table-responsive">
       		<table class="table table-hover">
       			<thead>
       				<tr>
       					<th width="60%">Title</th>
       					<th width="10%">Price/Word</th>
       					<th width="30%"></th>
       				</tr>
       			</thead>
       			<tbody>
@foreach ($print as $print)
<tr>
       					<th>{!! $print->title !!}</th>
       					<th>{!! $print->rates !!}</th>
       					<th> <button class="btn btn-xs btn-primary">Edit</button> </th>
       				</tr>

@endforeach
       				


       			</tbody>
       		</table>
       	</div>
       </div>