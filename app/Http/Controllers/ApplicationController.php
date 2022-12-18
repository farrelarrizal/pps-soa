<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class ApplicationController extends Controller
{
    // index
    public function index()
    {
        $request = Request::create('/api/student', 'GET');
        $response = Route::dispatch($request);
        $students = json_decode($response->getContent(), true);

        $request = Request::create('/api/thesis', 'GET');
        $response = Route::dispatch($request);
        $thesis = json_decode($response->getContent(), true);

        return view('dashboard', compact('students', 'thesis'));
    }

    // show
    public function show($id)
    {
        $request = Request::create('/api/student/'.$id, 'GET');
        $response = Route::dispatch($request);
        $student = json_decode($response->getContent(), true);

        $request = Request::create('/api/thesis/'.$id, 'GET');
        $response = Route::dispatch($request);
        $thesis = json_decode($response->getContent(), true);

        return view('student', compact('student', 'thesis'));
    }
}
