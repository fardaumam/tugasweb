<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('avanza',22,18,'120jt')
			,array('xenia',5,2,'110jt')
			,array('BMW',15,13,'150jt')
			,array('APV',17,15,'110jt')
			,array('innova',17,15,'160jt')
		);

		return $cars;
	}
}