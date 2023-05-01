<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Campaign;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $calls = DB::table('campaigns')
        // ->where('created_at')->get()->count();
        // ->whereBetween('created_at', [Carbon::now()->subWeek()->format("Y-m-d H:i:s"), Carbon::now()])

        // dd($calls);
        // $report->callsCount = $calls->count();

        $campaign =Campaign::all();
        return view('pages.dashboard.index',[
            'campaign'   =>$campaign
        ]);
    }
}
