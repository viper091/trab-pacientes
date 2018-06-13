<?php

Route::get('/', function() {
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/outra', function() {
    return '<h1>Outra lógica com Laravel</h1>';
});

Route::get('/pacientes', 'PacienteController@lista');
Route::get('/pacientes/mostra/{id}', 'PacienteController@mostra');
Route::get('/pacientes/novo', 'PacienteController@novo');
Route::post('/pacientes/adiciona', 'PacienteController@adiciona');
Route::get('/pacientes/json', 'PacienteController@listaJson');
Route::get('/pacientes/remove/{id}', 'PacienteController@remove');