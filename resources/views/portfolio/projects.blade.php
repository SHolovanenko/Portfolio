@extends('portfolio.layout')



@section('content')
<div id="all-projects">
    <a id="back" class="project" href="{{ url('/'.$language) }}">
        <div class="project-image">
            <div>
                <div class="project-title">
                    &nbsp;
                </div>
                <div class="project-text">
                    &nbsp;
                </div>
            </div>
        </div>
    </a>
    
@foreach($portfolio as $project)
    <a class="project" href="{{ $project['link'] }}">
        <div class="project-image" style="background: url({{ asset('img/'.$project['img']) }}) no-repeat; background-size: cover;">
            <div class="project-info">
                <div class="project-title">
                    {{ $project['title'] }}
                </div>
                <div class="project-text">
                    {{ $project['text'] }}
                </div>
            </div>
        </div>
    </a>
@endforeach
</div>
@endsection

@push('custom-page-style')
<style>
    #back{
        border: none;
    }
    #back .project-image{
        background: url({{ asset('img/back-nohover.png') }}) no-repeat; 
        background-size: 80%;
        background-position-x: center;
        background-position-y: center;
    }
    #back .project-image:hover{
        background: url({{ asset('img/back-hover.png') }}) no-repeat; 
        background-size: 80%;
        background-position-x: center;
        background-position-y: center;
        transition: 0.3s;
    }
    
    body{
        background: #808080;
    }
    
    a{
        display: inline-block;
        width: 20%;
        height: 40%;
        border: 3px solid #8B0000;
        margin-top: 3%;
        margin-left: 3%;
    }
    
    .project-image{
        width: 100%;
        height: 100%;
    }
    
    .project-info{
        width: 100%;
        height: 100%;
        color: transparent;
        text-align: center;
    }
    
    .project-info:hover{
        background: #8B0000;
        color: #fff;
        transition: 0.3s;
    }
    
    .project-title{
        font-size: 20pt;
        padding: 2%;
        padding-top: 5%;
        padding-bottom: 5%;
    }
    
    .project-text{
        padding: 2%;
        font-size: 12pt;
    }
    
    .arrow-back{
        font-size: 30pt;
    }
</style>
@endpush