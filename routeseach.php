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
	.seach{
		padding-top:30px;
	}
	</style>
	<body style="background:#EEEEEE">
		
		
	</div>
	<div id="divResult" class="x" style="height: auto !important;">
	<div align="right">
	<form action="?options=search" class="seach" method="POST">
				<label for="gsearch">Tìm kiếm trạm</label>
				<input type="search" id="seach" name="search">
				<input type="submit" value="Tìm" name="submit">
					</form>
					</div>
	</div>
      
</body>
</html>



		<form id="form" action="" method="POST" align="center">
			<li>
			
				<!--<th width="300px" align="center"> Mã tuyến</th> -->
				<h3> Tên tuyến</h3>

				<table class="table" >
					<?php 
						include "config.php";
						if(isset($_POST["submit"]))
							{
								$keyword = $_POST["search"];
								$sql ="select routeId from route_setting where name LIKE '$keyword%' GROUP BY routeId";
								$result=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
									$sql2="select * from route_description where routeId='$row[routeId]'";
									$result2=mysqli_query($conn,$sql2);
									while($row2=mysqli_fetch_array($result2)){?>
										<tr>
									<!--	<td><a href="route_detail.php?id=<?php echo $row2['id'];?>"><?php echo $row2['id']; ?></a></td> -->
									<td><a href="routedetail.php?id=<?php echo $row2['routeId'];?>" ><?php echo $row2['name']; ?></a></td>
										</tr>
										<?php }
								}
							}
									?>
								

				</table>
			</li>
		</form>
