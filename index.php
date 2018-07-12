<?php
include("db.php");
include("header.php");

?>
<div class="panel panel-default">
    
	<div class="panel panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php" > Add students </a>
				</h2>
		<div class="panel panel-body">

					<form action="index.php">
					<table class="table table-striped">
				<tr>
			<th>#Serial Number</th><th>Student Name</th><th>Roll Number</th><th>Attendace Status<th>time_in</th><th>time_out</th>
				</tr>

		
		
				<?php $result=mysqli_query($con,"select * from attendance");
				$serialnumber=0;
				while($row=mysqli_fetch_array($result))
				{
				$serialnumber++; 
				
				?>



					<tr>
						<td><?php echo $serialnumber; ?> </td>
						<td><?php echo $row['student_name']; ?></td>
						<td><?php echo $row['roll_number']; ?> </td>
					</tr>			
<?php
}
?>
</table>
</form>
</div>

