@include('layouts.header')


<main>
    <!-- Hero Section -->
    <section class="relative pt-12 pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div
                class="relative overflow-hidden rounded-3xl bg-slate-900 min-h-[520px] flex items-center justify-center text-center p-8">
                <!-- Background Image -->
                <div class="absolute inset-0 z-0 opacity-60 bg-cover bg-center"
                    data-alt="Panoramic view of Chefchaouen blue city"
                    style='background-image: linear-gradient(to bottom, rgba(19, 19, 236, 0.4), rgba(16, 16, 34, 0.9)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuD6bTLtOQZqbmtUJA2_InWdCC-y4r859SiKmLZeN70pcbuBRFEiFyeie4SIizUvnHpzEj31qcxt7ATaKfQgZHCJ2qJekTV6nqHebfUR_k2nP0Q86TXkwvaXeNj-3kNWWLOd462XQLbo43vX7kKSMYRDTpk2aPS9VDHof1_0ho5tEKtncUwFIEYlW2I0_PXZHnLNDAkZeh4UvRlKGWZa1yC1j9nHBdjAe01S02tIYk7r1hlId-FI9UnaoFo0adWVjDwFGPoA9us_53IK");'>
                </div>
                <div class="relative z-10 max-w-3xl">
                    <span
                        class="inline-block px-4 py-1.5 mb-6 text-xs font-bold uppercase tracking-wider bg-white/20 backdrop-blur text-white rounded-full border border-white/30">Trusted
                        by 10k+ Travelers</span>
                    <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-6">
                        Travel Across Morocco Easily
                    </h1>
                    <p class="text-lg md:text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
                        Book bus tickets for over 50+ Moroccan cities with secure payment and instant confirmation.
                    </p>
                </div>
            </div>
            <!-- Floating Search Card -->
            <div
                class="relative -mt-24 z-20 max-w-6xl mx-auto bg-white dark:bg-slate-900 rounded-2xl shadow-2xl p-6 border border-slate-100 dark:border-slate-800">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-500 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-lg">location_on</span> From
                        </label>
                        <select
                            class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl h-14 px-4 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-all cursor-pointer">
                            <option>Departure City</option>
                            <option>Casablanca</option>
                            <option>Marrakech</option>
                            <option>Rabat</option>
                            <option>Tangier</option>
                            <option>Agadir</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-500 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-lg">near_me</span> To
                        </label>
                        <select
                            class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl h-14 px-4 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-all cursor-pointer">
                            <option>Arrival City</option>
                            <option>Chefchaouen</option>
                            <option>Fes</option>
                            <option>Essaouira</option>
                            <option>Ouarzazate</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-500 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-lg">calendar_today</span> Date
                        </label>
                        <div class="relative">
                            <input
                                class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl h-14 px-4 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-all cursor-pointer"
                                type="text" value="Oct 24, 2023" />
                            <span
                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">expand_more</span>
                        </div>
                    </div>
                    <div>
                        <button
                            class="w-full h-14 bg-primary text-white rounded-xl font-bold flex items-center justify-center gap-2 shadow-xl shadow-primary/20 hover:bg-blue-700 transition-all">
                            <span class="material-symbols-outlined">search</span>
                            Search Buses
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Routes Section -->
    <section class="py-20 px-6 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-end justify-between mb-12">
                <div>
                    <h2 class="text-3xl font-black mb-4">Popular Routes</h2>
                    <p class="text-slate-500 dark:text-slate-400">Join thousands of travelers on these top Moroccan
                        adventures</p>
                </div>
                <button class="hidden md:flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all">
                    View all destinations <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Route Card 1 -->
                <div class="group cursor-pointer">
                    <div class="relative h-64 mb-4 rounded-2xl overflow-hidden shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                            data-alt="Hassan II Mosque in Casablanca"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBEuuWB20mtAR5uxzqHiITUbarI0S-LYeZVMpOjd0_NfXVVjhX4MWGNmP0oBrfr6zpJPieSVuKmkPD0EocnN95F3TVJHeO-1Tzqn4MiCMuOXnXc3QVnSrrrfAwMs91tg2qAxyyjy__INGpMn-zBivQvxWdbM9a19eoTQdUTz58BMOYY9cpZX7qIzdV2lMAydxOSlOKSXKAS4mi5Ewf4QfTjvyXYpU91AaNnThTy-ZLgMYx7eSLTuRGKvoYXX5gE3QnHlbRtWN9VhgoP");'>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="text-xs font-bold uppercase tracking-widest opacity-80 mb-1">From Casablanca
                            </div>
                            <div class="text-xl font-bold">to Marrakech</div>
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-primary font-bold text-sm shadow-lg">
                            from 120 MAD
                        </div>
                    </div>
                </div>
                <!-- Route Card 2 -->
                <div class="group cursor-pointer">
                    <div class="relative h-64 mb-4 rounded-2xl overflow-hidden shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                            data-alt="Kasbah of the Udayas in Rabat"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrOORGSIuXCULr7oy41LjKg9_sT5DWR9wEdd5hLz0CL0NzrPWGernHMltEQCw0Qm0JJ1dILSIBxkCpzHHr6PLkOAC4rTwpSyqx-r9BnmEVjMwAE0ofNjSnpelsRlMnosSViq_8bf64HbJWkMfjjlyEA0nYRhNvOI5xHh1ZetV3eFNqdMKBl-GFcqE-HJQ90gnNzCsldGoEI944BlwPhW0NG40bO_swnAc7DsQ6Wn8yRZctBh-5Gk0rrMQ65B2EDK_8OJGW-u-4nA_-");'>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="text-xs font-bold uppercase tracking-widest opacity-80 mb-1">From Rabat</div>
                            <div class="text-xl font-bold">to Tangier</div>
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-primary font-bold text-sm shadow-lg">
                            from 90 MAD
                        </div>
                    </div>
                </div>
                <!-- Route Card 3 -->
                <div class="group cursor-pointer">
                    <div class="relative h-64 mb-4 rounded-2xl overflow-hidden shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                            data-alt="Fes El Bali ancient medina"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAbiLUeygCac3TLaMhVxvpBw8itZIhrgxNUlb_8kO9Wq46ooTH3n9LQqbMTNVf3BRtUJHKSswRkIh-1ilcR8QzeDH-ldXxG4c0DXY9KVIEU8450yT55IviM_eH7YsaJ73VUJPbShSRR_cgfrxJQy_61CDXrvQBvzEKmAvDj8lXXQVy1UqAChVaGwCxwhiAcJkCZ32sZh8sUB16B_-q_uy_0FlNuwfMlArfqWi-i82hV_pv9V-qOuRVHu0j2pOuIfWbXWN1F7-9n9YcF");'>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="text-xs font-bold uppercase tracking-widest opacity-80 mb-1">From Fes</div>
                            <div class="text-xl font-bold">to Chefchaouen</div>
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-primary font-bold text-sm shadow-lg">
                            from 75 MAD
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section -->
    <section class="py-24 px-6 bg-background-light dark:bg-background-dark">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-black mb-16">How it works</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <!-- Step 1 -->
                <div class="flex flex-col items-center gap-6 group">
                    <div
                        class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-4xl">travel_explore</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3">1. Search</h3>
                        <p class="text-slate-500 dark:text-slate-400">Choose your destination and preferred travel date
                            from 50+ cities.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col items-center gap-6 group">
                    <div
                        class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-4xl">contactless</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3">2. Book</h3>
                        <p class="text-slate-500 dark:text-slate-400">Select your seat and pay securely using local
                            cards or CMI.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col items-center gap-6 group">
                    <div
                        class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-4xl">confirmation_number</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3">3. Go</h3>
                        <p class="text-slate-500 dark:text-slate-400">Receive your ticket via SMS/Email and show it when
                            boarding.</p>
                    </div>
                </div>
                <!-- Connector line (Desktop only) -->
                <div
                    class="hidden md:block absolute top-10 left-[20%] right-[20%] h-0.5 border-t-2 border-dashed border-slate-200 dark:border-slate-800 -z-10">
                </div>
            </div>
        </div>
    </section>
    <!-- Calendar Component (Hidden Contextual usage) -->
    <div class="hidden">
        <!-- Calendar UI is generally a popover, placing it here for design reference -->
        <div class="bg-white p-6 rounded-2xl shadow-xl w-80">
            <div class="flex items-center justify-between mb-4">
                <button class="p-2 hover:bg-slate-100 rounded-lg"><span
                        class="material-symbols-outlined">chevron_left</span></button>
                <span class="font-bold">October 2023</span>
                <button class="p-2 hover:bg-slate-100 rounded-lg"><span
                        class="material-symbols-outlined">chevron_right</span></button>
            </div>
            <div class="grid grid-cols-7 text-center text-xs font-bold text-slate-400 mb-2">
                <div>S</div>
                <div>M</div>
                <div>T</div>
                <div>W</div>
                <div>T</div>
                <div>F</div>
                <div>S</div>
            </div>
            <div class="grid grid-cols-7 gap-1">
                <!-- Simulating some dates -->
                <div
                    class="h-8 flex items-center justify-center text-sm font-medium hover:bg-slate-50 rounded-full cursor-pointer">
                    22</div>
                <div
                    class="h-8 flex items-center justify-center text-sm font-medium hover:bg-slate-50 rounded-full cursor-pointer">
                    23</div>
                <div
                    class="h-8 flex items-center justify-center text-sm font-medium bg-primary text-white rounded-full cursor-pointer shadow-lg shadow-primary/20">
                    24</div>
                <div
                    class="h-8 flex items-center justify-center text-sm font-medium hover:bg-slate-50 rounded-full cursor-pointer">
                    25</div>
            </div>
        </div>
    </div>
</main>



@include('layouts.footer')
