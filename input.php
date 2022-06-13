<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보입력</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
책이름<input type="text" name="num">
</div>
<div>
저자<input type="text" name="name"><br>
</div>
<div>
출판사
    <input type="radio" name="major" value="위즈덤하우스">위즈덤하우스 
    <input type="radio" name="major" value="미디어그룹">미디어그룹 
    <input type="radio" name="major" value="시공사">시공사
    <input type="radio" name="major" value="문학동네">문학동네 
    <input type="radio" name="major" value="북이십일">북이십일 
    <input type="radio" name="major" value="김영사">김영사
    <input type="radio" name="major" value="창비">창비 
    <input type="radio" name="major" value="웅진씽크빗">웅진씽크빗 
    <input type="radio" name="major" value="도서출판길벗">도서출판길벗
</div>
<div>
발행일
<select name="addr">
    <option value="1월">1월</option>
    <option value="2월">2월</option>
    <option value="3월">3월</option>
    <option value="4월">4월</option>
    <option value="5월">5월</option>
    <option value="6월">6월</option>
    <option value="7월">7월</option>
    <option value="8월">8월</option>
    <option value="9월">9월</option>
    <option value="10월">10월</option>
    <option value="11월">11월</option>
    <option value="12월">12월</option>

</select>
</div>
<div>
<input type="submit">
</div>
</form>

</body>
</html>