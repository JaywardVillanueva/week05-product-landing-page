@props(['name', 'position', 'photo'])

<div class="bg-white rounded-2xl p-6 shadow-sm border border-raka-dark/5">
    <p class="text-raka-dark/70 text-sm leading-relaxed mb-6">"{{ $slot }}"</p>
    <div class="flex items-center gap-3">
        <img src="{{ $photo }}" alt="{{ $name }}" class="w-10 h-10 rounded-full object-cover">
        <div>
            <p class="font-semibold text-sm">{{ $name }}</p>
            <p class="text-xs text-raka-dark/50">{{ $position }}</p>
        </div>
    </div>
</div>