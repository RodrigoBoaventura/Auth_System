<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Personalizado</title>
    <link href="{{ asset('css/custom-login.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow-md w-80">
        @csrf
        <h2 class="text-xl font-bold mb-4 text-center">Entrar no sistema</h2>

        @if(session('status'))
            <div class="mb-4 text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">E-mail</label>
            <input type="email" name="email" id="email" required autofocus
                   class="w-full px-3 py-2 border border-gray-300 rounded mt-1">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Senha</label>
            <input type="password" name="password" id="password" required
                   class="w-full px-3 py-2 border border-gray-300 rounded mt-1">
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-sm">Lembrar-me</label>
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Entrar</button>
    </form>

</body>
</html>
