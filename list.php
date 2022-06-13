<?php
    include("./dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>책목록</title>
</head>
<body>
<?php
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $no = $row["sno"]; 
  ?>
  <div>
  <a href="./delete.php?no=<?php echo $no;?>">삭제</a>
  <?php  
    echo " 책이름: " . $row["snum"]. " - 저자: " . $row["sname"]. "- 출판사 :" . $row["smajor"]."- 발행일 :" . $row["saddr"];
    ?>
    <a href="./update.php?no=<?php echo $no;?>">수정</a></div>
    <?php
    

  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<div>
<a href="./input.php">책입력</a>
</div>


</body>
</html>