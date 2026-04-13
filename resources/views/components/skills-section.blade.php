@php
    $skillGroups = [
        [
            'label' => 'Frontend',
            'color' => 'from-amber-600 to-yellow-500',
            'items' => ['JavaScript', 'TailwindCSS', 'Bootstrap', 'UI responsive'],
        ],
        [
            'label' => 'Backend',
            'color' => 'from-stone-800 to-stone-600',
            'items' => ['Laravel', 'PHP OOP', 'REST API', 'Autenticazione'],
        ],
        [
            'label' => 'Database & integrazioni',
            'color' => 'from-amber-700 to-amber-900',
            'items' => ['MySQL', 'Query ottimizzate', 'MuleSoft (base)', 'Data flow'],
        ],
        [
            'label' => 'Workflow',
            'color' => 'from-stone-600 to-stone-800',
            'items' => ['Git', 'Scrum/Agile', 'Code review', 'Documentazione'],
        ],
    ];
@endphp

{{-- Sezione competenze --}}
<section id="skills" class="js-section mx-auto max-w-6xl space-y-8 border-t border-amber-200/70 py-16">
    <div class="s-header">
        <span class="s-tag">03</span>
        <h2 class="s-title">COMPETENZE</h2>
        <div class="s-line"></div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($skillGroups as $group)
            <div
                class="js-skill-card group flex flex-col rounded-2xl bg-white p-4 text-left shadow-sm ring-1 ring-amber-200/80 transition hover:-translate-y-1 hover:bg-amber-50/40 hover:ring-amber-300"
            >
                <div class="mb-3 inline-flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br {{ $group['color'] }} text-xs font-semibold text-white">
                    {{ strtoupper(substr($group['label'], 0, 2)) }}
                </div>
                <p class="text-sm font-semibold text-stone-900">{{ $group['label'] }}</p>
                <ul class="mt-2 space-y-1 text-[0.8rem] text-stone-600">
                    @foreach ($group['items'] as $item)
                        <li class="flex items-center gap-2">
                            <span class="h-1 w-1 rounded-full bg-amber-300 group-hover:bg-amber-500"></span>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>

