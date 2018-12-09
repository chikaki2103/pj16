<?php 
//?mod=user&act=list
	include_once('check/mid.php');
	$check = new Middle();
	session_start();
	$mod = isset($_GET['mod'])?$_GET['mod']:'user';
	$act = isset($_GET['act'])?$_GET['act']:'view';
	switch ($mod) {
		case 'user':
			$check->checklogin();
			require_once('controllers/UserController.php');
			$controller = new UserController();
			switch ($act) {
				case 'list':
				$controller->list();
					break;
				case 'detail':
				$controller->detail();
					break;
				case 'add':
				$controller->add();
					break;
				case 'store':
				$controller->store();
					break;
				case 'edit':
				$controller->edit();
					break;
				case 'update':
				$controller->update();
					break;	
				case 'delete':
				$controller->delete();
					break;
				case 'view':
				$controller->view();
					break;
								
				default:
					$controller->err();
					break;
			}
		break;
		case 'customer':
			require_once('controllers/CustomerController.php');
			$controller = new CustomerController();
			switch ($act) {
				case 'list':
				$controller->list();
					break;
				case 'detail':
				$controller->detail();
					break;
				case 'add':
				$controller->add();
					break;
				case 'store':
				$controller->store();
					break;
				case 'edit':
				$controller->edit();
					break;
				case 'update':
				$controller->update();
					break;	
				case 'delete':
				$controller->delete();
					break;
						
				default:
					$controller->err();
					break;
			}

		break;
		case 'product':
	require_once('controllers/ProductController.php');
	$controller = new ProductController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'add':
		$controller->add();
		break;	
		case 'store':
		$controller->store();
		break;
		case 'edit':
		$controller->edit();
		break;
		case 'update':
		$controller->update();
		break;
		case 'delete':
		$controller->delete();
		break;
		default:
		$controller->error();
		break;
	}
	break;
	case 'product_type':
	require_once('controllers/ProductTypeController.php');
	$controller = new ProductTypeController();
	switch ($act) {
		case 'list':
		$controller->list();
		break;
		case 'detail':
		$controller->detail();
		break;
		case 'add':
		$controller->add();
		break;	
		case 'store':
		$controller->store();
		break;
		case 'edit':
		$controller->edit();
		break;
		case 'update':
		$controller->update();
		break;
		case 'delete':
		$controller->delete();
		break;
	}
	break;
	case 'sale':
	require_once('controllers/SaleController.php');
	$controller = new SaleController();
	switch ($act) {
		case 'list':
		$controller->view();
		break;
		case 'purchase':
		$controller->purchase();
		break;
		case 'sale':
		$controller->sale();
		break;
		case 'add2cart':
		$controller->add2cart();
		break;
		case 'remove':
		$controller->remove_product();
		break;
		case 'payment':
		$controller->payment();
		break;
		case 'billdetail':
		$controller->BillDetail();
		break;
		
	}
	break;
		
		
		default:

			break;
	}

switch ($mod) {
		case 'login':
			require_once('controllers/LoginController.php');
			$controller = new LoginController();
			switch ($act) {
				
				case 'login':
				$controller->form();
					break;

				case 'signin':
				$controller->login();
					break;
				
				case 'logout':
				$controller->logout();
					break;
								
				default:
					$controller->err();
					break;
			}
		break;
		
		
		
		default:

			break;
	}


 ?>


