<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create BookBus Account</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap"
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
                        "primary": "#3713ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#131022",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"]
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
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <main class="flex-1 flex items-center justify-center p-6 sm:p-12">
        <div class="w-full max-w-[500px]">
            <!-- Headline Section -->
            <div class="text-center mb-8">
                <h1 class="text-slate-900 dark:text-white tracking-tight text-3xl font-extrabold leading-tight mb-2">
                    Create
                    BookBus Account</h1>
                <p class="text-slate-500 dark:text-slate-400 text-base font-normal">Join the modern way to travel across
                    Morocco.</p>
            </div>
            <!-- Registration Card -->
            <div
                class="bg-white dark:bg-slate-900 rounded-xl shadow-xl shadow-primary/5 border border-slate-100 dark:border-slate-800 p-8">

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf
                    <!-- Full Name Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Full Name</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">person</span>
                            <input
                                class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 focus:border-primary h-14 pl-12 pr-4 placeholder:text-slate-400 text-base font-normal transition-all"
                                id="name" placeholder="Enter your full name" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!-- Email Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Email Address</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">mail</span>
                            <input
                                class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 focus:border-primary h-14 pl-12 pr-4 placeholder:text-slate-400 text-base font-normal transition-all"
                                id="email" placeholder="name@example.com" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Phone Number Field (Local Morocco Context) -->

                    <!-- Password Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Password</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
                            <input id="password"
                                class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 focus:border-primary h-14 pl-12 pr-12 placeholder:text-slate-400 text-base font-normal transition-all"
                                placeholder="Create a strong password" type="password" name="password" required
                                autocomplete="new-password" />
                            <button
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
                                type="button">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Password Confirmation -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Confirm Password</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
                            <input
                                class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 focus:border-primary h-14 pl-12 pr-12 placeholder:text-slate-400 text-base font-normal transition-all"
                                id="password_confirmation" placeholder="Confirm your password" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                            <button
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
                                type="button">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start gap-3 py-2">
                        <input
                            class="mt-1 h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
                            id="terms" type="checkbox" />
                        <label class="text-sm text-slate-600 dark:text-slate-400 leading-tight cursor-pointer"
                            for="terms">
                            I agree to the <a class="text-primary font-semibold hover:underline" href="#">Terms
                                of
                                Service</a> and <a class="text-primary font-semibold hover:underline"
                                href="#">Privacy
                                Policy</a>.
                        </label>
                    </div>
                    <!-- Primary Action Button -->
                    <button
                        class="w-full flex items-center justify-center bg-primary hover:bg-primary/90 text-white text-base font-bold h-14 rounded-xl transition-all shadow-lg shadow-primary/20 active:scale-[0.98]"
                        type="submit">
                        Create Account
                    </button>
                </form>
                <!-- Footer divider -->
                <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 text-center">
                    <p class="text-slate-500 dark:text-slate-400 text-sm">
                        Already have an account?
                        <a class="text-primary font-bold hover:underline ml-1" href="{{ route('login') }}">Log in
                            here</a>
                    </p>
                </div>
            </div>
            <!-- Trust Badges / Footer -->
            <div class="mt-10 flex justify-center gap-8 opacity-50 grayscale hover:opacity-100 transition-opacity">
                <div class="flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">verified_user</span>
                    <span class="text-xs font-bold uppercase tracking-widest">Secure Payments</span>
                </div>
                <div class="flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">support_agent</span>
                    <span class="text-xs font-bold uppercase tracking-widest">24/7 Support</span>
                </div>
            </div>
        </div>
    </main>
    <!-- Decorative Elements (Abstract Patterns) -->
    <div class="fixed top-0 right-0 -z-10 w-1/3 h-1/2 bg-gradient-to-bl from-primary/10 to-transparent blur-3xl rounded-full translate-x-1/2 -translate-y-1/2"
        data-alt="Abstract blue purple gradient background"></div>
    <div class="fixed bottom-0 left-0 -z-10 w-1/3 h-1/2 bg-gradient-to-tr from-primary/5 to-transparent blur-3xl rounded-full -translate-x-1/2 translate-y-1/2"
        data-alt="Abstract soft blue decorative glow"></div>
    </div>
