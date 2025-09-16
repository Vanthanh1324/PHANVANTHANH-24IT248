<?php
$ket_qua = 0;
$mang_so = array();
$nhap_mang = "";

if(isset($_POST['btn_goi'])){
    $nhap_mang = $_POST['nhap_mang'];
    $mang_so = explode(",", $nhap_mang);
    $n = count($mang_so);
    for($i = 0; $i < $n; $i++){
        $ket_qua += $mang_so[$i];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nhap và tinh toan tren day so</title>
    <meta charset="utf-8">
    <style>
    *{
        font-family: Tahoma;
    }
    table{
        width: 400px;
        margin: 100px auto;
    }
    table th{
        background: #66CCFF;
        padding: 10px;
        font-size: 18px;
    }
    </style>
</head>
<body>
    <form method="POST" action="mang-1.php">
        <table>
            <thead>
                <tr>
                    <th colspan="2">NHAP VA TINH TREN DAY SO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhap day so:</td>
                    <td><input type="text" name="nhap_mang" value="<?php echo $nhap_mang; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_goi" value="Tong day so" ></td>
                </tr>
                <tr>
                    <td>Tong day so:</td>
                    <td><input type="text" name="ket_qua" disabled="disabled" value="<?php echo $ket_qua; ?>" ></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>