<?php



include('dbConfig.php');

$txt = $_POST['desc'];
$typ = $_POST['d_type'];

	echo "".$txt;
	if(!empty($_FILES['image'])){
		$ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
                $image = time().'.'.$ext;
                move_uploaded_file($_FILES["image"]["tmp_name"], 'images/'.$image);

                if($typ == "image"){

                	$sql = "INSERT INTO `posts` (`p_text`, `p_img`, `p_user`) VALUES ('$txt' ,'$image','sujay')";
                }
                if($typ == "video"){

                	$sql = "INSERT INTO `posts` (`p_text`, `p_video`, `p_user`) VALUES ('$txt' ,'$image','sujay')";
                }

                if (mysqli_query($conn, $sql)) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

        $conn->close();
		echo "Image uploaded successfully as ".$image;

		
	}else{
		echo "Image Is Empty";
	}
?>

