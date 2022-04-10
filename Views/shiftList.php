<?php include "sidebar.php";?>

<div class="container">
	<h1>
		Shift Management
	</h1>
	
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">Day</th>
				<th scope="col">Start Time</th>
				<th scope="col">End time</th>
				<th scope="col">Break Duration (minutes)</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$length = count($variables);
			for ($i = 0; $i < $length; $i++ )
			{
				echo 
				"<tr>
					<td scope='col'>".ucfirst($variables[$i]['day'])."</td>
					<td>".date("h:ia",strtotime($variables[$i]['start_time']))."</td> 
					<td>".date("h:ia",strtotime($variables[$i]['end_time']))."</td>
					<td>".$variables[$i]['break_duration']."</td>
					<td>
						<a class='btn btn-secondary' href='shiftDetails?day=".$variables[$i]['day']."'>Edit</a>
					</td>
				</tr>";		
			}
			?>
		</tbody>
	</table>
</div>