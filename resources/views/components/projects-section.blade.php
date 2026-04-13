@php
    $projects = [
        [
            'title' => 'MentorWavePro',
            'description' => 'Software per personal trainer che unisce gestione clienti, schede di allenamento, misurazioni e piano alimentare in un’unica piattaforma chiara e professionale. Web app moderna installabile sul telefono come PWA: trainer e clienti usano sempre lo stesso strumento, ovunque. Obiettivo: ridurre il caos operativo — meno Excel, meno PDF sparsi e meno conversazioni frammentate su più canali, con un flusso ordinato da seguire quotidianamente.',
            'badge' => 'PWA',
            'badge_color' => 'from-orange-500 to-rose-600',
            'stack' => ['Laravel', 'PWA', 'TailwindCSS', 'MySQL'],
            'link' => null,
            'link_label' => null,
            'images' => [
                'images/dashboard-client.png',
                'images/dashboard-trainer.png',
                'images/misurazioni-client.png',
                'images/schede-trainer.png',
            ],
        ],
        [
            'title' => 'SalonFlow',
            'description' => 'SaaS CRM multi-tenant per saloni di bellezza (Laravel 11, Breeze, Livewire Volt). Gestione clienti, trattamenti e fidelizzazione con dashboard KPI, pipeline per fasi cliente, Kanban operativo, schede cliente avanzate (allergie, preferenze, storico), ricerca veloce ed export CSV. Architettura production-ready con isolamento dati per tenant (tenant_id), middleware dedicati e controlli di accesso.',
            'badge' => 'SaaS',
            'badge_color' => 'from-fuchsia-500 to-indigo-600',
            'stack' => ['Laravel 11', 'Livewire Volt', 'Breeze', 'MySQL', 'Multi-tenant'],
            'link' => null,
            'link_label' => null,
            'images' => [
                'images/salonFlow.png',
            ],
        ],
        [
            'title' => 'Room & Booking Manager',
            'description' => 'Gestione stanze e prenotazioni con area utente, dashboard admin e statistiche.',
            'badge' => 'Featured',
            'badge_color' => 'from-emerald-500 to-sky-500',
            'stack' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL'],
            'link' => null,
            'link_label' => null,
            'images' => [
                'images/admin-hotel.PNG',
                'images/hotel.PNG',
                'images/user-prenotazione.PNG',
            ],
        ],
        [
            'title' => 'Support Dashboard',
            'description' => 'Sistema ticketing con MuleSoft (email, CSV, API JSON) e viste di sintesi.',
            'badge' => 'Integration',
            'badge_color' => 'from-emerald-500 to-emerald-700',
            'stack' => ['Laravel', 'MuleSoft', 'PHP', 'JavaScript'],
            'link' => null,
            'link_label' => null,
            'images' => [
                'images/support-dash-admin.png',
                'images/support-dash-client.png',
            ],
        ],

        [
            'title' => 'immagineamantea.com',
            'description' => 'Sito vetrina per negozio di abbigliamento con buoni regalo digitali.',
            'badge' => 'Live',
            'badge_color' => 'from-amber-500 to-rose-500',
            'stack' => ['Laravel', 'PHP', 'jQuery', 'Bootstrap'],
            'link' => 'https://immagineamantea.com',
            'link_label' => 'Vai al sito',
            'images' => [
                'images/immagineamantea.png',
            ],
        ],
        [
            'title' => 'Movie Finder',
            'description' => 'Ricerca film, recensioni e preferiti via API OMDb, con dark mode curata.',
            'badge' => 'In sviluppo',
            'badge_color' => 'from-zinc-900 to-zinc-700',
            'stack' => ['Laravel', 'PHP', 'JavaScript', 'Bootstrap'],
            'link' => null,
            'link_label' => null,
            'images' => [],
        ],
    ];
@endphp

