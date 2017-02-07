<?php



include('dbConfig.php');

$post_id = intval($_GET['post_id']);
$comment = $_GET['comment'];

$sql = "INSERT INTO `comments` (`p_id`, `c_text`) VALUES ($post_id ,'$comment')";


if (mysqli_query($conn, $sql)) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

        $conn->close();
	

?>

