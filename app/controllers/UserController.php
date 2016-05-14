<?php
class UserController extends Controller{
	function actionIndex(){
		$model = new User();
		$this->render('index',array('model'=>$model));
	}
	function actionLogin() {
		$user = new User();
		if (isset($_POST['login'])) {
			$user->login = $_POST['login'];
			$user->password = $_POST['password'];
			if ($user->auth) {
				header('Location:/');
				exit();
			} else {
				$this->error = 'No user or bad pass';
			}
		}
		$this->render('login',array('model'=>$user));
	}
}