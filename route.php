<?php
// To unset the default router sat at the bottom layers
\_::$Router->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Router->On("A Part Of Path?")->Default("Route Name");
 * Or use a suitable handler for example
 * \_::$Router->On()->Default(fn($router)=>response(\MiMFa\Library\Html::Heading1("Hello World!")));
 */

// To route other requests to the DefaultRouteName
\_::$Router->On()->Default(\_::$Router->DefaultRouteName);
?>