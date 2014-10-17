<?php
class DetailRegister extends BaseController{
	public function showDetail()
	{
		$name = Input::get('tx1');
		$pass = Input::get('ps');
		echo $name;
		#return View::make('Test')->with('name','pass');
	}
}
?>