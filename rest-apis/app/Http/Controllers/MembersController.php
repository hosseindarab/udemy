<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;

class MembersController extends Controller
{
    public function index(Request $request, Project $project){
        $members = $project-> members;

        return new UserCollection($members);
    }
}
