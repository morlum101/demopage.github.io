<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function __construct()
    {
        //DB::statement("SET SQL_MODE=''"); // set the strict to false
    }

    public function __invoke()
    {
        return view('admin.dashboard.index', [
            'activities' => Activity::latest()->take(5)->get(),
            'total_active_user' => User::ByRole('student')->active()->count(),
            'total_inactive_user' => User::ByRole('student')->inactive()->count(),
            'users' => User::byRole('user')->latest()->paginate(10),
        ]);
    }

    
}