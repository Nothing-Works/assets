<?php

Route::get('/{any?}', function () {
    return view('welcome');
});
