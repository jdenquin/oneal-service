<?php
// Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

// //add a route for language
// Router::connect('/:language/:controller/*',
// array(),
// array('language' => '[a-z]{3}')
// );
// // Router::connect('/:language/:controller/:action/*',
// // array(),
// // array('language' => '[a-z]{3}')
// // );


// CakePlugin::routes();
// require CAKE . 'Config' . DS . 'routes.php';

Router::connect('/:language/', 
	array(
	'controller' => 'home',
	'action' => 'index',
	'home'
	),
	array('language' => '[a-z]{3}')
);

Router::connect('/:language/:controller/*',
	array(),
	array('language' => '[a-z]{3}')
);

Router::connect('/:language/:controller/:action/*',
	array(),
	array('language' => '[a-z]{3}')
);