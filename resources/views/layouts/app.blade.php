<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name', 'Portfolio'))</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#faf8f5] text-stone-900 antialiased">
        <div class="relative isolate min-h-screen">
            <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                <div
                    class="relative left-1/2 aspect-[1155/678] w-[46rem] -translate-x-1/2 bg-gradient-to-tr from-amber-200/90 via-yellow-100/80 to-stone-200/70 opacity-70"
                ></div>
            </div>

            <header class="mx-auto flex max-w-6xl items-center justify-center px-6 py-5 md:justify-between lg:px-8">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <span class="inline-flex h-9 w-9 overflow-hidden rounded-full shadow-md ring-2 ring-amber-600/25 ring-offset-2 ring-offset-[#faf8f5]">
                        <img
                            src="{{ asset('images/logo.jpg') }}"
                            alt="Logo Marco Motolese"
                            class="h-full w-full object-cover"
                        />
                    </span>
                </a>

                <nav class="hidden items-center gap-6 text-sm text-stone-600 md:flex">
                    <a href="#about" class="transition hover:text-amber-900">About</a>
                    <a href="#projects" class="transition hover:text-amber-900">Projects</a>
                    <a href="#contact" class="transition hover:text-amber-900">Contact</a>
                </nav>
            </header>

            <main class="mx-auto max-w-6xl px-6 pb-16 pt-4 lg:px-8 lg:pb-20">
                @yield('content')
            </main>

            <footer class="border-t border-amber-200/60 bg-white/70 backdrop-blur">
                <div class="mx-auto flex max-w-6xl items-center justify-center px-6 py-5 text-xs text-stone-600 md:px-8">
                    <p>&copy; 2026 Marco Motolese. All rights reserved.</p>
                </div>
            </footer>
        </div>

        {{-- Lightbox progetti: fuori da .js-section (altrimenti position:fixed si “rompe” con transform GSAP) --}}
        <div
            id="project-lightbox"
            class="pointer-events-none fixed inset-0 z-[100] hidden items-center justify-center bg-zinc-950/90 p-4 backdrop-blur-sm"
            role="dialog"
            aria-modal="true"
            aria-hidden="true"
            aria-label="Anteprima screenshot"
        >
            <button
                type="button"
                id="project-lightbox-close"
                class="pointer-events-auto absolute right-4 top-4 rounded-full bg-white/10 px-3 py-1.5 text-sm text-white ring-1 ring-white/20 transition hover:bg-white/20"
            >
                Chiudi
            </button>
            <img
                id="project-lightbox-img"
                src=""
                alt=""
                class="pointer-events-auto max-h-[min(92vh,1200px)] max-w-[min(96vw,1400px)] cursor-pointer rounded-lg object-contain shadow-2xl ring-1 ring-white/10"
            >
        </div>
    </body>
</html>

