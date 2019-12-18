<?php 
	if(isset($_GET['submit'])) {
		if (isset($_SESSION['FNAME'])) {
	
			if(isset($_GET["checkbox"])) {
				gk($_SESSION['FNAME']);
			}
			else{
				alert();
			}	
		}
		else{
			echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'red'; document.getElementById('text_for_warning_p').innerHTML = 'You are not loged in please log in first or signup'; window.location.href = 'http://localhost/resto-search/login.php'; </script>";
			//echo "<script>window.location.href = 'http://localhost/resto-search/login.php';</script>";	
		}
	}

	function alert(){
			echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'red'; document.getElementById('text_for_warning_p').innerHTML = 'You have not selected any item please select one item'; </script>";
	}

	function gk($fname)
	{		
		$conn = new mysqli("localhost", "root", "", "gk_int_db");

		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y/m/d");
		$time = date("h");
 		$full_time = date("h:i:s");
		$x = date("l");		
		$id = $_GET["rest_id"];

		$sql = "select * from resto_timing where (resto_id='$id') AND (day= '$x');";
		$order_sql_temp = mysqli_query($conn,$sql);
		$resto_hour = $order_sql_temp->fetch_assoc();
		$order_hour = $resto_hour['hours'];
		$hour_array = explode(" ",$order_hour);
		$start_hour =  $hour_array['0'];
		$end_hour = $hour_array['3'];

		$checkbox = $_GET["checkbox"];
		$ids = join(",",$checkbox);   

		$sql = "select id,price from restorent_menu where id in ($ids)";
		$result = mysqli_query($conn,$sql);
		$resto_order = array();
		$resto_order = mysqli_fetch_all($result, MYSQLI_ASSOC);
		// $total_price1 = 0;

		$order_rec= array();		
		$total_price1=0;
		foreach ($checkbox as $checkb) {
			foreach ($resto_order as $resto_ord) {
				if ($resto_ord['id']==$checkb) {
					$pri = $resto_ord['price'];
				}	
			}
			$quanti = $_GET["quantity_$checkb"];
			$order_rec[$checkb]	= array("quantity"=>$quanti,
										"price"=>$pri,
										"total_price"=>$quanti*$pri
									);
			$total_price1+=$order_rec[$checkb]["total_price"];
		}

		$order_record = json_encode($order_rec);
       
		if(($time>=$start_hour)&& ($time<=$end_hour)){
			$sql = "insert into menu_order (prod_id,resto_id,user_id,order_record,toal_price,bokking_date,timing,status) values ('$ids', '$id', '$fname', '$order_record', '$total_price1', '$date' ,'$full_time', '1');";
			$conn->query($sql)  or die($conn->error);  
			$conn->close();
			echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'green'; document.getElementById('text_for_warning_p').innerHTML = 'your order is successfully'; </script>";
		}
		else{
			//$sql5 = "insert into menu_order (prod_id,resto_id,user_id,order_record,total_price,bokking_date,timing,status) values ('$ids', '$id', '0', '$order_record', '$total_price1', '$date' ,'$full_time', '0');";
			//$order_sql_temp = mysqli_query($conn,$sql5);
			echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'yellow'; document.getElementById('text_for_warning_p').innerHTML = 'At this time restaurant is closed please try again'; </script>";
			$conn->close();
		}
	}
?>