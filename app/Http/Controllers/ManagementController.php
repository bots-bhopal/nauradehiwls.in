<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function adminBody()
    {
        $members = Team::orderBy('updated_at', 'ASC')->published()->get();
        return view('management.body', compact('members'));
    }

    public function goals()
    {
        return view('management.goals');
    }

    public function activities()
    {
        return view('management.activities');
    }

    public function training()
    {
        return view('management.training');
    }

    public function contact()
    {
        return view('management.contact');
    }
}
