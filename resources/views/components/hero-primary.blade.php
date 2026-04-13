{{-- Hero principale pulito e allineato --}}
<section class="js-hero relative mx-auto flex max-w-6xl flex-col gap-12 pb-20 pt-12 
                lg:flex-row lg:items-center lg:gap-28 lg:pt-16">

    {{-- Colonna testo --}}
    <div class="js-hero-text flex-1 space-y-7 lg:pr-10">
        

        <div class="space-y-4">
            <h1 class="text-balance text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl lg:text-5xl">
                Full-stack developer
                <span class="bg-gradient-to-r from-sky-500 via-emerald-500 to-amber-500 bg-clip-text text-transparent">
                    per professionisti e business digitali
                </span>
            </h1>

            <p class="max-w-xl text-sm leading-relaxed text-zinc-600 sm:text-base">
                Realizzo <strong>PWA e software web</strong> che semplificano i flussi di lavoro: da landing ad alto tasso
                di conversione a CRM e micro‑SaaS, con focus su UX, performance e automazioni utili.
            </p>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <a href="#projects" class="btn-primary">
                Guarda i progetti
            </a>
            <a href="#contact" class="btn-ghost">
                Prenota una call
            </a>
            <p class="text-xs text-zinc-500">
                Landing, CRM e micro‑SaaS pensati per far risparmiare tempo ogni giorno.
            </p>
        </div>
    </div>

    {{-- Colonna foto --}}
    <div class="flex-1 flex justify-center lg:justify-end">
        <img 
            src="/images/me.jpg"
            alt="Marco Motolese"
            class="w-56 h-56 rounded-3xl object-cover shadow-xl ring-1 ring-black/10 
                   sm:w-64 sm:h-64 lg:w-72 lg:h-72"
        >
    </div>

</section>
