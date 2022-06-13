<?php
    include("./dbcon.php");

    $no = $_GET["no"];

    $sql = "SELECT * FROM member where sno=".$no;
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $numprt = $row["snum"]; 
    $nameprt = $row["sname"]; 
    $majorprt = $row["smajor"]; 
    $addrprt = $row["saddr"]; 

  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>책정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
  <input type="hidden" name="no" value="<?php echo $no; ?>">
<div>
책이름<input type="text" name="num" value="<?php echo $numprt; ?>">
</div>
<div>
저자<input type="text" name="name" value="<?php echo $nameprt; ?>">
</div>
<div>
출판사
<input type="radio" name="major" value="위즈덤하우스"  <?php if($majorprt == "위즈덤하우스") echo "checked"; ?>>위즈덤하우스 
<input type="radio" name="major" value="미디어그룹"  <?php if($majorprt == "미디어그룹") echo "checked"; ?>>미디어그룹 
<input type="radio" name="major" value="시공사" <?php if($majorprt == "시공사") echo "checked"; ?>>시공사
<input type="radio" name="major" value="문학동네"  <?php if($majorprt == "문학동네") echo "checked"; ?>>문학동네 
<input type="radio" name="major" value="북이십일"  <?php if($majorprt == "북이십일") echo "checked"; ?>>북이십일 
<input type="radio" name="major" value="김영사" <?php if($majorprt == "김영사") echo "checked"; ?>>김영사
<input type="radio" name="major" value="창비"  <?php if($majorprt == "창비") echo "checked"; ?>>창비 
<input type="radio" name="major" value="웅진씽크빅"  <?php if($majorprt == "웅진씽크빅") echo "checked"; ?>>웅진씽크빅 
<input type="radio" name="major" value="도서출판길벗" <?php if($majorprt == "도서출판길벗") echo "checked"; ?>>도서출판길벗
</div>
<div>
발행일
<select name="addr">
    <option value="1월"  <?php if($addrprt == "1월") echo "selected"; ?>>1월</option>
    <option value="2월"  <?php if($addrprt == "2월") echo "selected"; ?>>2월</option>
    <option value="3월"  <?php if($addrprt == "3월") echo "selected"; ?>>3월</option>
    <option value="4월"  <?php if($addrprt == "4월") echo "selected"; ?>>4월</option>
    <option value="5월"  <?php if($addrprt == "5월") echo "selected"; ?>>5월</option>
    <option value="6월"  <?php if($addrprt == "6월") echo "selected"; ?>>6월</option>
    <option value="7월"  <?php if($addrprt == "7월") echo "selected"; ?>>7월</option>
    <option value="8월"  <?php if($addrprt == "8월") echo "selected"; ?>>8월</option>
    <option value="9월"  <?php if($addrprt == "9월") echo "selected"; ?>>9월</option>
    <option value="10월"  <?php if($addrprt == "10월") echo "selected"; ?>>10월</option>
    <option value="11월"  <?php if($addrprt == "11월") echo "selected"; ?>>11월</option>
    <option value="12월"  <?php if($addrprt == "12월") echo "selected"; ?>>12월</option>

    
</select>
</div>
<div>
<input type="submit" value="수정">
</div>
</form>

</body>
</html>