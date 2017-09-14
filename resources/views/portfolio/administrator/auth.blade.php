@extends('portfolio.administrator.layout')

@section('content')

<div id="auth_block">
    <form>
        
        <div>
            
            <label for="login"></label>
            
            <input type="text" id="login" name="login" placeholder="Login">
        </div>
        
        <div>
            
            <label for="password"></label>
            
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
        
        <div>
            
            <input type="submit" id="submit" name="submit" value="Sign in">
        </div>
    </form>
</div>

@endsection