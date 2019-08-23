<?php
$servername="121.200.55.60:3307";
$username="2019UIT1147";
$password="2019UIT1147";
$dbname="2019UIT1147";
// create connection
$conn=new mysqli($servername,$username,$password,$dbname);
if (!conn){
die("connection failed: " . mysqli_connect_error());
}
echo "connected successfully <br />";
$trunc="truncate table multiplication";
mysqli_query($conn,$trunc);
echo "table truncated <br />";
for($i=1;$i<=30;$i++)
{
$result=$i*5;
$sql="insert into multiplication(multiplicand,multiplier,result)values('$i',5,'$result')";
$res=mysqli_query($conn,$sql);
}

$sql="select * FROM multiplication";
$result=$conn->query($sql);
if($result->num_rows>0){
//output data for each row
while($row=$result->fetch_assoc()){
echo "multiplicand:".$row["multiplicand"]."multiplier:".$row["multiplier"]."result:".$row["result"]. "<br />";
//echo "1";
}
}else{
        echo "0 results";
}
 $conn->close();



?>


