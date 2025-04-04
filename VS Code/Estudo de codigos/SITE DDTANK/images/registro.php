<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="https://image.freepik.com/icones-gratis/jogos-top-star_318-57125.jpg">
  <title>Registro Crazzy</title>



<body style="background-image:url(https://4.bp.blogspot.com/-55d1GMPbF1Q/WhJa_EE6pcI/AAAAAAAACuk/jUiH7533LGkLEp8oThExp1N0wUJ6ENhWQCLcBGAs/s1600/A1.jpg)">



  <style type="text/css">
    body {
      background-image: url(images/bgnova.jpeg);
      background-color: #000;
      font-color: #fff;
      background-repeat: x, y;
      margin: 0;
      padding: 0;



    }

    body,
    td,
    th {
      font-size: 14px;
      color: #fff;
    }

    .frm input {
      /* Size and position */
      padding: 3px 3px;

      /* Styles */
      background: #1f2124;
      /* Fallback */
      background: -moz-linear-gradient(#1f2124, #27292c);
      background: -ms-linear-gradient(#1f2124, #27292c);
      background: -o-linear-gradient(#1f2124, #27292c);
      background: -webkit-gradient(linear, 0 0, 0 100%, from(#1f2124), to(#27292c));
      background: -webkit-linear-gradient(#1f2124, #27292c);
      background: linear-gradient(#1f2124, #27292c);
      border: 2px solid #FFF;

      border-radius: 8px;

      /* Font styles */
      font-family: 'Ubuntu', 'Lato', sans-serif;
      font-weight: bold;
      background: #FFF;
      box-shadow: inset 0 0 4px #e6e4e4;
      border-color: #FFF;
    }

    .frm input:focus {
      box-shadow: inset 0 0 4px #e6e4e4;
      border-color: #000;
      outline: none;
      /* Remove Chrome outline */
    }

    .button {
      cursor: pointer;
      box-shadow: inset 0 0 4px #e6e4e4;
      border-color: #FFF;
      outline: none;
      /* Remove Chrome outline */
    }

    .button:hover {
      cursor: pointer;
      box-shadow: inset 0 0 4px #e6e4e4;
      border-color: #000;
      outline: none;
      /* Remove Chrome outline */
    }
  </style>
  <script>
    function bannedKey(evt, en, th, num, space) {
      //ex.  onKeypress="bannedKey(event,'yes','no','yes','no')"
      var key;
      var ret;
      if (window.event) {
        key = window.event.keyCode;
        ret = "window.event.returnValue = false;";
      } else if (evt) {
        key = evt.which;
        ret = "keyPressed = evt.preventDefault()";
      }
      if (key != 8 && key != 0) {

        if (num == 'yes') {
          if (key >= 48 && key <= 57) {
            boo1 = true;
          } else {
            boo1 = false;
          }
        } else {
          boo1 = false;
        }
        if (en == 'yes') {
          if ((key >= 65 && key <= 90) || (key >= 97 && key <= 122)) {
            boo2 = true;
          } else {
            boo2 = false;
          }
        } else {
          boo2 = false;
        }
        if (th == 'yes') {
          if ((key >= 161 && key <= 255) || (key >= 3585 && key <= 3675)) {
            boo3 = true;
          } else {
            boo3 = false;
          }
        } else {
          boo3 = false;
        }
        if (space != 'no') {
          if (key == 32) {
            boo4 = true;
          } else {
            boo4 = false;
          }
        } else {
          boo4 = false;
        }

        a = boo1 || boo2 || boo3 || boo4;
        if (a == false) {
          eval(ret);
        }
      }
    }
  </script>




  </head>

  <body>

    <table width="1122" height="719" border="0" cellspacing="0" cellpadding="0" class="register">
      <tr>

        <td>
          <form class="frm" name="frm" action="" method="POST">
            <center>
              <table width="320" border="0" cellpadding="0" cellspacing="0">
                <tr><!-- -->
                  <td class="style1" align="right">Login :</td>
                  <td align="left"><input name="username" type="text" class="textfield" size="24" maxlength="15" onKeypress="bannedKey(event,'yes','no','yes','no')" /></td>
                </tr>
                <tr height="2">
                </tr>
                <tr>
                  <td class="style1" align="right">Senha :</td>
                  <td align="left"><input name="password" type="password" class="textfield" size="24" maxlength="15" onKeypress="bannedKey(event,'yes','no','yes','no')" /></td>
                </tr>
                <tr height="2">
                </tr>
                <tr>
                  <td class="style1" align="right">Senha novamente :</td>
                  <td align="left"><input name="repassword" type="password" class="textfield" id="repassword" size="24" maxlength="15" onKeypress="bannedKey(event,'yes','no','yes','no')" /></td>
                </tr>
                <tr height="2">
                </tr>
                <tr>
                  <td class="style1" align="right">Sexo:</td>
                  <td class="style2" align="left"><input name="sexo" type="radio" value="1" checked="checked" />
                    Masculino
                    <input name="sexo" type="radio" value="0" />
                    Feminino
                  </td>
                </tr>
                <tr height="2">
                </tr>
                <tr>
                  <td class="style1" align="right">NickName:</td>
                  <td align="left"><input name="char" type="text" class="textfield" size="24" maxlength="15" onKeypress="bannedKey(event,'yes','yes','yes','no')" /></td>
                </tr>

              </table>
              <span class="style1">
                <center></center>
              </span><br /><!-- -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" class="button" value="REGISTRAR" style="padding: 9px 9px;">
              <input name="Reset" type="reset" class="button" id="button" value="LIMPAR" style="padding: 9px 19px;" />
              <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://149.56.228.56/"><img src="http://i55.tinypic.com/34ioinl.png" /></a>
            </center>
          </form><br />
          <?php
          if ($_POST["submit"]) {
            $username = $_POST["username"];
            $senha = $_POST["password"];
            $resenha = $_POST["repassword"];
            $sexo = $_POST["sexo"];
            $nickname = $_POST["char"];
            define('HOST', 'FamilyTank\SQL');
            define('D_DB', 'Db_Tank55');
            define('USER', 'sa');
            define('PASS', '@Familytank123');
            $conn = odbc_connect("Driver={SQL Server};Server=" . HOST . ";Database=" . D_DB . ";", USER, PASS);
            $verlogin = odbc_num_rows(odbc_exec($conn, "SELECT * FROM Sys_Users_Detail WHERE UserName = '$username'"));
            $vernickname = odbc_num_rows(odbc_exec($conn, "SELECT * FROM Sys_Users_Detail WHERE NickName = '$nickname'"));
            if (empty($username) || empty($senha) || empty($resenha) || empty($nickname)) {
              echo "<div align='center'>Todos os campos devem ser preenchidos corretamente.</div>";
            } elseif ($verlogin > 0) {
              echo ("<div align='center'>Este nome de usuário já está sendo utilizado!</div");
            } elseif ($vernickname > 0) {
              echo ("<div align='center'>Este apelido já está sendo utilizado!</div");
            } elseif (strlen($username) < 5) {
              echo ("<div align='center'>É necessário ter no mínimo 5 digitos e no máximo 15 digitos no Nome de Usuário.</div");
            } elseif (strlen($nickname) < 4) {
              echo ("<div align='center'>É necessário ter no mínimo 4 digitos e no máximo 15 digitos no Apelido.</div");
            } elseif (strlen($senha) < 5 || strlen($resenha) < 5) {
              echo ("<div align='center'>É necessário ter no mínimo 5 digitos e no máximo 15 digitos na senha.</div");
            } elseif ($senha != $resenha) {
              echo ('As duas senhas digitadas não se coincidem!');
            } else {
              $cadastro_cupons = 500;
              $cadastro_gold = 999999999;
              $cadastro_money = 30000;
              odbc_exec($conn, "exec Db_Membership.dbo.Mem_Users_CreateUser @ApplicationName=N'DanDanTang',@UserName=N'" . $username . "',@password=N'" . strtoupper(md5($senha)) . "',@email=N'stwtank@hotmail.com',@PasswordFormat=N'1',@PasswordSalt=N'MD5',@UserSex='" . $sexo . "',@UserId=''");
              odbc_exec($conn, "exec Db_Membership.dbo.Mem_Users_Accede @ApplicationName=N'DanDanTang',@UserName=N'" . $username . "',@password=N'" . strtoupper(md5($senha)) . "',@UserId=''");
              odbc_exec($conn, "exec Db_Tank55.dbo.SP_Users_Active @UserID='',@Attack=0,@Colors=N',,,,,,',@ConsortiaID=0,@Defence=0,@Gold=$cadastro_gold,@GP=10000000,@Grade=4,@Luck=20000,@Money=$cadastro_money,@Style=N',,,,,,',@Agility=0,@State=0,@UserName=$username,@PassWord=N'" . strtoupper(md5($senha)) . "',@Sex=$sexo,@Hide=1111111111,@ActiveIP=N'',@Skin=N'',@Site=N'',@MagicAttack='',@evolutionGrade='',@evolutionExp='',@MagicDefence=''");

              if ($_POST['sexo'] == 1) {
                odbc_exec($conn, "exec Db_Tank55.dbo.SP_Users_RegisterNotValidate @UserName=N'" . $username . "',@PassWord=N'" . strtoupper(md5($senha)) . "',@NickName=N'" . $nickname . "',@BArmID=7008,@BHairID=3158,@BFaceID=6103,@BClothID=5160,@BHatID=1142,@GArmID=7008,@GHairID=3158,@GFaceID=6103,@GClothID=5160,@GHatID=1142,@ArmColor=N'',@HairColor=N'',@FaceColor=N'',@ClothColor=N'',@HatColor=N'',@Sex=$sexo,@StyleDate=0");
              } else
if ($_POST['sexo'] == 0) {
                odbc_exec($conn, "exec Db_Tank55.dbo.SP_Users_RegisterNotValidate @UserName=N'" . $username . "',@PassWord=N'" . strtoupper(md5($senha)) . "',@NickName=N'" . $nickname . "',@BArmID=7008,@BHairID=3244,@BFaceID=6204,@BClothID=5276,@BHatID=1214,@GArmID=7008,@GHairID=3244,@GFaceID=6202,@GClothID=5276,@GHatID=1214,@ArmColor=N'',@HairColor=N'',@FaceColor=N'',@ClothColor=N'',@HatColor=N'',@Sex=$sexo,@StyleDate=0");
              }
              odbc_exec($conn, "exec Db_Tank55.dbo.SP_Users_LoginWeb @UserName=N'" . $username . "',@Password=N'',@FirstValidate=0,@Nickname=N'" . $nickname . "'");
              echo "<div align='center' style='#00FF7C'>Cadastro efetuado com sucesso!</div>";
            }
          }
          ?>