
<?php
$servername="121.200.55.60:3307";
$username="2019UIT1013"
$password="2019UIT1013"
$dbname="2019UIT1013"
// create connection
$conn=new mysqli($servername,$username,$password,$dbname);
die("connection failed":$conn->error);
// check connection
if ($conn->connect_error)
{
   die ("copnnection failed:"$conn->connect_error);
}
$sql="select s_no,enrollment_ no,student_name,course_name FROM student ";
$result=$conn->query($sql);
if($result->num_rows>0){
//output data for each row
while($row=$result->fetch_assoc()){
echo "s_no:".$row["s_no"]."enrollment_ no:".$row["enrollment_ no"]."course_name:".$row["course_name"]. "<br />";
}
}else{
	echo "0 results";
}
 $conn->close();
?>

