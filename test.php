<?php
header('Content-Type: text/html; charset=utf-8');
$conn = mysqli_connect("localhost","root","","cellphone");
mysqli_set_charset($conn,"utf8");
$tskt = '[{"name":"Kích thước màn hình","value":"6.2 inches"},{"name":"Công nghệ màn hình","value":"IPS LCD"},{"name":"Camera sau","value":"Camera kép 12MP: - Camera góc rộng: ƒ/1.8 aperture - Camera siêu rộng: ƒ/2.4 aperture"},{"name":"Camera trước","value":"12 MP, ƒ/2.2 aperture"},{"name":"Chipset","value":"A13 Bionic"},{"name":"Dung lượng RAM","value":"4 GB"},{"name":"Bộ nhớ trong","value":"64 GB"},{"name":"Pin","value":"3110 mAh"},{"name":"Thẻ SIM","value":"Nano-SIM + eSIM"},{"name":"Hệ điều hành","value":"iOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)"},{"name":"Độ phân giải màn hình","value":"1792 x 828 pixel"},{"name":"Tính năng màn hình","value":"True-tone"},{"name":"Loại CPU","value":"Hexa-core"},{"name":"GPU","value":"Apple GPU"},{"name":"Quay video","value":"Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps"},{"name":"Quay video trước","value":"4K@24/30/60fps, 1080p@30/60/120fps, gyro-EIS"},{"name":"Kích thước","value":"150.9mm - 75.7mm - 8.3mm"},{"name":"Trọng lượng","value":"194 g"},{"name":"Chất liệu mặt lưng","value":"Kính"},{"name":"Chất liệu khung viền","value":"Kim loại"},{"name":"Công nghệ sạc","value":"Sạc nhanh 18WPower Delivery 2.0"},{"name":"Cổng sạc","value":"Lightning"},{"name":"Hồng ngoại","value":"Không"},{"name":"Jack tai nghe 3.5","value":"Không"},{"name":"Cảm biến vân tay","value":"Không"},{"name":"Các loại cảm biến","value":"Cảm biến ánh sáng, Cảm biến áp kế, Cảm biến gia tốc, Cảm biến tiệm cận, Con quay hồi chuyển, La bàn"},{"name":"Công nghệ NFC","value":"Có"},{"name":"Khe cắm thẻ nhớ","value":"Không"},{"name":"Wi-Fi","value":"802.11ax Wi‑Fi 6 with 2x2 MIMO"},{"name":"Bluetooth","value":"5.0"},{"name":"GPS","value":"GPS/GNSS"},{"name":"Kiểu màn hình","value":"Tai thỏ"},{"name":"Tính năng camera","value":"Chụp góc rộng, Chụp xóa phông, Chụp Zoom xa, Chống rung, Quay video 4K"},{"name":"Tính năng đặc biệt","value":"Sạc không dây"}]';

$tskt = json_encode($tskt);
$tskt = htmlspecialchars($tskt, ENT_NOQUOTES, "UTF-8");
$sql_tskt = "UPDATE cp_property_values SET `value` = '$json_string',`key_property` = 'tskt' WHERE product_id=1";

mysqli_query($conn,$sql_tskt);

echo $sql_tskt;

?>