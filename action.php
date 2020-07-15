<?php 
$conn= new mysqli("localhost","root","","all_banks");
if($conn->connect_error){
	die("Failed to connect!".$conn->connect_error);
}
if(isset($_POST['query'])){
	4inpText=$_POST['query' ];
	$query="SELECT name FROM bank_names WHERE name LIKE '%$inpText%'";
	$result=$conn->query($query);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['country']."</a>";
		}
	}
	else{
		echo "<p class='list-group-item border-1'>No Record</p>"
	}
 ?>}
}
