<?php
$db_name = "cuic";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";

$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $regno = $_POST['regno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $campus = $_POST['campus'];
    $degree = $_POST['degree'];
    $ugcourse = $_POST['ugcourse'];
    $pgcourse = $_POST['pgcourse'];
    $cgpa = $_POST['cgpa'];
    $activeBL = $_POST['activeBL'];
    $numOfActiveBL = $_POST['numOfActiveBL'];
    $historyBL =$_POST['historyBL'];
    $numOfHistoryBL = $_POST['numOfHistoryBL'];
    $board10 = $_POST['board10'];
    $percentage10 = $_POST['percentage10'];
    $board12 = $_POST['board12'];
    $percentage12 = $_POST['percentage12'];
    $graduationdegree = $_POST['graduationdegree'];
    $percentageGrad = $_POST['percentageGrad'];
    if($pgcourse!=""){
        $ugcourse = "";
    }
    $name = strtoupper($name);
    $sql = "INSERT INTO data(regno, name, email, password, campus, degree, ugcourse, pgcourse, cgpa, activeBL, numOfActiveBL, historyBL, numOfHistoryBL, board10, percentage10, board12, percentage12, graduationdegree, percentageGrad) VALUES ('$regno', '$name', '$email', '$password', '$campus', '$degree', '$ugcourse', '$pgcourse', '$cgpa', '$activeBL', '$numOfActiveBL', '$historyBL', '$numOfHistoryBL', '$board10', '$percentage10', '$board12', '$percentage12', '$graduationdegree', '$percentageGrad')";
    
     if (mysqli_query($conn, $sql)) {
		echo "<center><h2>Wait for 12-24 office hours for verification.</h2> <br/> <h3>NOTE:<br/>(Don't register again. If we find more than one record, all records will be deleted.)<br/>If you want to verify it soon, then please visit CUIC, Center during office hours.<br>Thanks for your patience.</h3></center>";
	 } else {
		echo "<center><h2>Take a screenshot/pic of this page and visit CUIC Center during office hour.</h2></center><br>";
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>