<?php
// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));
CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));

Configure::write('Config.languages', array(
	'eng' => __('English'),
	'fra' => __('French'),
	'dut' => __('Dutch'),
	'ger' => __('German'),
	'por' => __('Portugese'),
	'spa' => __('Spanish'),
	'pol' => __('Polish'),
	'ita' => __('Italian')
));
