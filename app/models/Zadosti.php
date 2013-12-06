<?php


class Zadost extends LapiModel {
	public $idAttribute = 'id_Zadosti';
	public $defaults = array(
		'id_Zadosti'    =>  NULL,
		'datum'  => '1.1.1990',
		'zpracovano' => false,
		'schvaleno'  => false,
		'id_Uzivatele'  => 0
	);
	public $db_table = 'Zadosti';
}


class Zadosti extends LapiCollection {
	public $db_table = 'Zadosti';
	public $model = 'Zadost';
}