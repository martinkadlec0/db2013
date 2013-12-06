<?php


/**
 * Třída pro tvorbu modelů typu ClenJoinNastroj
 * @class ClenJoinNastroj
 */
class ClenJoinNastroj extends LapiModel {
	//public $idAttribute = array('id_Skupiny', 'id_Clenove');
	public $defaults = array(
		'id_Nastroje'   => NULL,
		'id_Clenove'   => NULL,
	);
	public $db_table = 'Nastroje_Clenove';
}

/**
 * Třída pro práci s modely typu ClenJoinNastroj
 * @class ClenoveJoinSkupiny
 */
class ClenoveJoinSkupiny extends LapiCollection {
	public $db_table = 'Nastroje_Clenove';
	public $model = 'ClenJoinNastroj';
}