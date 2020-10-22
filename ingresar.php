<?php 
session_start();
	require_once("conexion.php");
	$sql = "SELECT nivel_usu FROM login WHERE user ='".$_POST["user"]."'";
	$res = mysql_query($sql,$con);
	$row =  mysql_fetch_assoc ($res);
	$nivel= $row['nivel_usu'];
	if($nivel =="1") {	
		$sql2 = "SELECT user FROM login WHERE user ='".$_POST["user"]."'";
		$res2 = mysql_query($sql2,$con);
		if (mysql_num_rows($res2) == 0) {	
			echo 
				"<script type='text/javascript'>
					alert('El Usuario ".$_POST["user"]." no esta en la base de Datos');
					window.location ='login.php';
				</script>";	
		}else {	
			$consulta="select * from  login where user='".$_POST["user"]."' and pass='".$_POST["pass"]."' ";
			$result=mysql_query($consulta,$con);
				if (mysql_num_rows($result) == 0) {	
					echo 
					"<script type='text/javascript'>
						alert('El usuario y la contrasena ingresados no conciden');
						window.location='login.php';
					</script>"; 
				}else {
				
					$_SESSION["user"]=$_POST["user"];
					echo
					    "<script type='text/javascript'>
							alert('Bienvenido Administrador');
							window.location ='menu-administrador.php';
						</script>";
				}
		
		}		
	}else  {
		$sql2 = "SELECT user FROM login WHERE user ='".$_POST["user"]."'";
		$res2 = mysql_query($sql2,$con);
		if (mysql_num_rows($res2) == 0) {	
				echo 
					"<script type='text/javascript'>
						alert('El Usuario ".$_POST["user"]." no esta en la base de Datos');
						window.location ='login.php';
					</script>";
		}else {	
			$consulta="select * from  login where user='".$_POST["user"]."' and pass='".$_POST["pass"]."' ";
			$result=mysql_query($consulta,$con);
			if (mysql_num_rows($result) == 0) {	
				echo 
				"<script type='text/javascript'>
					alert('El usuario y la contrasena ingresados no conciden');
					window.location='login.php';
				</script>"; 
			}else {
				$_SESSION["user"]=$_POST["user"];
				echo 
					"<script type='text/javascript'>
						alert('bienvenido ".$_POST["user"]."');
						window.location='menu.php';
					</script>"; 	
			}
		}	
	}
?>