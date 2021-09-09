@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    
    <div class="w-6/12 bg-white p-6 rounded-lg">
        
        <form action="{{ route('login') }}" method="post">
            @csrf
            
            @if(session('status'))    
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-green text-center">
                {{ session('status')}}
            </div>
            @endif
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"  type="text"  placeholder="E-Mail" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>   
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"  type="password"  placeholder="Password" name="password" id="password" >
                @error('password')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>   
            <div class="mb-4">
                <div class="flex items-center">
                
                <input class="mr-2"  type="checkbox" name="remember" id="rememberme" >                
                <label for="rememberme">Remember Me</label>
            </div>
            </div>   
             <div><button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit</button></div>   
    </div>
</div>
@endsection