<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User_Identity extends Useradmin_Model_User_Identity {

	protected $_table_columns = array(
		'id' 		=> array('type' => 'int'),
		'user_id' 	=> array('type' => 'int'),
		'provider' 	=> array('type' => 'string'),
		'identity' 	=> array('type' => 'string'),
	);

}