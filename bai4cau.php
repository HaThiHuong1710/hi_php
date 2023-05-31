câu 3: kiểm tra năm nay là năm chẵn hay năm lẻ in ra màn hình kết quả chẵn hay lẻ
$nam = 2023;
$so_du = $nam % 2;
if ($so_du == 0){
    echo 'năm'. $nam.'là năm chẵn';
}
else{
    echo'năm'. $năm.'là năm lẻ'
}
câu 4:viết chương trình php sử dụng câu lệnh vòng lặp for để in ra số từ 1 đến 100
<?php
for($i =0;$i<100;$i++){
    echo"số:".($i+1)."<br>";

}
?>
câu 5:viết trang php hiển thị dãy số từ 1 đến 100 sao cho số chẵn in đậm số lẻ in thường
function displayNumbers() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<b>$i</b> ";
        } else {
            echo $i . " ";
        }
    }
}
displayNumbers();
câu 6:
function displayYears($years) {
    foreach ($years as $year) {
        echo $year . " ";
    }
}
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
displayYears($nam);
