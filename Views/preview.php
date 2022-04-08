

<table width="100%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr>
		
		<th><strong>Name</strong></th>
		<th><strong>Email</strong></th>
		</tr>
	</thead>

         
			<?php $length = count($variables);
				for ($i = 0; $i < $length; $i++ )
				{
					echo "
						<tr> <td align='center'>".$variables[$i]['id']."</td>
					    <td align='center'>".$variables[$i]['name']."</td> 
						<td align='center'>".$variables[$i]['email']."</td></tr>";		
				}
            ?>

        </tbody></table>

		<form method="post" action="profile">
			<label for="id">Enter the ID of the employee to view</label>
            <input type="number" name="id" placeholder="Employee ID "/>
            <input type="submit" value="Enter"/>
        </form>


		<?php // echo $variables[0]['id']; ?>  