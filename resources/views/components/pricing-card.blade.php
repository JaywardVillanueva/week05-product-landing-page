@props(['plan', 'price', 'featured' => false, 'features' => []])

<div class="rounded-3xl p-8 {{ $featured ? 'bg-raka-red text-white shadow-xl scale-105' : 'bg-white text-raka-dark shadow-sm border border-raka-dark/5' }}">
    <h3 class="text-lg font-semibold">{{ $plan }}</h3>
    <p class="mt-4 text-4xl font-bold">{{ $price }}</p>

    <ul class="mt-6 space-y-3 text-sm {{ $featured ? 'text-white/90' : 'text-raka-dark/70' }}">
        @foreach ($features as $feature)
            <li class="flex items-start gap-2">
                <span>✔</span> <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button
        variant="{{ $featured ? 'secondary' : 'primary' }}"
        href="#cta"
        class="{{ $featured ? '!bg-white !text-raka-red mt-8 w-full text-center' : 'mt-8 w-full text-center' }}"
    >
        Order Now
    </x-button>
</div>