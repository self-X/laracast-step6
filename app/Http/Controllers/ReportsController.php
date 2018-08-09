<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\CompileReports;

class ReportsController extends Controller
{
    public function index(Request $request )
    {
        $jobs = new CompileReports($request->input('reportId'), $request->input('type') ); //новая джоба
        $this->dispatch($jobs); //закинуть в очередь
        // $this->dispatchNow(CompileReports::class, $request); //закинуть в очередь
        return '<h3 style="color:red;"> Done </h3>';
    }
}
