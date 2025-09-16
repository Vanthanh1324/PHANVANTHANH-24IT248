<?php
$so_dau = "";
$so_cuoi = "";
$tong = "";
$tich = "";
$tong_chan = "";
$tong_le = "";

if (isset($_POST["button"])) {
    $so_dau = $_POST["so_dau"];
    $so_cuoi = $_POST["so_cuoi"];

    if (is_numeric($so_dau) && is_numeric($so_cuoi)) {
        $start = intval($so_dau);
        $end = intval($so_cuoi);

        if ($start <= $end) {
            $tong = 0;
            $tich = 1;
            $tong_chan = 0;
            $tong_le = 0;

            for ($i = $start; $i <= $end; $i++) {
                $tong += $i;
                $tich *= $i;
                if ($i % 2 == 0) {
                    $tong_chan += $i;
                } else {
                    $tong_le += $i;
                }
            }
        } else {
            $tong = "S? b?t d?u ph?i nh? hon ho?c b?ng s? k?t thúc.";
            $tich = "";
            $tong_chan = "";
            $tong_le = "";
        }
    } else {
        $tong = "Vui lòng nh?p s? h?p l?.";
        $tich = "";
        $tong_chan = "";
        $tong_le = "";
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

<form action="tong_for.php" method="post">
<table width="728" border="1">
<tr>
<td width="122">&nbsp;</td>
<td width="76">So bat dau</td>
<td width="169"><label for="textfield"></label>
<input type="text" name="so_dau" id="textfield" value="<?php echo $so_dau; ?>"/></td>
<td width="152">S? ket thuc</td>
<td width="175"><label for="textfield2"></label>
<input type="text" name="so_cuoi" id="textfield2" value="<?php echo $so_cuoi; ?>"/></td>
</tr>
<tr>
<td colspan="5">Ket qua
<label for="textfield3"></label></td>
</tr>
<tr>
<td>Tong cac so</td>
<td colspan="4"><label for="textfield4"></label>
<input type="text" name="tong" id="textfield4" value="<?php echo $tong; ?>" readonly="readonly"/></td>
</tr>
<tr>
<td>Tich cac so</td>
<td colspan="4"><label for="textfield5"></label>
<input type="text" name="tich" id="textfield5" value="<?php echo $tich; ?>" readonly="readonly"/></td>
</tr>
<tr>
<td>Tong cac so chan</td>
<td colspan="4"><label for="textfield6"></label>
<input type="text" name="tong_chan" id="textfield6" value="<?php echo $tong_chan; ?>" readonly="readonly"/></td>
</tr>
<tr>
<td>Tong cac so le</td>
<td colspan="4"><label for="textfield7"></label>
<input type="text" name="tong_le" id="textfield7" value="<?php echo $tong_le; ?>" readonly="readonly"/></td>
</tr>
<tr>
<td colspan="5"><input type="submit" name="button" id="button" value="Tinh toan" /></td>
</tr>
</table>
</form>
</body>
</html>