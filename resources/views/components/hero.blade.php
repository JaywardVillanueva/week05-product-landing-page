<section id="home" class="relative overflow-hidden">
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-raka-gold/20 rounded-full blur-3xl"></div>
    <div class="absolute -left-10 top-40 w-72 h-72 bg-raka-red/10 rounded-full blur-3xl"></div>

    <div class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center relative">
        <div>
            <span class="inline-flex items-center gap-2 text-sm font-medium text-raka-red bg-raka-red/10 px-3 py-1 rounded-full">
                📍 Barangay Dos, Pagsanjan
            </span>

            <h1 class="mt-6 text-4xl md:text-5xl font-bold leading-tight text-raka-dark">
                Everything your <span class="text-raka-red">kitchen and gutom</span> could ever need — right next door.
            </h1>

            <p class="mt-6 text-raka-dark/70 text-lg">
                Raka Sari-Sari Store has been serving the neighborhood with tingi-tingi essentials, cold drinks, snacks, and load — open early, open late, always suki-friendly.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <x-button variant="primary" href="#products">See What's in Store</x-button>
                <x-button variant="secondary" href="#visit">Find Us</x-button>
            </div>
        </div>

        <div class="relative">
            <img src="{{ asset('images/store-front.jpg') }}" alt="Raka Sari-Sari Store" class="rounded-3xl shadow-xl w-full object-cover">
            <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-lg px-5 py-4">
                <p class="text-2xl font-bold text-raka-red">10+ yrs</p>
                <p class="text-xs text-raka-dark/60">serving the barangay</p>
            </div>
        </div>
    </div>
</section>