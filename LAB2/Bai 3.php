<?php
$so = "";
$chu = "";

if (isset($_POST["button"])) {
    if (isset($_POST["so"])) {
        $so = $_POST["so"];
        if (is_numeric($so)) {
            $so_num = intval($so);
            if ($so_num >= 0 && $so_num <= 9) {
                switch ($so_num) {
                    case 0:
                        $chu = "Không";
                        break;
                    case 1:
                        $chu = "M?t";
                        break;
                    case 2:
                        $chu = "Hai";
                        break;
                    case 3:
                        $chu = "Ba";
                        break;
                    case 4:
                        $chu = "B?n";
                        break;
                    case 5:
                        $chu = "Nam";
                        break;
                    case 6:
                        $chu = "Sáu";
                        break;
                    case 7:
                        $chu = "B?y";
                        break;
                    case 8:
                        $chu = "Tám";
                        break;
                    case 9:
                        $chu = "Chín";
                        break;
                }
            } else {
                $chu = "Không h?p l?";
            }
        } else {
            $chu = "Không h?p l?";
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuat so thanh chu</title>
</head>

<body>
<form action="xuat_so_thanh_chu.php" method="POST">
<table width="519" border="1">
<tr>
<td colspan="3">Doc so</td>
</tr>
<tr>
<td>Nhap so (0-9)</td>
<td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
<td>Bang chu</td>
</tr>
<tr>
<td width="177"><p>
<label for="textfield"></label>
<input type="text" name="so" id="textfield" value="<?php echo $so; ?>" />
</p></td>
<td width="232"><label for="textfield2"></label>
<input type="text" name="chu" id="textfield2" value="<?php echo $chu; ?>" readonly="readonly" /></td>
</tr>
</table>
</form>
</body>
</html>