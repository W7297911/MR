<?php
include_once("top.php");
?>
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right">�����ǣ�&nbsp;<script language=JavaScript>
   today=new Date();
   function initArray(){
   this.length=initArray.arguments.length
   for(var i=0;i<this.length;i++)
   this[i+1]=initArray.arguments[i]  }
   var d=new initArray(
     "������",
     "����һ",
     "���ڶ�",
     "������",
     "������",
     "������",
     "������");
document.write(
     "<font color=#000000 style='font-size:9pt;font-family: ����'> ",
     today.getYear(),"��",
     today.getMonth()+1,"��",
     today.getDate(),"��",
	  "&nbsp;&nbsp;",
     d[today.getDay()+1],
	"</font>" ); 
</script></div></td>
    <td width="487" background="images/dh_back.gif"><div align="center">����ǰ��λ�ã��������Ա�&nbsp;>>&nbsp;<a href="reg.php" class="a1">�û�ע��</a></div></td>
  </tr>
</table>
<table width="779" height="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
    <td width="200" valign="top"><?php include_once("left.php");?></td>
    <td width="6" bgcolor="#FAF3CE"></td>
    <td  valign="top"><table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" height="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
        <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif">&nbsp;�û�ע��</td>
              </tr>
            </table>
			
			 <br>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
              </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
            </table>
           
              <table width="480" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                      <font color="#0000FF">ע������:</font>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <br>
                    
                    ��1��ɿ�����ܡ��ƻ��ܷ��ͷ��ɡ���������ʵʩ�ģ�<br>
                    ��2��ɿ���߸�������Ȩ���Ʒ���������ƶȵģ�<br>
                    ��3���������������ʵ��ɢ��ҥ�ԣ������������ģ�<br><br>
                   </td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
              
			
			 <script language="javascript">
			 
			   function chkinput(form){
			    
				 if(form.usernc.value==""){
				   alert("�������û��ǳƣ�");   
				   form.usernc.focus();
				   return(false);
				 }
				 
				 if(form.userpwd.value==""){
				 
				   alert("������ע�����룡");   
				   form.userpwd.focus();
				   return(false);
				 
				 }
				 
				  if(form.userpwd1.value==""){
				 
				   alert("�������ظ����룡");   
				   form.userpwd1.focus();
				   return(false);
				 
				 }
				 if(form.userpwd.value!=form.userpwd1.value){
				 
				   alert("������ȷ�����벻ͬ��");   
				   form.userpwd.focus();
				   return(false); 
				 
				 }
				 
				 if(form.userpwd.value.length<6){
				 
				   alert("���볤��Ӧ����6λ��");   
				   form.userpwd.focus();
				   return(false); 
				 
				 }
				 
				 if(form.truename.value==""){
				   alert("��������ʵ������");
				   form.truename.focus();
				   return(false);
				 }
				 if(form.sex.value==""){
				   alert("��ѡ���Ա�");
				   form.sex.focus();
				   return(false);
				 }
				 
				 if(form.email.value==""){
	               alert("������E-mail��ַ!");
	               form.email.focus();
	               return(false);
	             }
				
	             var i=form.email.value.indexOf("@");
	             var j=form.email.value.indexOf(".");
	             if((i<0)||(i-j>0)||(j<0)){
                   alert("��������ȷ��E-mail��ַ!");
	               form.email.select();
	               return(false);
	             }
				 
				 if(form.tel.value==""){
				   alert("��������ϵ�绰��");
				   form.tel.focus();
				   return(false);
				 } 
				 
				 if(isNaN(form.tel.value)){
				   alert("��ϵ�绰ֻ��Ϊ���֣�");
				   form.tel.focus();
				   return(false);
				 }
				 
				 if(form.qq.value==""){
				   alert("��������ϵQQ��");
				   form.qq.focus();
				   return(false);
				 } 
				 
				 if(isNaN(form.qq.value)){
				   alert("QQֻ��Ϊ���֣�");
				   form.qq.focus();
				   return(false);
				 }
				 
				 

			     if(form.address.value==""){
				   alert("��������ϵ��ַ��");
				   form.address.focus();
				   return(false);
				 } 
			  
			    return(true);
			     
			   }
			  
			  </script>
			
			
			
			
			  
			  <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
			    <tr>
                  <td width="110" height="30"><div align="center">�û��ǳƣ�</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="usernc" size="25" class="inputcss"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">��&nbsp;&nbsp;�룺</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="password" name="userpwd" size="25" class="inputcss"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">�ظ����룺</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="password" name="userpwd1" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">��ʵ������</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="truename" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">��&nbsp;&nbsp;��</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <select name="sex">
                        <option value="">��ѡ��</option>
                        <option value="��">��</option>
                        <option value="Ů">Ů</option>
                      </select>                  </td>
                </tr>
                <tr>
                  <td height="30"><div align="center">E-mail��ַ��</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="email" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">��ϵ�绰��</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="tel" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">QQ���룺</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="qq" size="25" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">ͷ��ѡ��</div></td>
                  <td width="90" height="30">&nbsp;
				  <select name="face" onchange="form1.user_face.src=this.value">
                      <?php
					  for($i=0;$i<=11;$i++){
					  ?>
					   <option value="<?php echo "images/face/".$i.".gif"?>"><?php echo $i.".gif"?></option>
					  <?php
					  }
					  ?>
                  </select></td>
                  <td width="280">
                  <div align="left"><img id=user_face src="images/face/0.gif" width="60" height="60"></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">��ϵ��ַ��</div></td>
                  <td height="30" colspan="2">&nbsp;
                      <input type="text" name="address" size="35" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="45" colspan="3"><div align="center">
                    <input name="submit" type="submit" class="buttoncss" value="ע��">
                    &nbsp;&nbsp;&nbsp;
                    <input name="reset" type="reset" class="buttoncss" value="��д">
                  </div></td>
                </tr>
		      </form>
				
            </table></td>
        </tr>
      </table></td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
s
<?php
include_once("bottom.php");
?>