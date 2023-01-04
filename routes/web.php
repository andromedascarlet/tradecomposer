<?php


Route::get('/', function () {
    return 'Home Hola';
});


//Route::get('/usuarios', 'UserController@index' );

Route::get('/usuarios', [UserController::class,'index']);

//http://curso-styde.test/usuarios/detalles?id=8
Route::get('/usuarios/detalles', function () {
    return 'Mostrando Detalle del Usuario : '.$_GET['id'];
});

//http://curso-styde.test/usuarios/14
// usuarios/nuevo != usuarios/[0-9]+
Route::get('/usuarios/{id}', 'UserController@show' )
->where('id' , '[0-9]+') ;
// })->where('id' , '[0-9]+') ;  // 0 al 9 , mas de uno
// })->where('id' , '\d+') ;  // 0 al 9 , mas de uno
//})->where('id' , '\w+') ;  // Letras

//http://curso-styde.test/usuarios/nuevo
Route::get('/usuarios/nuevo', 'UserController@create' );


//http://curso-styde.test/saludo/Duilio/Silence
//http://curso-styde.test/saludo/Duilio
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');
//Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
