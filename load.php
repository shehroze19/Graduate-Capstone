
<?php

//load.php

include("connection.php");

$data = array();

$query = "SELECT * FROM schedule ORDER BY id";


$result=mysqli_query($con,$query);





while($row=mysqli_fetch_assoc($result)){
	$data[] = array(


		'id'   => $row["id"],
		'title'   => "Staff Namse: ".$row["name"],
		'start'   => "2020-02-11T".$row["from_time"],
		'end'   => "2020-02-11T".$row["to_time"]
	);
}


?>