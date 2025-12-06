<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="w-full max-w-sm bg-white p-8 rounded-2xl shadow-lg">
<h2 class="text-2xl font-bold text-center mb-6">Admin Login</h2>


<form action="/admin-login" method="POST">
    @csrf
    <div class="text-red-500">
        @error('user'){{ $message }}
        @enderror
    </div>
<div class="mb-4">
<label class="block mb-1 font-medium">Username</label>
<input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Enter Username" name="name"/>
<div class="text-red-500">
@error('name') {{ $message }}
@enderror
</div>
</div>


<div class="mb-4">
<label class="block mb-1 font-medium">Password</label>
<input type="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="••••••••" name="password"/>
<div class="text-red-500">
    @error('password'){{ $message }}
    @enderror
</div>
</div>


<button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Login</button>
</form>
</div>
</body>
</html>