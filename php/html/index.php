<?php

   // Include the Smarty Templating Engine
   define('SMARTY_DIR', __DIR__ . '/Smarty-3.1.14/libs/');
   require_once(SMARTY_DIR . 'Smarty.class.php');
   $smarty = new Smarty();

   $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
   $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
   $smarty->setConfigDir(__DIR__ . '/templates/configs/');
   $smarty->setCacheDir(__DIR__ . '/templates/cache/');

   // Notice how you can set variables here in the PHP that will get carried into the template files
   $smarty->assign('title', "EECS485-test!");


   // Setup the Routing Framework
   require_once __DIR__ . '/vendor/autoload.php';
   $klein = new \Klein\Klein();


   /* Define routes here */

   $klein->respond('GET', '/', function ($request, $response, $service) use ($smarty) {
    include 'db.php';
    $stmt = $pdo->query("SELECT username FROM Users");
    $i = 0;
    $username = array();
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $username[] = $row["username"];
    }
    $smarty->assign('username', $username);
     $smarty->display('index.tpl');
   });

   $klein->respond('GET', '/pic[:id]?', function ($request, $response, $service) use ($smarty) {

     // Notice how you can set variables here in the PHP that will get carried into the template files
     $smarty->assign('picid', $request->id);

     $smarty->display('pic.tpl');
   });

   $klein->respond('GET', '/album', function ($request, $response, $service) use ($smarty) {
     $smarty->display('album.tpl');
   });

   $klein->respond('GET', '/album\?id=[:albumID]?', function ($request, $response, $service) use ($smarty) {
     include 'album.php';
     $smarty->assign('album_id', $request->albumID);
     $smarty->display('album.tpl');
   });

   $klein->respond('GET', '/album/edit\?id=[:albumID]?', function ($request, $response, $service) use ($smarty) {
     include 'album_edit.php';
     // $smarty->assign('album_id', $request->albumID);
     // $smarty->display('album.tpl');
   });

   $klein->respond('GET', '/albums', function ($request, $response, $service) use ($smarty) {
     $smarty->display('albums.tpl');
   });

   $klein->respond('GET', '/albums\?username=[:userID]?', function ($request, $response, $service) use ($smarty) {
     include 'albums.php';
     $smarty->assign('user_id', $request->userID);
     $smarty->display('albums.tpl');
   });

   $klein->respond('GET', '/albums/edit[:id]?', function ($request, $response, $service) use ($smarty) {

      include 'albums_edit.php';
   });

  $klein->respond('POST', '/albums/edit[:id]?', function ($request, $response, $service) use ($smarty) {

        include 'albums_edit.php';
     });
  $klein->respond('POST', '/albums/add', function ($request, $response, $service) use ($smarty) {

        include 'add.php';
     });

   $klein->dispatch();

?>
