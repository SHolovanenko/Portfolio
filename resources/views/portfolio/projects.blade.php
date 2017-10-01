@extends('portfolio.layout')



@section('content')
<div id="all-projects">
    <a class="project" href="{{ url('/') }}">
        <div class="project-image" style="background: #8B0000">
            <div class="project-info">
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
        <div class="project-image" style="background: url({{ asset('img/'.$project['img']) }}) no-repeat">
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

@push('project-style')
<style>
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