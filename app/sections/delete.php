<?php


$collection = $url->params[0];
$id = $url->params[1];

$names = array('Uzivatele', 'Skupiny', 'Zadosti', 'Skladby', 'Alba', 'Clenove', 'Vydavatele');

if (!in_array($collection, $names) || !$id) {
	$app->redirect('admin/' . $collection);
	echo 'No such collection';
	exit;
}

require_once($app->dirModels . '/' . $collection . '.php');

if ($id == 'all') {
	/**
	 * U Skladeb a Alb je treba odstranovat pouze pod spravnym ID!!!
	 */
	$app->db->query('DELETE * FROM `' + $collection + '`');
} else {
	$id = (int) $id;

	$coll = new $collection();
	$dummy = $coll->create(array(), array('simple' => true));

	$coll->fetch(array(
		'where' => array(
			$dummy->idAttribute => $id
		),
		'limit' => 1
	));

	if ($coll->length() == 1) {
		$success = $coll->at(0)->destroy();			
	}
}

$app->redirect('admin/' . $collection);