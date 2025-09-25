<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
	<center>
		<?php
		
		$link = mysqli_connect("localhost", "root", "", "dbmingone");
		//view
		$sql = "SELECT * FROM `medicine`";
		$myData = mysqli_query($link,$sql);
			echo "<table border=1 style='border-color: #ccc; color: black; width:100%;'>
			<tr style='background: #ddd'>
			<th>Medicine ID</th>
			<th>Medicine Name</th>
			<th>Medicine Description</th>
			<th>Medicine Type</th>
			<th>Medicine Price</th>
			<th colspan=2>Option</th>
			</tr>"; 
			while($record = mysqli_fetch_assoc($myData)){
				$mid = $record['medicine_ID'];
				$mn = $record['medicine_name'];
				$md = $record['medicine_desc'];
				$mt = $record['medicine_type'];
				$mp = $record['medicine_price'];
				?>
				<tr>
				<td><?php echo $mid ?></td>
				<td><?php echo $mn ?></td>
				<td><?php echo $md ?></td>
				<td><?php echo $mt ?></td>
				<td><?php echo $mp ?></td>
				<td><a style="color: orange" href="#">Edit</a></td>
				<td><a style="color: red" href="../conn/medicine-delete.php?GetID=<?php echo $pid; ?>">Delete</a></td> 
				</tr>
			<?php
			}
			echo "</table>";
			
		mysqli_close($link);
		?>
	</center>
  </body>
</html>
