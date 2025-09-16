<?php
$ten = "";
$xuat_ten = "";

if (isset($_POST["chao"])) {
    $ten = $_POST["ten"];
    $xuat_ten = "Chào b?n " . $ten;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chao cac ban</title>
</head>

<body>
<form action="vidu.php" method="post">
<table width="271" border="1">
<tr>
<td colspan="2" bgcolor="#336699"><strong>In loi chao</strong></td>
</tr>
<tr>
<td width="91">Ho ten ban</td>
<td width="164">
<input type="text" name="ten" id="chao3" value="<?php echo $ten; ?>" /></td>
</tr>
<tr>
<td colspan="2">
<label><?php echo $xuat_ten; ?></label></td>
</tr>
<tr>
<td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuat" /></td>
</tr>
</table>
</form>
</body>
</html>