<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class RemotiveController extends Controller
{
    public function index(){

        $response = Http::get('https://remotive.com/api/remote-jobs');
        
        if ($response->successful()) {
            $jobs = $response->json();
            $jobs = $jobs['jobs'];
            // dd($jobs['jobs']);
            // return response()->json($jobs);
        } else {
            return response()->json(['error' => 'Unable to fetch jobs'], $response->status());
        }



        return view('pages.remotive')->with([
            'jobs'=> $jobs
        ]);
    }
    public function fetchRemoteJobs()
    {
        $response = Http::get('https://remotive.com/api/remote-jobs');

        if ($response->successful()) {
            $jobs = $response->json();
            return response()->json($jobs);
        } else {
            return response()->json(['error' => 'Unable to fetch jobs'], $response->status());
        }
    }


//     public function fetchRemoteJobs()
// {
//     $response = Http::get('https://remotive.com/api/remote-jobs');

//     if ($response->successful()) {
//         $jobs = $response->json();

//         // Loop through jobs and save to database (example)
//         foreach ($jobs['remotive_jobs'] as $job) {
//             // Assuming you have a Job model
//             \App\Models\Job::create([
//                 'title' => $job['title'],
//                 'company' => $job['company_name'],
//                 'location' => $job['candidate_required_location'],
//                 'url' => $job['url'],
//                 'description' => $job['description'],
//             ]);
//         }

//         return response()->json($jobs);
//     } else {
//         return response()->json(['error' => 'Unable to fetch jobs'], $response->status());
//     }
// }
}
