<?php
	class User extends Eloquent {
		protected $table = 'users';

		public $timestamps = false;
		//protected $fillable = array('name');
		//protected $guarded = array('name');
	}
?>