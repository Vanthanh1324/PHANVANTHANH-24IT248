<?php
$a = "";
$b = "";
$kq = "";

if (isset($_POST['chao'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if (!is_numeric($a) || !is_numeric($b)) {
        $kq = "Vui lòng nh?p s? h?p l? cho a và b.";
    } else {
        $a = (float)$a;
        $b = (float)$b;

        if ($a == 0) {
            if ($b == 0) {
                $kq = "Phuong trình có vô s? nghi?m.";
            } else {
                $kq = "Phuong trình vô nghi?m.";
            }
        } else {
            $x = -$b / $a;
            $kq = "Nghi?m X = " . $x;
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chao cac ban</title>
</head>

<body>
<form name="giaipt" action="vidu.php" method="post">
<table width="744" border="1">
<tr>
<td colspan="3" bgcolor="#336699"><strong>Giai phuong trinh bac 1 </strong></td>
</tr>
<tr>
<td width="120">Phuong trinh </td>
<td width="250">
<input name="a" type="text" value="<?php echo $a; ?>" />
X + </td>
<td width="352"><label for="textfield"></label>
<input name="b" type="text" id="textfield" value="<?php echo $b; ?>" />
= 0</td>
</tr>
<tr>
<td colspan="3">
Nghiem
<label for="textfield2"></label>
<input name="kq" type="text" id="textfield2" value="<?php echo $kq; ?>" readonly="readonly" /></td>
</tr>
<tr>
<td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuat" /></td>
</tr>
</table>
</form>
</body>
</html>