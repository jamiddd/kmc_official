<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "kmcofficial";

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
		die("Connection failed: ". $conn->connect_error);
	}

	// $sql = "CREATE DATABASE jamiddeka";
	// if ($conn->query($sql) === TRUE){

	// }

	// $create_table_sql = "CREATE TABLE posts(id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(30) NOT NULL, content TEXT NOT NULL, author VARCHAR(30), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

	// if ($conn->query($create_table_sql)) {
		
	// }

	// $insert_sql = "INSERT INTO posts (title, content, author) VALUES ('Harry Potter', 'The boy who lived killed the man who died, Again.', 'J. K. Rowling')";

	// if (mysqli_query($conn, $insert_sql)) {
	// 	$last_id = mysqli_insert_id($conn); // To get the the last id 
	// }



	// Multiple Query Insertion



	// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
	// VALUES ('John', 'Doe', 'john@example.com');";
	// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
	// VALUES ('Mary', 'Moe', 'mary@example.com');";
	// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
	// VALUES ('Julie', 'Dooley', 'julie@example.com')";

	// if ($conn->multi_query($sql) === TRUE) {
	//     echo "New records created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }

	// $insert_sql_stmt = $conn->prepare("INSERT INTO posts (title, content, author) VALUES (?, ?, ?)");
	// $stmt->bind_param("sss", $title, $content, $author);
	
?>