{{-- Sezione "Chi sono" --}}
<section id="about" class="js-section mx-auto flex max-w-6xl flex-col gap-10 border-t border-amber-200/70 py-16 lg:flex-row lg:items-center">
    <div class="order-2 flex-1 space-y-4 lg:order-1">
        <p class="text-xs font-medium uppercase tracking-[0.18em] text-amber-800/80">
            Chi sono
        </p>
        <h2 class="text-lg font-semibold tracking-tight text-stone-900">
            Full-stack developer con approccio pratico: meno complessità, più valore reale.
        </h2>
        <p class="text-sm leading-relaxed text-stone-600">
            Mi chiamo <strong class="text-stone-900">Marco Motolese</strong> e sviluppo soluzioni web per professionisti: applicazioni snelle,
            interfacce curate e processi più fluidi.
        </p>
        <p class="text-sm leading-relaxed text-stone-600">
            Mi occupo di <strong class="text-stone-900">PWA, landing, CRM e micro‑SaaS</strong>, unendo backend solido e frontend moderno.
            Obiettivo: creare prodotti affidabili e automazioni che semplificano davvero il lavoro.
        </p>
        <div class="mt-4 flex flex-wrap gap-4 text-xs text-stone-600">
            <div>
                <p class="font-medium text-stone-900">Stack principale</p>
                <p class="mt-1">Laravel · PHP · JavaScript · TailwindCSS · MySQL</p>
            </div>
            <div>
                <p class="font-medium text-stone-900">Valore che porto</p>
                <p class="mt-1">Più efficienza operativa, UX migliore, delivery veloce e scalabile.</p>
            </div>
        </div>
    </div>

    <div class="order-1 flex w-full flex-1 justify-center lg:order-2 lg:justify-end lg:pr-20">
        <div class="relative inline-flex items-center justify-center rounded-full bg-gradient-to-tr from-amber-600 via-yellow-500 to-amber-800 p-[3px] shadow-[0_20px_50px_rgba(120,53,15,0.22)]">
            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="Logo Marco Motolese"
                class="h-32 w-32 rounded-full object-cover ring-2 ring-white/90 lg:h-36 lg:w-36"
            />
        </div>
    </div>
</section>

