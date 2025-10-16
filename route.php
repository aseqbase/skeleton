<?php
// To unset the default router sat at the bottom layers
\_::$Aseq->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Aseq->On("A Part Of Path?")->Default("Route Name");
 */

// To route other requests to the DefaultRouteName
\_::$Aseq->On()->Default(\_::$Config->DefaultRouteName);
?>