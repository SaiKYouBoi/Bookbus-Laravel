<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>BookBus - Travel Across Morocco Easily</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1313ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101022",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
    <!-- Top Navigation Bar -->
    <header
        class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="bg-primary text-white p-2 rounded-lg">
                    <span class="material-symbols-outlined block">directions_bus</span>
                </div>
                <h1 class="text-2xl font-black tracking-tight text-primary">BookBus</h1>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Destinations</a>
                <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Schedules</a>
                <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">My
                    Bookings</a>
            </nav>

            <!DOCTYPE html>

            <html class="light" lang="en">

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-[#0d0d1b] dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-5 py-2.5 text-sm font-bold text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-all">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-5 py-2.5 bg-primary text-white text-sm font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                                    Sign up
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </header>
