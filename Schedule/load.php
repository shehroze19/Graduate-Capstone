
<?php

//load.php

include("../connection.php");

$data = array();

$query = "SELECT * FROM schedule ORDER BY room_name";


$result=mysqli_query($con,$query);




while($row=mysqli_fetch_assoc($result)){
	$data[] = array(


		'id'   => $row["id"],
		'title'   => "Room Number: umber: umber: umber: umber: umber: umber: ".$row["room_name"]."\n Staff Name\n Staff Name  :",
		'description'   => "aaz",
		'start'   => "2020-02-11T".$row["from_time"],
		'end'   => "2020-02-11T".$row["to_time"]

	);
}


?>