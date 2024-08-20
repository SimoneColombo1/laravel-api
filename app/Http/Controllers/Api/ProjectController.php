<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;

class ProjectController extends Controller
{



    public function index()
    {

        $project = projects::paginate(20);
        return response()->json(

            [
                'success' => true,
                'results' => $project
            ]

        );
    }


    public function Show(projects $project) {}
}
