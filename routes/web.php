<?php

Route::get('/', function() {
    return view('index');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('departments', function() {
    return view('departments');
});

Route::get('departments/{department}', function(\App\Department $department) {
    return view('department', [
        'department' => $department
    ]);
});

Route::get('programs/{program}', function(\App\Program $program) {
    return view('program', [
        'program' => $program
    ]);
});

Route::get('services/{service}', function(\App\Service $service) {
    return view('service', [
        'service' => $service
    ]);
});
