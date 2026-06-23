<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Enterprise System L11')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-slate-200 flex flex-col justify-between hidden md:flex">
            <div class="p-6">
                <span class="text-lg font-bold tracking-wider text-white">L11 BOILERPLATE</span>
                <nav class="mt-8 space-y-1">
                    <a href="#" class="block py-2.5 px-4 rounded bg-slate-800 text-white font-medium">Dashboard</a>
                    @yield('sidebar-menu')
                </nav>
            </div>
            <div class="p-4 bg-slate-950 text-xs text-slate-500 text-center">
                PHP 8.2 • Laravel 11
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                <div class="text-sm text-gray-600">Hari ini: <strong>{{ date('d M Y') }}</strong></div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium text-gray-700">{{ auth()->user()->name ?? 'Developer' }}</span>
                    <button class="text-xs bg-red-50 text-red-600 px-3 py-1.5 rounded hover:bg-red-100 transition">Keluar</button>
                </div>
            </header>

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>