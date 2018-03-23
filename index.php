<?php

if (isset($_GET['info'])) {
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/plain; charset=utf-8');
	header('Access-Control-Allow-Methods: GET,POST,DELETE');
};

if (isset($_GET['print'])) {
	header('Content-Type: text/plain; charset=utf-8');
	echo file_get_contents(basename(__FILE__));
};

if (isset($_GET['author'])) {
	echo('<h4 id="Danil Rostov" title="GossJS">Danil Rostov</h4>');
};

if (isset($_GET['info'])) {
	phpinfo();
};

class Dater {
	public $mode;
	function __construct($mode = 'r') {

		$this->mode = $mode;
	}

	function printDate() {
		return '<h1>' . date($this->mode) . '</h1>';
	}
};

$myDate = new Dater('d\/m\/o h:i');

echo($myDate -> printDate());

error_reporting(E_ALL);
ini_set('display_errors', E_ALL);