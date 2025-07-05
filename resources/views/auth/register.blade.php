<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form method="POST" action="/register" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h2 class="text-xl font-bold mb-4">Register</h2>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4">
            <label>Nama</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Password</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full border p-2 rounded" required>
        </div>

        <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded w-full" type="submit">Register</button>


<p class="mt-4 text-sm text-center">
    Sudah punya akun?
    <a href="{{ route('login') }}" class="text-blue-500 underline">Login di sini</a>
</p>

    </form>
</body>
</html>
