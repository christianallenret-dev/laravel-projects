<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('personal.home');
});

Route::get('/education', function () {
    return view('personal.education');
});

Route::get('/skills', function () {
    $skills = [
        ["name" => "Frontend Development",
        "description" => "Demonstrates strong skills in frontend development, focusing on building responsive and user-friendly 
        web interfaces. Able to translate design concepts into functional layouts while ensuring usability, accessibility, 
        and cross-browser compatibility. Strives to create visually appealing and interactive experiences that improve 
        overall user engagement",
        "id" => "1"],
        ["name" => "Backend Development",
        "description" => "Possesses a solid understanding of backend development, including server-side logic, database communication, 
        and application functionality. Capable of developing systems that manage data processing efficiently and ensure
        seamless interaction between the frontend and backend components of a web application.",
        "id" => "2"],
        ["name" => "Database Management",
        "description" => "Shows competency in database design and management, including organizing, storing, and retrieving data 
        effectively. Understands how to structure tables, manage relationships, and perform queries to maintain 
        data accuracy and optimize application performance.",
        "id" => "3"],
        ["name" => "React",
        "description" => "Experienced in building modern user interfaces using React. Understands component-based architecture, 
        state management, and reusable UI elements to create scalable and maintainable frontend applications.",
        "id" => "4"],
        ["name" => "Laravel",
        "description" => "Familiar with the Laravel framework for developing structured backend systems. Understands 
        the Model-View-Controller (MVC) architecture, routing, and database integration to support 
        efficient web application development.",
        "id" => "5"],
    ];

    return view('personal.skills', ["skills" => $skills]);
});

Route::get('/projects', function () {
    return view('personal.projects');
});

