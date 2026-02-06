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
            <form action="{{ route('trips') }}" method="GET">
                <div
                    class="relative -mt-24 z-20 max-w-6xl mx-auto bg-white dark:bg-slate-900 rounded-2xl shadow-2xl p-6 border border-slate-100 dark:border-slate-800">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-500 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">location_on</span> From
                            </label>
                            <select name="departure_city_id"
                                class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl h-14 px-4 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-all cursor-pointer">
                                <option value="{{ 0 }}">Departure City</option>
                                @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-500 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">near_me</span> To
                            </label>
                            <select name="arrival_city_id"
                                class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl h-14 px-4 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-all cursor-pointer">
                                <option value="{{ 0 }}">Arrival City</option>
                                @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-500 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">calendar_today</span> Date
                            </label>
                            <div class="relative">
                                <input
                                    class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl h-14 px-4 text-slate-900 dark:text-white focus:ring-primary focus:border-primary transition-all cursor-pointer"
                                    type="date" name="departure_date" />
                                <span
                                    class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">expand_more</span>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full h-14 bg-primary text-white rounded-xl font-bold flex items-center justify-center gap-2 shadow-xl shadow-primary/20 hover:bg-blue-700 transition-all">
                                <span class="material-symbols-outlined">search</span>
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @if ($trips->isEmpty())
            <p>No trips found.</p>
        @else
        <div class="flex-1 space-y-6 max-w-7xl mx-auto mt-24">
        @foreach ($trips as $trip)
        <div
                class="relative bg-white dark:bg-[#1a1a33] rounded-2xl border border-[#e7e7f3] dark:border-white/10 shadow-sm hover:shadow-md transition-shadow group overflow-visible">
                <div
                    class="absolute -top-3 left-1/2 -translate-x-1/2 md:left-auto md:right-[200px] md:translate-x-0 z-10">
                    {{-- <div
                        class="bg-[#ef4444] text-white text-[11px] font-bold px-3 py-1.5 rounded-lg flex items-center gap-1.5 shadow-sm">
                        <span class="material-symbols-outlined text-[14px]">event_seat</span>
                        <span>12 Seats left</span>
                    </div> --}}
                </div>
                <div class="flex flex-col md:flex-row min-h-[140px]">
                    <div
                        class="w-full md:w-[220px] p-6 flex flex-col items-start justify-center gap-4 bg-[#fdfdfd] dark:bg-white/5 rounded-l-2xl">
                        <div class="flex items-center gap-3 w-full">
                            <div class="px-2.5 py-1 bg-gray-100 dark:bg-white/10 rounded-md">
                                <span class="text-[11px] font-bold tracking-tight">Satas</span>
                            </div>
                            <div
                                class="px-3 py-1 bg-[#fff7ed] border border-[#ffedd5] text-[#c2410c] text-[11px] font-bold rounded-full">
                                Comfort
                            </div>
                        </div>
                        <div class="w-32 h-12 flex items-center justify-center">
                            <div class="w-full h-full bg-blue-600 rounded-lg flex items-center justify-center text-white font-black text-xl italic"
                                data-alt="CTM Bus Operator Logo">SATAS</div>
                        </div>
                    </div>
                    <div class="flex-1 px-8 py-6 flex items-center justify-between relative">
                        <div class="flex flex-col">
                            <span class="text-3xl font-black tracking-tight">{{ $trip->departure_time->format('H:i') }}</span>
                            <span class="text-sm font-bold mt-1">Fes</span>
                            <span class="text-xs text-gray-500 font-medium">Voyageurs Station</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center px-12 relative group/line">
                            <div
                                class="absolute inset-x-12 top-1/2 -translate-y-1/2 border-t-2 border-dotted border-gray-300 dark:border-white/20">
                            </div>
                            <div
                                class="relative z-10 bg-white dark:bg-[#1a1a33] px-3 py-1 border border-gray-200 dark:border-white/10 rounded-full">
                                <span class="text-xs font-bold text-gray-600 dark:text-gray-300">3h 15m</span>
                            </div>
                            <div class="absolute right-12 top-1/2 -translate-y-1/2 translate-x-1">
                                <span class="material-symbols-outlined text-gray-400 text-sm">chevron_right</span>
                            </div>
                        </div>
                        <div class="flex flex-col text-right">
                            <span class="text-3xl font-black tracking-tight">{{ $trip->arrival_time->format('H:i') }}</span>
                            <span class="text-sm font-bold mt-1">Casablanca</span>
                            <span class="text-xs text-gray-500 font-medium">Main Station</span>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-[200px] p-6 border-t md:border-t-0 md:border-l-2 border-dashed border-gray-200 dark:border-white/10 flex flex-col items-center justify-center gap-4">
                        <div class="text-center">
                            <span class="text-xs text-gray-500 font-bold block mb-1">From</span>
                            <div class="flex items-baseline gap-1">
                                <span class="text-3xl font-black text-[#f97316]">120</span>
                                <span class="text-lg font-black text-[#f97316]">MAD</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-primary text-white font-bold py-3 px-6 rounded-xl text-sm hover:brightness-110 transition-all shadow-lg shadow-primary/20">
                            Select
                        </button>
                    </div>
                </div>
            </div>

            @endforeach
            </div>
            @endif
        {{-- @if ($trips->isEmpty())
            <p>No trips found.</p>
        @else
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Trip ID</th>
                        <th>Bus</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trips as $trip)
                        <tr>
                            <td>{{ $trip->id }}</td>
                            <td>{{ $trip->company->fleet_code ?? 'N/A' }}</td>
                            <td>{{ $trip->departure_time->format('Y-m-d H:i') }}</td>
                            <td>{{ $trip->arrival_time->format('Y-m-d H:i') }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif --}}
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
