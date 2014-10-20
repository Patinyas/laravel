<?php
class userController extends BaseController{

    
    public function newUser()
    {
 
       echo Form::open(array('action'=>'UserController@Submit'));
      
 		 echo "UserName : ".Form::text($name = 'tx1',$value = null)."<br>";

      	 echo "Password : ".Form::password($name = 'ps' ,$value = null)."<br>";

      	 echo "First Name : ".Form::text($name = 'fname',$value = null)."<br>";

      	 echo "Last Name : ".Form::text($name = 'lname',$value = null)."<br>";
       	 
      

		echo Form::submit('Click me');

		Form::close();
    }

    public function Submit()
    {
    	$users = new User;

    	$users->username = Input::get('tx1');
    	$users->password = Input::get('ps');
    	$users->Fname = Input::get('fname');
    	$users->Lname = Input::get('lname');

    	$users->save();	

    	echo Form::open(array('action'=>'UserController@ShowDetail'));
  
    	echo "Success!!<br>";
    	echo Form::submit('OK!');


    	echo Form::close();
    }
    public function ShowDetail()
    {
    	$users = new User;
    	$users = User::all();
    	return View::make('layouts.master')->with('users',$users);
    
    }
}
?>

