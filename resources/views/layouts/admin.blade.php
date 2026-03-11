<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justice Mirror - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#eef1f6] text-slate-800">
    <div class="min-h-screen p-4 md:p-6">
        <div class="flex min-h-[calc(100vh-2rem)] md:min-h-[calc(100vh-3rem)] overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_20px_60px_rgba(15,23,42,0.12)]">
            @include('partials.sidebar-admin')

            <div class="flex flex-1 flex-col bg-[#f7f8fb]">
                @include('partials.navbar')

                <main class="flex-1 overflow-y-auto p-6 md:p-8">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>