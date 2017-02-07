<?php



include('dbConfig.php');

$post_id = intval($_GET['post_id']);
$like = intval($_GET['like']);
$like = $like + 1;

$sql = "UPDATE `posts` SET `p_like` = $like WHERE `posts`.`p_id` = $post_id ";


if (mysqli_query($conn, $sql)) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

        $conn->close();
	

?>

