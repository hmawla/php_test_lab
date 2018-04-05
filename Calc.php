<html>
<head>
<title>Simple Calculator</title>
<?php session_start(); ?>
</head>

<body>
<form name="frm" method="GET" action="process.php">
<table>
<tr>
 <td>Number1</td>
 <td><input type="text" name="N1" size="12"
      value="<?php if(isset($_SESSION['N1'])) echo $_SESSION['N1'];$_SESSION['N1']='';?>" />
      </td>
</tr>

<tr>
 <td>Number2</td>
 <td><input type="text" name="N2" size="12" 
      value="<?php if(isset($_SESSION['N2'])) echo $_SESSION['N2'];$_SESSION['N2']='';?>"/>
 </td>
</tr>

<tr>
 <td>Sum</td>
 <td><input type="text" name="S" size="12"  
     value="<?php if(isset($_SESSION['S'])) echo $_SESSION['S'];$_SESSION['S']=''; ?>"/>
 </td>
</tr>

<tr>
 <td colspan="2" align="center">
  <input type="reset" value=" Clear " />
  &nbsp;&nbsp;   
  <input type="submit" value="Calculate" />
 </td>
</tr>
</table>

</form>
</body>