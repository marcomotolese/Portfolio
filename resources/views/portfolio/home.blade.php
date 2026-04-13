@extends('layouts.app')

@section('title', 'Portfolio — Marco Motolese')

@section('content')
    {{-- HERO --}}
    <section class="js-hero grid gap-10 pb-16 pt-6 lg:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)] lg:items-center">
        <div class="space-y-8">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/70 px-3 py-1 text-xs font-medium text-zinc-600 shadow-sm ring-1 ring-zinc-200">
                <span class="inline-flex h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                Disponibile per nuove opportunità
            </div>

            <div class="space-y-4">
                <h1 class="text-balance text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl lg:text-5xl">
                    Ciao, sono
                    <span class="bg-gradient-to-r from-sky-500 via-emerald-500 to-amber-500 bg-clip-text text-transparent">
                        Marco Motolese
                    </span>
                    <span class="block text-zinc-700">Junior Developer focalizzato su esperienze web curate.</span>
                </h1>

                <p class="max-w-xl text-sm leading-relaxed text-zinc-600 sm:text-base">
                    Progetto e sviluppo interfacce pulite, accessibili e performanti usando Laravel, Tailwind e le
                    moderne best practice del web. Il mio obiettivo è unire **semplicità visiva** e **attenzione al
                    dettaglio** in ogni progetto.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-4">
                <a href="#projects" class="btn-primary">
                    Guarda i progetti
                </a>
                <a href="#contact" class="btn-ghost">
                    Contattami
                </a>
                <a href="{{ asset('cv-marco-motolese.pdf') }}" target="_blank" rel="noreferrer" class="text-xs font-medium text-zinc-500 underline underline-offset-4">
                    Scarica il CV
                </a>
            </div>

            <div class="grid gap-4 text-xs text-zinc-600 sm:grid-cols-3">
                <div class="rounded-xl bg-white/80 p-3 shadow-sm ring-1 ring-zinc-100">
                    <p class="text-[0.7rem] uppercase tracking-[0.18em] text-zinc-500">Esperienza</p>
                    <p class="mt-1 text-sm font-semibold text-zinc-900">2+ anni</p>
                    <p class="mt-1 text-[0.75rem]">tra aziende, freelance e bootcamp intensivo.</p>
                </div>
                <div class="rounded-xl bg-white/80 p-3 shadow-sm ring-1 ring-zinc-100">
                    <p class="text-[0.7rem] uppercase tracking-[0.18em] text-zinc-500">Focus</p>
                    <p class="mt-1 text-sm font-semibold text-zinc-900">Laravel &amp; Frontend</p>
                    <p class="mt-1 text-[0.75rem]">App gestionali, dashboard, siti vetrina e e‑commerce.</p>
                </div>
                <div class="rounded-xl bg-white/80 p-3 shadow-sm ring-1 ring-zinc-100">
                    <p class="text-[0.7rem] uppercase tracking-[0.18em] text-zinc-500">Valori</p>
                    <p class="mt-1 text-sm font-semibold text-zinc-900">cura, chiarezza, crescita</p>
                    <p class="mt-1 text-[0.75rem]">sempre in modalità <span class="font-mono">LEARN_MODE=true</span>.</p>
                </div>
            </div>
        </div>

        <div class="js-hero-photo">
            <div class="relative mx-auto max-w-xs rounded-3xl bg-gradient-to-b from-sky-100 via-white to-emerald-50 p-4 shadow-[0_24px_80px_rgba(15,23,42,0.16)]">
                <div class="aspect-[4/5] overflow-hidden rounded-2xl bg-zinc-200">
                    
                    <div class="flex h-full items-center justify-center text-4xl text-zinc-500/40">
                        MM
                    </div>
                </div>

                <div class="mt-4 space-y-1 text-[0.75rem] text-zinc-600">
                    <p class="font-medium text-zinc-900">Marco Motolese</p>
                    <p>Junior Developer · Full Stack</p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="rounded-full bg-white px-2 py-0.5 text-[0.7rem] text-zinc-700 ring-1 ring-zinc-200">
                            Laravel
                        </span>
                        <span class="rounded-full bg-white px-2 py-0.5 text-[0.7rem] text-zinc-700 ring-1 ring-zinc-200">
                            Tailwind CSS
                        </span>
                        <span class="rounded-full bg-white px-2 py-0.5 text-[0.7rem] text-zinc-700 ring-1 ring-zinc-200">
                            JavaScript
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="js-section space-y-8 border-t border-zinc-200 py-16">
        <div class="s-header">
            <span class="s-tag">01</span>
            <h2 class="s-title">a.EXE</h2>
            <div class="s-line"></div>
        </div>

        <div class="about-grid grid gap-8 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)]">
            <div class="terminal-card space-y-4">
                <p class="text-xs font-medium uppercase tracking-[0.18em] text-zinc-500">
                    Chi sono
                </p>
                <p class="text-sm leading-relaxed text-zinc-700">
                    Sono <strong>Marco Motolese</strong>, Junior Developer appassionato di programmazione e del mondo digitale.
                    Mi piace trasformare idee in interfacce chiare, veloci e facili da usare.
                </p>
                <p class="text-sm leading-relaxed text-zinc-700">
                    Il mio approccio combina <strong>curiosità continua</strong>, attenzione al dettaglio e voglia di
                    collaborare con team di prodotto, designer e altri sviluppatori.
                </p>
                <p class="text-sm leading-relaxed text-zinc-700">
                    Mi trovi spesso a sperimentare con nuove tecnologie, a rifinire micro‑interazioni o a migliorare
                    l’architettura di un progetto per renderlo più semplice da mantenere.
                </p>
            </div>

            <div class="terminal-card">
                <p class="mb-4 text-xs font-medium uppercase tracking-[0.18em] text-zinc-500">
                    Competenze principali
                </p>
                <div class="space-y-3 text-xs sm:text-sm">
                    @php
                        $skills = [
                            ['label' => 'HTML5/CSS3', 'value' => 85],
                            ['label' => 'JavaScript', 'value' => 75],
                            ['label' => 'Bootstrap', 'value' => 85],
                            ['label' => 'PHP', 'value' => 78],
                            ['label' => 'Laravel', 'value' => 78],
                            ['label' => 'SQL/MySQL', 'value' => 72],
                            ['label' => 'Scrum/Agile', 'value' => 80],
                            ['label' => 'MuleSoft [BASE]', 'value' => 50, 'accent' => true],
                        ];
                    @endphp

                    @foreach ($skills as $skill)
                        <div class="skill-line js-skill">
                            <span class="skill-name">
                                {{ $skill['label'] }}
                            </span>
                            <div class="skill-meter">
                                <div
                                    class="skill-meter-fill {{ !empty($skill['accent']) ? 'skill-meter-fill-amber' : '' }}"
                                    data-skill="{{ $skill['value'] }}"
                                ></div>
                            </div>
                            <span class="skill-pct {{ !empty($skill['accent']) ? 'text-amber-300' : '' }}">{{ $skill['value'] }}%</span>
                        </div>
                    @endforeach

                    <p class="pt-1 text-[0.7rem] text-zinc-500">
                        Ultimo aggiornamento competenze: 2025
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="js-section space-y-8 border-t border-zinc-200 py-16">
        <div class="s-header">
            <span class="s-tag">02</span>
            <h2 class="s-title">PROGETTI SELEZIONATI</h2>
            <div class="s-line"></div>
        </div>

        <div class="projects-terminal terminal-card">
            <div class="proj-header-row">
                <span>#ID</span>
                <span>PROJECT_NAME / DESCRIPTION</span>
                <span>TECH_STACK</span>
                <span>STATUS</span>
            </div>

            {{-- Room & Booking Manager --}}
            <a href="https://lnkd.in/dhvDFecP" class="proj-data-row js-project" target="_blank" rel="noreferrer">
                <span class="proj-id">#001</span>
                <div class="proj-info">
                    <div class="proj-name">Room &amp; Booking Manager</div>
                    <div class="proj-subdesc">
                        Gestione stanze/prenotazioni con area utente e dashboard admin.
                    </div>
                    <div class="proj-img-ref">📷 GitHub / Local</div>
                </div>
                <div class="proj-stack">
                    <span class="p-tag">Laravel</span>
                    <span class="p-tag">PHP</span>
                    <span class="p-tag">Bootstrap</span>
                    <span class="p-tag">MySQL</span>
                </div>
                <div class="proj-status">
                    <span class="status-live">● CODE</span>
                </div>
            </a>

            {{-- Movie Finder --}}
            <a href="#" class="proj-data-row js-project">
                <span class="proj-id">#002</span>
                <div class="proj-info">
                    <div class="proj-name">Movie Finder</div>
                    <div class="proj-subdesc">
                        Ricerca film, recensioni, preferiti con API OMDb e dark mode.
                    </div>
                    <div class="proj-img-ref">📷 GitHub / Local</div>
                </div>
                <div class="proj-stack">
                    <span class="p-tag">Laravel</span>
                    <span class="p-tag">PHP</span>
                    <span class="p-tag">JS</span>
                    <span class="p-tag">Bootstrap</span>
                    <span class="p-tag">SQL</span>
                </div>
                <div class="proj-status">
                    <span class="status-wip">◌ CODE</span>
                </div>
            </a>

            {{-- Support Dashboard --}}
            <a href="#" class="proj-data-row js-project">
                <span class="proj-id">#003</span>
                <div class="proj-info">
                    <div class="proj-name">Support Dashboard</div>
                    <div class="proj-subdesc">
                        Sistema ticket con MuleSoft (email, CSV, API JSON, statistiche).
                    </div>
                    <div class="proj-img-ref">📷 GitHub / Local</div>
                </div>
                <div class="proj-stack">
                    <span class="p-tag">Laravel</span>
                    <span class="p-tag">MuleSoft</span>
                    <span class="p-tag">PHP</span>
                    <span class="p-tag">JS</span>
                </div>
                <div class="proj-status">
                    <span class="status-live">● CODE</span>
                </div>
            </a>

            {{-- immagineamantea.com --}}
            <a href="https://immagineamantea.com" class="proj-data-row js-project" target="_blank" rel="noreferrer">
                <span class="proj-id">#004</span>
                <div class="proj-info">
                    <div class="proj-name">immagineamantea.com</div>
                    <div class="proj-subdesc">
                        Vetrina abbigliamento + buoni regalo digitali con admin panel.
                    </div>
                    <div class="proj-img-ref">🌐 LIVE</div>
                </div>
                <div class="proj-stack">
                    <span class="p-tag">Laravel</span>
                    <span class="p-tag">PHP</span>
                    <span class="p-tag">jQuery</span>
                    <span class="p-tag">Bootstrap</span>
                </div>
                <div class="proj-status">
                    <span class="status-live">● LIVE</span>
                </div>
            </a>

            {{-- Job Board --}}
            <a href="#" class="proj-data-row js-project">
                <span class="proj-id">#005</span>
                <div class="proj-info">
                    <div class="proj-name">Job Board Platform</div>
                    <div class="proj-subdesc">
                        Piattaforma annunci lavoro con registrazione e creazione annunci.
                    </div>
                    <div class="proj-img-ref">📷 GitHub / Local</div>
                </div>
                <div class="proj-stack">
                    <span class="p-tag">Laravel</span>
                    <span class="p-tag">PHP</span>
                    <span class="p-tag">MySQL</span>
                    <span class="p-tag">Bootstrap</span>
                </div>
                <div class="proj-status">
                    <span class="status-live">● CODE</span>
                </div>
            </a>
        </div>
    </section>

    {{-- EXPERIENCE --}}
    <section id="experience" class="js-section space-y-8 border-t border-zinc-200 py-16">
        <div class="s-header">
            <span class="s-tag">03</span>
            <h2 class="s-title">ESPERIENZE</h2>
            <div class="s-line"></div>
        </div>

        <div class="exp-terminal terminal-card">
            <div class="exp-body space-y-5 text-sm leading-relaxed">
                {{-- MyDonor --}}
                <div class="exp-row">
                    <div class="exp-left">
                        <div class="exp-period">gen 2025 — mar 2025</div>
                        <div class="exp-type">FULL_TIME</div>
                    </div>
                    <div class="exp-right">
                        <div class="exp-title">Full Stack Developer</div>
                        <div class="exp-co">myDonor Società Benefit</div>
                        <p class="exp-desc">
                            Sviluppo e manutenzione web app gestionali per enti/organizzazioni (clienti, attività interne).<br />
                            <span class="exp-tech">
                                Laravel, PHP, JavaScript, jQuery, MySQL, MVC, REST API
                            </span>
                        </p>
                    </div>
                </div>

                {{-- Immagine Amantea --}}
                <div class="exp-row">
                    <div class="exp-left">
                        <div class="exp-period">ott 2025 — nov 2025</div>
                        <div class="exp-type">FREELANCE</div>
                    </div>
                    <div class="exp-right">
                        <div class="exp-title">Full-stack Developer</div>
                        <div class="exp-co">Immagine Amantea</div>
                        <p class="exp-desc">
                            Sviluppato immagineamantea.com (buoni regalo digitali, dashboard admin, email automatiche).<br />
                            <span class="exp-tech">
                                Laravel, PHP, JavaScript, Bootstrap, jQuery, MySQL
                            </span>
                        </p>
                    </div>
                </div>

                {{-- Forstreet --}}
                <div class="exp-row">
                    <div class="exp-left">
                        <div class="exp-period">feb 2024 — dic 2024</div>
                        <div class="exp-type">FULL_TIME</div>
                    </div>
                    <div class="exp-right">
                        <div class="exp-title">Sviluppatore</div>
                        <div class="exp-co">Forstreet</div>
                        <p class="exp-desc">
                            Sviluppato eCommerce con WordPress/WooCommerce (catalogo, pagamenti, ordini, SEO, sicurezza).<br />
                            <span class="exp-tech">
                                WordPress, WooCommerce, PHP, Responsive, SEO
                            </span>
                        </p>
                    </div>
                </div>

                {{-- Certificazioni --}}
                <div class="exp-row exp-row-accent">
                    <div class="exp-left">
                        <div class="exp-period">giu 2025 — lug 2025</div>
                        <div class="exp-type">CERT</div>
                    </div>
                    <div class="exp-right">
                        <div class="exp-title">MuleSoft Developer</div>
                        <div class="exp-co">BC SOFT</div>
                        <p class="exp-desc">
                            Corso MuleSoft Developer (API, integrazioni, Anypoint Platform, DataWeave, Salesforce basics).
                        </p>
                    </div>
                </div>

                <div class="exp-row exp-row-highlight">
                    <div class="exp-left">
                        <div class="exp-period">nov 2023 — giu 2024</div>
                        <div class="exp-type">BOOTCAMP</div>
                    </div>
                    <div class="exp-right">
                        <div class="exp-title">Full Stack Developer</div>
                        <div class="exp-co">Aulab</div>
                        <p class="exp-desc">
                            Formazione 6 mesi: HTML/CSS/JS, PHP, Laravel, MySQL, Bootstrap, metodologie Agile.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="js-section space-y-8 border-t border-zinc-200 pb-4 pt-16">
        <div class="s-header">
            <span class="s-tag">04</span>
            <h2 class="s-title">CONTATTI</h2>
            <div class="s-line"></div>
        </div>

        <div class="contact-grid grid gap-8 lg:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)]">
            <div class="terminal-card">
                <div class="space-y-3 text-sm leading-relaxed text-zinc-700">
                    <p class="text-[0.9rem] leading-relaxed">
                        Hai un progetto in mente, vuoi collaborare o semplicemente fare due chiacchiere di codice?
                        <span class="text-emerald-600">Scrivimi — rispondo sempre.</span>
                    </p>
                    <a href="mailto:marcomotolese10@gmail.com" class="contact-link-row">
                        <span class="cl-key">email</span>
                        <span class="cl-val">marcomotolese10@gmail.com</span>
                        <span class="cl-arrow">→</span>
                    </a>
                    <a
                        href="https://www.linkedin.com/in/marco-motolese-webdeveloper/"
                        class="contact-link-row"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <span class="cl-key">linkedin</span>
                        <span class="cl-val">in/marco-motolese-webdeveloper</span>
                        <span class="cl-arrow">→</span>
                    </a>
                    <a
                        href="https://github.com/marcomotolese"
                        class="contact-link-row"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <span class="cl-key">github</span>
                        <span class="cl-val">github.com/marcomotolese</span>
                        <span class="cl-arrow">→</span>
                    </a>
                    <a
                        href="https://www.instagram.com/marcomotolese.dev/"
                        class="contact-link-row"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <span class="cl-key">instagram</span>
                        <span class="cl-val">@marcomotolese.dev</span>
                        <span class="cl-arrow">→</span>
                    </a>
                </div>
            </div>

            <div class="terminal-card">
                <div class="space-y-3">
                    <div class="cv-big">CV.PDF</div>
                    <div class="cv-sub">
                        Marco Motolese — Junior Developer<br />
                        Ultimo aggiornamento: 2025
                    </div>
                    <a
                        href="{{ asset('cv-marco-motolese.pdf') }}"
                        class="btn-primary inline-flex items-center gap-2"
                        style="width: fit-content"
                        target="_blank"
                        rel="noreferrer"
                    >
                        <span>↓</span>
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10 border-t border-zinc-200 pt-6 text-xs text-zinc-500">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <span>© {{ now()->year }} Marco Motolese</span>
            <span class="inline-flex items-center gap-2">
                <span class="inline-flex h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-500"></span>
                Disponibile a nuove collaborazioni
            </span>
            <span class="text-[0.7rem] text-zinc-400">Realizzato con cura in Laravel</span>
        </div>
    </section>
@endsection

