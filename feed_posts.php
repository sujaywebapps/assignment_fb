<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('dbConfig.php');


/*$result = $conn->query("SELECT p.*, srl.*, sct.*, sr.* FROM products AS p JOIN standard_rost_level as srl JOIN standard_coffee_type AS sct JOIN standard_roster AS sr WHERE p.p_id = '$prod_details' AND p.p_rost_level = srl.level_id AND p.p_coffee_type = sct.coffee_id AND p.p_roster = sr.roster_id ");*/

$result = $conn->query("SELECT * FROM posts ");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Post_dec":"'  . $rs["p_text"] . '",';
    $outp .= '"Id":"'   . $rs["p_id"]        . '",';
    $outp .= '"Image":"'   . $rs["p_img"]        . '",';
    $outp .= '"Video":"'   . $rs["p_video"]        . '",';
    $outp .= '"Like":"'   . $rs["p_like"]        . '",';
    $outp .= '"User":"'. $rs["p_user"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>