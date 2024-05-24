@extends('master.index')
@section('content')
   
    <div class=" mt-10"> 
        <a
            href="/home"
            class="inline-block rounded bg-info px-6 pb-2 pt-2.5 text-base font-medium uppercase leading-normal  shadow-info-3 transition duration-150 ease-in-out hover:bg-info-accent-300 hover:shadow-info-2 focus:bg-info-accent-300 focus:shadow-info-2 focus:outline-none focus:ring-0 active:bg-info-600 active:shadow-info-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
            home
        </a> 
    </div>
    <div class="relative top-10 sm:flex sm:flex-col sm:justify-center sm:items-center  bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
         
        <div class=" p-2"> 
            <div>{{ $title }}</div>
        </div>   
    </div> 


@endsection