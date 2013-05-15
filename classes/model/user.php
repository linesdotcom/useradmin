<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Useradmin_Model_User {

	protected $_table_columns = array(
		'id' 						=> array('type' => 'int'),
		'email' 					=> array('type' => 'string'),
		'username' 					=> array('type' => 'string'),
		'password' 					=> array('type' => 'string'),
		'password_updated' 			=> array('type' => 'string'),
		'logins' 					=> array('type' => 'int'),
		'last_login' 				=> array('type' => 'int'),
		'status' 					=> array('type' => 'string'),
		'failed_login_count' 		=> array('type' => 'int'),
		'created' 					=> array('type' => 'string'),
		'modified' 					=> array('type' => 'string'),
		'last_failed_login' 		=> array('type' => 'string'),
		'authorizenet_profile_id' 	=> array('type' => 'int'),
	);

}