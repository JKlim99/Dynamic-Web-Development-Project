
<table width="100%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr>
		<th><strong>id</strong></th>
		<th><strong>Name</strong></th>
		<th><strong>email</strong></th>
        <th><strong>password</strong></th>
		</tr>
	</thead>

         
			<?php 
					echo " <tr> <td align='center'>".$variables[0]['id']."</td> 
						 <td align='center'>".$variables[0]['name']."</td>
						 <td align='center'>".$variables[0]['email']."</td>
                         <td align='center'>".$variables[0]['password']."</td> </tr>";
            ?>
        </tbody></table>
