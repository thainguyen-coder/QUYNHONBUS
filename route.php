<!DOCTYPE html>
<html>
<head>
	<title>QUY NHON MAP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
	
	
	li{
		float: left;
	}

		
		#form li{
			list-style: none;
		}
	.table{
		border=2px  ;
		align=center;
		width: 120%;
		line-height: 185%;
		background: #a1f7ef;
		border-style: groove;
		text-align: initial;
		padding: 8%;
		margin-left:-10%;
		
	}
	h3{
		font-size:250%;
	}
	</style>
	<body style="background:#EEEEEE">
		
		
	</div>
	<div id="divResult" class="x" style="height: auto !important;">
		<form id="form" action="route_detail.php" method="GET" align="center">
			<li>
				<!--<th width="300px" align="center"> Mã tuyến</th> -->
				<h3> Tên tuyến</h3>

				<table class="table" >

					<?php 

					include 'config.php';
					//cau len sql 
					$query = "select * from route order by id ";
					//xu li cau lenh sql
					$result = mysqli_query($conn, $query);
					while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<!--	<td><a href="route_detail.php?id=<?php echo $row['id'];?>"><?php echo $row ['id']; ?></a></td> -->
						<td><a href="routedetail.php?id=<?php echo $row['id'];?>" ><?php echo $row ['name']; ?></a></td>
					</tr>
					<?php }
					?>

				</table>
			</li>
		</form>
	</div>
</div>
</div>
      
</body>
</html>


