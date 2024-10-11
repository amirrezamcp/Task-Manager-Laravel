<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\People;
use App\Models\Tasks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalTasks = Tasks::count();
        $completedTasks = Tasks::where('is_done', 1)->count();
        $pendingTasks = Tasks::where('is_done', 0)->count();
        $users = People::count();

        return view('pages.home', compact('totalTasks', 'completedTasks', 'pendingTasks', 'users'));
    }
}
