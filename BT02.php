// 1
<?php
$chuoi = "thực hành php";
$soKyTu = strlen($chuoi);
echo "Số ký tự trong chuỗi là: $soKyTu";
?>

// 2
<?php
$chuoi = "thực hành php";
$soTu = str_word_count($chuoi);
echo "Số từ trong chuỗi là: $soTu";
?>

// 3
<?php
$chuoi = "thực hành php";
$chuoiDaoNguoc = strrev($chuoi);
echo "Chuỗi sau khi đảo ngược là: $chuoiDaoNguoc";
?>

// 4
<?php
$chuoi = "thực hành php";
$viTri = strpos($chuoi, "hành");
if ($viTri !== false) {
    echo "Chuỗi 'hành' được tìm thấy tại vị trí: $viTri";
} else {
    echo "Chuỗi 'hành' không được tìm thấy.";
}
?>

// 5
<?php
$chuoi = "thực hành php";
$chuoiMoi = str_replace("php", "PHP", $chuoi);
echo "Chuỗi sau khi thay thế là: $chuoiMoi";
?>

// 6
<?php
$chuoi = "thực hành php";
$batDauBang = strncmp($chuoi, "thực", 4) === 0;
if ($batDauBang) {
    echo "Chuỗi bắt đầu bằng 'thực'.";
} else {
    echo "Chuỗi không bắt đầu bằng 'thực'.";
}
?>

// 7
<?php
$chuoi = "thực hành php";
$chuoiHoa = strtoupper($chuoi);
echo "Chuỗi sau khi chuyển thành chữ hoa là: $chuoiHoa";
?>

// 8
<?php
$chuoi = "THỰC HÀNH PHP";
$chuoiThuong = strtolower($chuoi);
echo "Chuỗi sau khi chuyển thành chữ thường là: $chuoiThuong";
?>

// 9
<?php
$chuoi = "thực hành php";
$chuoiUcwords = ucwords($chuoi);
echo "Chuỗi sau khi chuyển thành chữ in hoa đầu mỗi từ là: $chuoiUcwords";
?>

// 10
<?php
$chuoi = "   thực hành php   ";
$chuoiTrim = trim($chuoi);
echo "Chuỗi sau khi loại bỏ khoảng trắng là: '$chuoiTrim'";
?>

// 11
<?php
$chuoi = "thực hành php";
$chuoiLtrim = ltrim($chuoi, "t");
echo "Chuỗi sau khi loại bỏ ký tự đầu tiên là: '$chuoiLtrim'";
?>

// 12
<?php
$chuoi = "thực hành php";
$chuoiRtrim = rtrim($chuoi, "p");
echo "Chuỗi sau khi loại bỏ ký tự cuối cùng là: '$chuoiRtrim'";
?>

// 13
<?php
$chuoi = "thực, hành, php";
$mang = explode(", ", $chuoi);
print_r($mang);
?>

// 14
<?php
$mang = ["thực", "hành", "php"];
$chuoi = implode(" ", $mang);
echo "Chuỗi sau khi nối là: '$chuoi'";
?>

// 15
<?php
$chuoi = "thực hành";
$chuoiPad = str_pad($chuoi, 15, " php", STR_PAD_RIGHT);
echo "Chuỗi sau khi thêm vào là: '$chuoiPad'";
?>

// 16
<?php
$chuoi = "thực hành php";
$ketThucBang = strrchr($chuoi, "php") !== false;
if ($ketThucBang) {
    echo "Chuỗi kết thúc bằng 'php'.";
} else {
    echo "Chuỗi không kết thúc bằng 'php'.";
}
?>

// 17
<?php
$chuoi = "thực hành php";
$chuaChuoiCon = strstr($chuoi, "hành") !== false;
if ($chuaChuoiCon) {
    echo "Chuỗi có chứa 'hành'.";
} else {
    echo "Chuỗi không chứa 'hành'.";
}
?>

// 18
<?php
$chuoi = "thực hành php!";
$chuoiThayThe = preg_replace("/[^a-zA-Z0-9]/", "-", $chuoi);
echo "Chuỗi sau khi thay thế là: $chuoiThayThe";
?>

// 19
<?php
$chuoi = "12345";
$laSoNguyen = is_int((int)$chuoi);
if ($laSoNguyen) {
    echo "'$chuoi' là một số nguyên.";
} else {
    echo "'$chuoi' không phải là một số nguyên.";
}
?>

// 20
<?php
$chuoi = "thuchanh@gmail.com";
$laEmailHopLe = filter_var($chuoi, FILTER_VALIDATE_EMAIL) !== false;
if ($laEmailHopLe) {
    echo "'$chuoi' là một email hợp lệ.";
} else {
    echo "'$chuoi' không phải là một email hợp lệ.";
}
?>

