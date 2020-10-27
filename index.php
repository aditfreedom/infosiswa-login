<?
require_once('require/config.php');
?>
<html>
<head>
<link rel="icon" href="ssb.png" type="image/png">
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2d7830743a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <title>Info Siswa SSB <?= $LOKASI ?></title>

</head>


<script language="JavaScript">
function cek_form() {
      var user,pass;

      user = document.form.username.value;
      pass = document.form.password.value;

        if(user.length == 0 || pass.length == 0) {
            alert("Anda harus mengisi username dan password sebelum masuk ke dalam sistem!");
            document.form.username.value = "";
            document.form.password.value = "";
            document.form.focus();
            return false;
        }
        return true;
    }
</script>
<div class="limiter">
<body class="primcol">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent position-sticky " id="nav">
        <div class="container">
        <a class="navbar-brand font-weight-bold text-info" href="#"> <img src="ssb1.png" width="50px" height="50px"> SISTEM INFORMASI SEKOLAH TERPADU ONLINE</img></a>      
    </div>
      </nav>


<div class="jumbotron"  style="background-image: url('landing2.png');">
<div class="container">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td valign="bottom" align="center">
    <table border="0">
    <tr><td></td></tr>
    </table>
    </td>
</tr>
<tr>
    <td valign="middle" align="center">
    <h1 class="display-4 text-info  animate__animated animate__backInLeft text-left">INFOSISWA<br><span class="font-weight-bold">SEKOLAH SUKMA BANGSA<BR>BIREUEN</span> </h1>
    <hr class="my-4 animate__animated animate__backInLeft">
    <div class="container shadow p-3 mb-5 bg-white rounded float-left" style="width:380px;" align="center">
    <form action="redirect.php" method="post" name="form" onSubmit="return cek_form();">
    <table width="320" height="200" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="80" height="70" valign="center" colspan="2">
             <input name="action" type="hidden" id="action" value="login">
             <img class="img mx-auto d-block" src="logo.png" width="100px">
             <h6 class="text-center font-weight-bold">SILAHKAN LOGIN</h6></td>
    	<tr>
    	<tr>
            
    		<td height="40" valign="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="N I S" name="username" required>
            </div>
            </td>
    	<tr>
    		<td height="40" valign="center">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="P I N" name="password" required>
            </div>
    	</tr>
    	<tr>
    		<td height="40" colspan="2"  align="right">
                <!--<input type="image" name="login" src="images/login.png" width="65" height="65">-->
                <button type="submit" name="Submit" id="Submit" class="btn btn-info btn-block font-weight-bold" style="height:50px;">LOGIN</button>
                <!-- <input name="Submit" type="submit" class="but" id="Submit" value="Login"> -->
               <!-- <center><? if(!empty($_GET['msg'])) echo "<font color=red>".$_GET['msg']."</font> "; ?></center> <br> -->
            </td>
    	</tr>
    </table></form>
</table>
</div>
</div>
<div class="d-flex p-2 justify-content-center bg-dark text-white"><b>Copyright &copy; 2006 SISTO Sekolah Sukma Bangsa | version <?= $G_VERSION ?> build date <?= $G_BUILDDATE ?></div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

