<?php 
    require 'connection.php';
    
    echo "HELLO WORLD";

	$title = $_GET["q"];
	$tx = str_split(strtolower($title));
	if ($title == "all") {
		$dsql = "SELECT * FROM posts";
		$result = $conn->query($dsql);

		echo "<table><tr><th>Name</th><th>Mark Sheet</th><th>Admit Card</th><th>Stream</th><th>Phone No.</th><th>Email</th><th>Gender</th><th>DOB</th><th>Father's Name</th><th>Mother's Name</th><th>Last School</th></tr>";
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row['fullname']."</td><td>".$row['mark_sheet']."</td><td>".$row['admit_card']."</td><td>".$row['stream']."</td>".$row['phone_number']."</td>".$row['email']."</td>".$row['gender']."</td>".$row['dob']."</td>".$row['fathers_name']."</td>".$row['mothers_name']."</td>".$row['last_school']."</td></tr>";
			}
		}
		echo "</table>";
	} else {
		$dsql = "SELECT * FROM posts";
		$result = $conn->query($dsql);

		echo "<table><tr><th>Name</th><th>Mark Sheet</th><th>Admit Card</th><th>Stream</th><th>Phone No.</th><th>Email</th><th>Gender</th><th>DOB</th><th>Father's Name</th><th>Mother's Name</th><th>Last School</th></tr>";
		if ($result->num_rows > 0) {
			$count = 0;
			while ($row = $result->fetch_assoc()) {
				$tt = str_split(strtolower($row['title']));
				if ($tt[$count] == $tx[$count]) {
					echo "<tr><td>".$row['fullname']."</td><td>".$row['mark_sheet']."</td><td>".$row['admit_card']."</td><td>".$row['stream']."</td>".$row['phone_number']."</td>".$row['email']."</td>".$row['gender']."</td>".$row['dob']."</td>".$row['fathers_name']."</td>".$row['mothers_name']."</td>".$row['last_school']."</td></tr>";	
				}
			}
		}
		echo "</table>";	
	}
?>