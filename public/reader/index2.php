<form name="form1" method="post" action="index3.php">
  <table width="300" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height= "30">&nbsp;&nbsp;订单号：
        <input type="text" name="user" size="20">
        <input type="submit" name="submit" value="提交">
      </td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
    用户名：<input type="text" name="user" size="20"><p>
      密&nbsp;&nbsp;&nbsp;码：<input name="pwd" type="password" id="pwd" size="20">
      <input name="submit" type="submit" id="submit" value="登录"/>
</form> -->
<!-- <?php
if (isset($_POST["submit"])&&$_POST["submit"]=="登录") {//判断提交的按钮名称是否等于“登录”
  echo "您输入的用户名为：".$_POST['user']."&nbsp;&nbsp;密码为：".$_POST['pwd'];
  # code...
}
 ?>
