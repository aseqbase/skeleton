<?php
// Initialize codes
// It will executes at the start of all sequence

// To unset the default router sat at the bottom layers
\_::$Router->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Router->On("A Part Of Path?")->Default("Route Name");
 * Or use a suitable handler for example
 * \_::$Router->On()->Default(fn($router)=>deliver(\MiMFa\Library\Struct::Heading1("Hello World!")));
 */