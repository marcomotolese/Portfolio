@php
    $skillGroups = [
        [
            'label' => 'Frontend',
            'color' => 'from-sky-500 to-emerald-500',
            'items' => ['JavaScript', 'TailwindCSS', 'Bootstrap', 'UI responsive'],
        ],
        [
            'label' => 'Backend',
            'color' => 'from-zinc-900 to-zinc-700',
            'items' => ['Laravel', 'PHP OOP', 'REST API', 'Autenticazione'],
        ],
        [
            'label' => 'Database & integrazioni',
            'color' => 'from-emerald-500 to-emerald-700',
            'items' => ['MySQL', 'Query ottimizzate', 'MuleSoft (base)', 'Data flow'],
        ],
        [
            'label' => 'Workflow',
            'color' => 'from-slate-500 to-slate-800',
            'items' => ['Git', 'Scrum/Agile', 'Code review', 'Documentazione'],
        ],
    ];
@endphp

{{-- Sezione competenze --}}
<section id="skills" class="js-section mx-auto max-w-6xl space-y-8 border-t border-zinc-200 py-16">
    <div class="s-header">
        <span class="s-tag">03</span>
        <h2 class="s-title">COMPETENZE</h2>
        <div class="s-line"></div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($skillGroups as $group)
            <div
                class="js-skill-card group flex flex-col rounded-2xl bg-white p-4 text-left shadow-sm ring-1 ring-zinc-200 transition hover:-translate-y-1 hover:bg-zinc-50 hover:ring-sky-200"
            >
                <div class="mb-3 inline-flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br {{ $group['color'] }} text-xs font-semibold text-zinc-50">
                    {{ strtoupper(substr($group['label'], 0, 2)) }}
                </div>
                <p class="text-sm font-semibold text-zinc-900">{{ $group['label'] }}</p>
                <ul class="mt-2 space-y-1 text-[0.8rem] text-zinc-600">
                    @foreach ($group['items'] as $item)
                        <li class="flex items-center gap-2">
                            <span class="h-1 w-1 rounded-full bg-zinc-300 group-hover:bg-sky-400"></span>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>

