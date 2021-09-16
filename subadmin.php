<?php 
require 'connect.php';



$results = mysqli_query($conn, "SELECT * FROM subadmin");
?>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Plan</th>
            <th>MobileNumber</th>
            <th>CreationDate</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><a href="user.php?name=<?php echo $row['UserName']; ?>"><?php echo $row['UserName']; ?></a></td>
			<td><?php echo $row['Plan']; ?></td>
            <td><?php echo $row['MobileNumber']; ?></td>
            <td><?php echo $row['CreationDate']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

