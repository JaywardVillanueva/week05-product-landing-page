<x-layouts.app>
    <x-navbar />
    <x-hero />

    {{-- FEATURES --}}
    <section id="features" class="max-w-6xl mx-auto px-6 py-20">
        <div class="text-center max-w-xl mx-auto mb-14">
            <h2 class="text-3xl font-bold">Why the Barangay Shops at Raka</h2>
            <p class="text-raka-dark/60 mt-3">Small store, big para sa lahat.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-feature-card icon="🛒" title="Tingi-Tingi Pricing">Buy exactly what you need — sachets, single sticks, or by the piece.</x-feature-card>
            <x-feature-card icon="🧊" title="Ice-Cold Drinks">Softdrinks, water, and ice always ready for the heat.</x-feature-card>
            <x-feature-card icon="📱" title="Load & Prepaid">Load, e-load, and pasaload for all major networks.</x-feature-card>
            <x-feature-card icon="🍞" title="Fresh Pandesal">Baked fresh every morning, straight from the local panaderya.</x-feature-card>
            <x-feature-card icon="🥫" title="Canned Goods & Snacks">A full shelf of everyday Pinoy favorites, always in stock.</x-feature-card>
            <x-feature-card icon="🕒" title="Open Early, Open Late">Reliable hours so you're never left gutom.</x-feature-card>
        </div>
    </section>

    {{-- PRODUCT SHOWCASE --}}
    <section id="products" class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-14">Inside the Store</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <img src="{{ asset('images/shelf.jpg') }}" alt="Store shelf" class="rounded-2xl shadow-sm object-cover h-64 w-full">
                <img src="{{ asset('images/counter.jpg') }}" alt="Store counter" class="rounded-2xl shadow-sm object-cover h-64 w-full">
                <img src="{{ asset('images/fridge.jpg') }}" alt="Drinks fridge" class="rounded-2xl shadow-sm object-cover h-64 w-full">
            </div>
            <ul class="mt-10 grid sm:grid-cols-2 gap-4 text-sm text-raka-dark/70">
                <li>✔ Over 150 everyday products</li>
                <li>✔ Fresh restocks every week</li>
                <li>✔ Friendly, familiar service</li>
                <li>✔ Fast transactions, no long lines</li>
            </ul>
        </div>
    </section>

    {{-- PRICING / BUNDLES --}}
    <section id="pricing" class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center mb-14">Suki Bundles</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <x-pricing-card plan="Tingi Pack" price="₱50"
                :features="['Sachets & singles', 'Perfect for one meal', 'Mix and match items']" />

            <x-pricing-card plan="Family Pack" price="₱500" :featured="true"
                :features="['Weekly household essentials', 'Rice, canned goods, drinks', 'Free delivery within barangay']" />

            <x-pricing-card plan="Suki Bulk Deal" price="₱1,500+"
                :features="['For resellers & carinderias', 'Discounted bulk pricing', 'Priority restock notice']" />
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section id="reviews" class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-14">What Neighbors Say</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <x-testimonial-card name="Aling Nena" position="Suki, 5 years" photo="https://i.pravatar.cc/100?img=47">
                    Malapit lang, kumpleto pa. Wala nang dahilan pang lumabas ng barangay.
                </x-testimonial-card>
                <x-testimonial-card name="Kuya Jun" position="Tricycle Driver" photo="https://i.pravatar.cc/100?img=12">
                    Bukas pa rin sila kahit gabi na. Lifesaver talaga pag walang load.
                </x-testimonial-card>
                <x-testimonial-card name="Ate Rosa" position="Homemaker" photo="https://i.pravatar.cc/100?img=32">
                    Sobrang bait ng tindera, hindi nagmamahal, tapos laging fresh ang paninda.
                </x-testimonial-card>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section id="cta" class="max-w-4xl mx-auto px-6 py-20 text-center">
        <h2 class="text-3xl font-bold mb-4">Punta ka na, suki!</h2>
        <p class="text-raka-dark/60 mb-8">Visit us today or message us on Facebook for reservations and bulk orders.</p>
        <div class="flex justify-center gap-4">
            <x-button variant="primary" href="#">Message on Facebook</x-button>
            <x-button variant="secondary" href="#visit">Get Directions</x-button>
        </div>
    </section>

    <div id="visit"></div>
    <x-footer />
</x-layouts.app>