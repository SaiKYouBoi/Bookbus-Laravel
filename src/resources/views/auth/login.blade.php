<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign In - BookBus</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
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
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<main class="flex-1 flex items-center justify-center px-4 py-12">
    <div
        class="w-full max-w-[440px] bg-white dark:bg-background-dark/50 border border-[#e7e7f3] dark:border-white/10 rounded-xl shadow-sm p-8 md:p-10">
        <!-- Headline Section -->
        <div class="mb-8">
            <h1
                class="text-[#0d0d1b] dark:text-white tracking-light text-[28px] md:text-[32px] font-bold leading-tight text-center pb-2">
                Sign in to your account</h1>
            <p class="text-[#4c4c9a] dark:text-gray-400 text-base font-normal leading-normal text-center">Welcome back!
                Please enter your details.</p>
        </div>
        <!-- Auth Form -->

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                <!-- Email Field -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Utilities Row -->
                <div class="flex items-center justify-between text-sm py-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input
                            class="rounded border-[#cfcfe7] dark:border-white/10 text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                            type="checkbox" id="remember_me" name="remember" />
                        <span class="text-[#4c4c9a] dark:text-gray-400">Remember me</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-primary font-semibold hover:underline"
                            href="{{ route('password.request') }}">Forgot
                            password?</a>
                    @endif
                </div>
                <!-- Sign In Button -->
                <button
                    class="w-full flex items-center justify-center rounded-lg h-12 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-all shadow-md active:scale-[0.98]"
                    type="submit">
                    Sign In
                </button>
            </form>

        <!-- Divider -->
        <div class="relative my-8">
            <div aria-hidden="true" class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-[#e7e7f3] dark:border-white/10"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="bg-white dark:bg-background-dark px-4 text-[#4c4c9a] dark:text-gray-400">Or continue
                    with</span>
            </div>
        </div>
        <!-- Social Logins -->
        <div class="grid grid-cols-2 gap-4">
            <button
                class="flex items-center justify-center gap-2 h-11 border border-[#cfcfe7] dark:border-white/10 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm font-medium text-[#0d0d1b] dark:text-white">
                <img class="size-5" data-alt="Google logo for authentication"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-gkNByj89LsoyWmge2kZWpQyVsqJBh4kRPBoIkUHbvYudNBo_0a-YYx21its3NZY3404yJiGoIIprEtgrhRhWXqz3eaztKYCPbmoLSM4ECfAM5Be9ZJBPWV-llb95Yi_vqJHiZ4wcgfA1-gr56TPUuPMwZQ3DfozCCCQ8eS63Yyng-CMecKSu3Lzw6JZFaF3LCGs1UTiWK_m7QfzvTDBJ5Joz39Ci5tWFnD-MDlu2fijSHNiRc6Ehd2TSR8RW3lhUiL5jZH6pVMU9" />
                Google
            </button>
            <button
                class="flex items-center justify-center gap-2 h-11 border border-[#cfcfe7] dark:border-white/10 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm font-medium text-[#0d0d1b] dark:text-white">
                <span class="material-symbols-outlined text-[20px] text-blue-600">social_leaderboard</span>
                Facebook
            </button>
        </div>
        <!-- Footer Link -->
        <p class="mt-8 text-center text-sm text-[#4c4c9a] dark:text-gray-400">
            Don't have an account?
            <a class="text-primary font-bold hover:underline" href="#">Sign up for free</a>
        </p>
    </div>
</main>
<!-- Morocco Travel Info Badge (Optional) -->
<div class="flex justify-center pb-8">
    <div class="flex items-center gap-2 px-4 py-2 bg-primary/10 rounded-full border border-primary/20">
        <span class="material-symbols-outlined text-primary text-sm">explore</span>
        <span class="text-primary text-xs font-semibold uppercase tracking-wider">Plan your journey across
            Morocco</span>
    </div>
</div>
</div>
</div>
