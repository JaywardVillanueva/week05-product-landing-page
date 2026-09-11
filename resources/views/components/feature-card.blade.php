@props(['icon', 'title'])

<div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-200 border border-raka-dark/5">
    <div class="w-12 h-12 rounded-xl bg-raka-red/10 flex items-center justify-center text-2xl mb-4">
        {{ $icon }}
    </div>
    <h3 class="font-semibold text-lg text-raka-dark mb-2">{{ $title }}</h3>
    <p class="text-sm text-raka-dark/60 leading-relaxed">{{ $slot }}</p>
</div>