@extends('master.index')
@section('content') 
@include('pages.sidebar');


<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"> 
   <div class="container mt-5">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Remote Jobs</h1>
 
        <div class="w-full flex flex-row gap-2 flex-wrap">

            @foreach($jobs as $job)
                <div class="py-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ $job['company_logo'] }}" alt="" />
                    </a>
                    <div class="px-5 flex flex-col gap-2">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $job['title'] }}</h5>
                        </a>
                        <div class="">
                            <a href="{{ $job['url']}} " class="break inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach 
        
               
        </div>
    </div>
   </div>
</div>

<script>
    // $(document).ready(function() {

    // alert("jquery functrion");
    // });
</script>
@endsection