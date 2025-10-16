<?php
// To unset the default router sat at the bottom layers
\_::$Aseq->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Aseq->On("A Part Of Path?")->Default("Route Name");
 * Or use a suitable handler for example
 * \_::$Aseq->On()->Default(fn($router)=>response(\MiMFa\Library\Html::ExternalHeading("Hello World!")));
 */

// To route other requests to the DefaultRouteName
\_::$Aseq->On()->Default(\_::$Config->DefaultRouteName);
?>