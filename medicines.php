<!DOCTYPE html>
<html>
<head>
	<title>Medicines Status</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src='https://kit.fontawesome.com/a076d05399.js'></script>
			<link rel="stylesheet" type="text/css" href="frontpage.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

			<style type="text/css">
				body
		        {
		          background: linear-gradient(to right, #003B6D, #6699CC);
		          font-family: "Lato", sans-serif;
		          text-align: center;
		          font-size: 16px;
		        }
				table{
		          text-align: center;
		          background-color: white;
		          color: black;
		        }
		        th{
		          text-align: center;
		          background-color: #BDBDBD;
		          color: black;
		        }
		        h2{
		          color: white;
		        }
			</style>
</head>
<body >
	<br/>
	<h2> Availability Of Medicines </h2>
	<br><br><br>
	<table id="dtBasicExample" class="table" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Medicine Name</th>
				<th>Medicine Type</th>
				<th>Medicine ID</th>
				<th>Price</th>
				<th>Status</th>
			</tr>
		</thead>

		<?php

			$connection=mysqli_connect('localhost','root','');
			$db=mysqli_select_db($connection,'project');
			if($connection-> connect_error )
			{
				die("Connection with Database Failed!!".$connection-> connect_error);
			}
			$sql="SELECT med_name,med_type,med_id,cost,status from medicines_table" ;
			$result=$connection-> query($sql);
			if($result-> num_rows> 0)
			{
				while ($row=$result->fetch_assoc()) 
				{
					echo "</td><td>". $row["med_name"]."</td><td>". $row["med_type"]."</td><td>". $row["med_id"]. "</td><td>".$row["cost"]."</td><td>".$row["status"]."</td></tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "No result to display";
			}
			$connection-> close();
		?>
	</table>	
</body>
</html>