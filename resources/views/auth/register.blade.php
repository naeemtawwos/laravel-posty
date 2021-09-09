@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    
    <div class="w-6/12 bg-white p-6 rounded-lg">
        
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"  value="{{ old('name') }}" type="text"  placeholder="Name" name="name" id="name">
                @error('name')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">User Name</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"  type="text"  placeholder="User Name" name="username" id="username" value="{{ old('username') }}">
                @error('username')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
                
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror""  type="text"  placeholder="E-Mail" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>   
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror""  type="password"  placeholder="Password" name="password" id="password" >
                @error('password')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>   
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Repeat Password</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror""  type="password"  placeholder="Repeat Password" name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                    <div class="red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div><button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit</button></div>   
    </div>
</div>
@endsection