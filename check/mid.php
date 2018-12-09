<?php 
	class Middle{
		function checklogin(){
			if ($_SESSION['islogin']!=1) {
	 			header('Location: index.php?mod=login&act=login');
				
			}
		}
	}

?>