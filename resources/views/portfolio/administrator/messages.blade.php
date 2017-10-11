@extends('portfolio.layout')

@section('content')

<div id="messages">
@foreach($messages as $message)
    <div class="message">
        <a href="mailto:{{ $message['mail'] }}" class="messageMail">{{ $message['mail'] }}</a>
        <div class="messageName">{{ $message['name'] }}</div>
        <div class="messageSubject">{{ $message['subject'] }}:</div>
        <div class="messageText">{{ $message['text'] }}</div>
        <div class="messageDate">{{ $message['created_at'] }}</div>
    </div>
@endforeach
</div>
@endsection

@push('custom-page-style')
<style>
    body{
        background: #808080;
    }
    
    .message{
        border: 2px solid #8B0000;
        font-size: 16pt;
        padding: 2%;
        margin-top: 20px;
    }
    
    .messageText{
        font-size: 14pt;
        margin-top: 10px;
        color: #ccc;
    }
    
    .messageDate{
        text-align: right;
        font-size: 10pt;
        color: #ccc;
    }
    
</style>
@endpush
