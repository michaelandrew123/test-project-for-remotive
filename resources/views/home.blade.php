@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- 
                    {{ __('You are logged in!') }} -->
                    <div class="d-flex flex-row gap-2 align-items-center flex-wrap"> 
                        <div>
                            <a href="./mechanical-turk" class="btn btn-primary"   >Mechanical Turk</a>
                        </div> 
                        <div>
                            <a href="./remote-task" class="btn btn-primary"   >Remotasks</a>
                        </div> 
                        <div>
                            <a href="./telus" class="btn btn-primary"   >Telus</a>
                        </div> 
                        <div>
                            <a href="./prolific" class="btn btn-primary"   >Prolific</a>
                        </div> 
                        <div>
                            <a href="./user-testing" class="btn btn-primary"   >UserTesting</a>
                        </div> 
                        <div>
                            <a href="./rws-group" class="btn btn-primary"   >RWS Group</a>
                        </div> 
                        <div>
                            <a href="./data-annotation" class="btn btn-primary"   >Data Annotation</a>
                        </div> 
                        <div>
                            <a href="./dscount" class="btn btn-primary"   >DScout</a>
                        </div> 
                        <div>
                            <a href="./cloud-research" class="btn btn-primary"   >Cloud Research</a>
                        </div> 
                        <div>
                            <a href="./cloud-connect" class="btn btn-primary"   >Cloud Connect</a>
                        </div> 
                        <div>
                            <a href="./intellizoom" class="btn btn-primary"   >Intellizoom</a>
                        </div> 
                        <div>
                            <a href="./intellizoom" class="btn btn-primary"   >Remotive</a>
                        </div> 
                    </div>
<!-- 
                    <div class="iframe-container"> 
                        <iframe src="https://www.mturk.com/" width="50%" height="100%"></iframe>
                    </div>  -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
