<?php
$a = "";
$b = "";
$c = "";
$kq = "";

if (isset($_POST["chao"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        $a = floatval($a);
        $b = floatval($b);
        $c = floatval($c);

        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    $kq = "Phuong trình có vô s? nghi?m.";
                } else {
                    $kq = "Phuong trình vô nghi?m.";
                }
            } else {
                $x = -$c / $b;
                $kq = "Phuong trình b?c 1, nghi?m x = " . $x;
            }
        } else {
            $d = $b * $b - 4 * $a * $c;
            if ($d > 0) {
                $x1 = (-$b + sqrt($d)) / (2 * $a);
                $x2 = (-$b - sqrt($d)) / (2 * $a);
                $kq = "Nghi?m x1 = " . $x1 . ", x2 = " . $x2;
            } elseif ($d == 0) {
                $x = -$b / (2 * $a);
                $kq = "Nghi?m kép x = " . $x;
            } else {
                $kq = "Phuong trình vô nghi?m th?c.";
            }
        }
    } else {
        $kq = "Vui lòng nh?p s? h?p l?.";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="giai_pt_bac_2.php" method="post">
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giai phuong trinh bac 2</strong></td>
</tr>
<tr>
<td width="83">Phuong trinh </td>
<td width="236">
<input name="a" type="text" value="<?php echo $a; ?>" />
    X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" value="<?php echo $b; ?>" />
      X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" value="<?php echo $c; ?>" />
      =0</td>
</tr>
<tr>
<td colspan="4">
  Nghiem 
<label for="textfield2"></label>
<input name="kq" type="text" id="textfield2" style="width:400px" value="<?php echo $kq; ?>" readonly="readonly" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuat" /></td>
</tr>
</table>
</form>
</body>
</html>