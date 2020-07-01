<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$Contact = $_POST['Contact'];
$date = $_POST['date'];
$age = $_POST['age'];
$email = $_POST['email'];
$college = $_POST['college'];
$hobbies = $_POST['hobbies'];
$ideal = $_POST['ideal'];
$game = $_POST['game'];
$aim = $_POST['aim'];
$question = $_POST['question'];
$dream = $_POST['dream'];
$tc = $_POST['tc'];
$message = $_POST['message'];
//database connection
$conn = new mysqli('localhost','root','','personal');
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO details(name,gender,Contact,date,age,email,college,hobbies,ideal,game,aim,question,dream,tc,message)VALUES
    ('$name','$gender','$Contact','$date','$age','$email','$college','$hobbies','$ideal','$game','$aim','$question','$dream','$tc','$message')");
    $stmt->execute();
    echo'Your response has been recored. THANK YOU!!!';
    $stmt->close();
    $conn->close();

}
?>