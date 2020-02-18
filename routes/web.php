<?php

Route::get('/{any?}', function () {
    return view('app');
});