<section id="projects" class="js-section mx-auto max-w-7xl space-y-8 border-t border-amber-200/70 py-16">
    <div class="s-header">
        <span class="s-tag">02</span>
        <h2 class="s-title">PROGETTI SELEZIONATI</h2>
        <div class="s-line"></div>
    </div>

    <div class="grid gap-8 xl:grid-cols-2">
        @foreach ($projects as $project)
            <article
                class="js-project-card group flex flex-col rounded-2xl bg-white/95 p-6 shadow-sm ring-1 ring-amber-200/80 transition hover:-translate-y-1.5 hover:bg-white hover:shadow-[0_18px_60px_rgba(120,53,15,0.12)] hover:ring-amber-300/90"
            >

                {{-- Galleria: 2 immagini affiancate grandi; altrimenti hero + righe aggiuntive; click = lightbox --}}
                @if (!empty($project['images']))
                    @php $imgCount = count($project['images']); @endphp

                    @if ($imgCount === 2)
                        <div class="mb-4 grid grid-cols-1 gap-3 sm:grid-cols-2">
                            @foreach ($project['images'] as $projectImage)
                                <button
                                    type="button"
                                    class="project-gallery-thumb group/img relative flex min-h-[200px] cursor-zoom-in items-center justify-center overflow-hidden rounded-xl bg-stone-100 ring-1 ring-amber-200/70 transition hover:ring-amber-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-600"
                                    data-project-lightbox
                                    data-project-lightbox-src="{{ asset($projectImage) }}"
                                    data-project-lightbox-alt="{{ $project['title'] }} — screenshot"
                                >
                                    <img
                                        src="{{ asset($projectImage) }}"
                                        alt="{{ $project['title'] }}"
                                        class="max-h-[min(320px,55vh)] w-full object-contain"
                                        loading="lazy"
                                        decoding="async"
                                    >
                                    <span class="pointer-events-none absolute bottom-2 right-2 rounded-md bg-zinc-900/75 px-2 py-0.5 text-[0.65rem] text-white opacity-0 transition group-hover/img:opacity-100">
                                        Apri grande
                                    </span>
                                </button>
                            @endforeach
                        </div>
                    @else
                        <button
                            type="button"
                            class="project-gallery-thumb mb-3 flex w-full cursor-zoom-in items-center justify-center overflow-hidden rounded-xl bg-stone-100 ring-1 ring-amber-200/70 transition hover:ring-amber-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-600"
                            data-project-lightbox
                            data-project-lightbox-src="{{ asset($project['images'][0]) }}"
                            data-project-lightbox-alt="{{ $project['title'] }} — screenshot principale"
                        >
                            <img
                                src="{{ asset($project['images'][0]) }}"
                                alt="{{ $project['title'] }}"
                                class="max-h-[min(380px,60vh)] w-full object-contain"
                                loading="lazy"
                                decoding="async"
                            >
                        </button>

                        @if ($imgCount > 1)
                            <div class="mb-3 grid grid-cols-2 gap-3 sm:grid-cols-3">
                                @foreach (array_slice($project['images'], 1, 6) as $projectImage)
                                    <button
                                        type="button"
                                        class="project-gallery-thumb flex min-h-[120px] cursor-zoom-in items-center justify-center overflow-hidden rounded-lg bg-stone-100 ring-1 ring-amber-200/70 transition hover:ring-amber-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-600"
                                        data-project-lightbox
                                        data-project-lightbox-src="{{ asset($projectImage) }}"
                                        data-project-lightbox-alt="{{ $project['title'] }} — screenshot"
                                    >
                                        <img
                                            src="{{ asset($projectImage) }}"
                                            alt="{{ $project['title'] }} preview"
                                            class="max-h-36 w-full object-contain"
                                            loading="lazy"
                                            decoding="async"
                                        >
                                    </button>
                                @endforeach
                            </div>
                        @endif
                    @endif

                    <p class="mb-1 text-[0.7rem] text-stone-500">
                        Clicca un’immagine per aprirla a schermo intero ({{ $imgCount }} screenshot)
                    </p>
                @else
                    <div
                        class="mb-4 min-h-[200px] rounded-xl bg-gradient-to-br {{ $project['badge_color'] }} opacity-90 blur-[0.3px] transition group-hover:opacity-100"
                    ></div>
                @endif

                {{-- BADGE --}}
                <div class="mb-2 flex items-center justify-between text-xs">
                    <span class="inline-flex items-center gap-1 rounded-full bg-stone-900 px-2 py-0.5 text-[0.65rem] font-medium text-stone-50">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                        {{ $project['badge'] }}
                    </span>
                </div>

                {{-- TITOLO --}}
                <h3 class="text-lg font-semibold text-stone-900">{{ $project['title'] }}</h3>

                {{-- DESCRIZIONE --}}
                <p class="mt-2 text-[0.95rem] leading-relaxed text-stone-600">
                    {{ $project['description'] }}
                </p>

                {{-- STACK --}}
                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach ($project['stack'] as $tech)
                        <span class="rounded-full bg-amber-50 px-2 py-0.5 text-[0.65rem] text-stone-800 ring-1 ring-amber-200/90">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>

                {{-- LINK --}}
                @if ($project['link'])
                    <a
                        href="{{ $project['link'] }}"
                        target="_blank"
                        rel="noreferrer"
                        class="mt-4 inline-flex items-center text-xs font-medium text-amber-800 hover:text-amber-900"
                    >
                        {{ $project['link_label'] }}
                        <span class="ml-1 text-[0.9rem] transition group-hover:translate-x-0.5">
                            {{ Str::contains($project['link_label'], 'sito') ? '↗' : '→' }}
                        </span>
                    </a>
                @endif

            </article>
        @endforeach
    </div>
</section>
