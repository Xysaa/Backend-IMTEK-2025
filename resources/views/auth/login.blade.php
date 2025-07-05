<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form method="POST" action="/login" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h2 class="text-xl font-bold mb-4">Login</h2>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Password</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
        </div>

        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded w-full" type="submit">Login</button>
   
<p class="mt-4 text-sm text-center">
    Belum punya akun?
    <a href="{{ route('register') }}" class="text-blue-500 underline">Daftar di sini</a>
</p>
    </form>
</body>
</html>
