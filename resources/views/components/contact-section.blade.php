{{-- Sezione contatti --}}
<section id="contact" class="js-section mx-auto max-w-6xl space-y-8 border-t border-zinc-200 pb-8 pt-16">
    <div class="s-header">
        <span class="s-tag">04</span>
        <h2 class="s-title">CONTATTI</h2>
        <div class="s-line"></div>
    </div>

    <div class="grid gap-8 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)]">
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-zinc-200">
            <h3 class="text-sm font-semibold text-zinc-900">Parliamo del tuo prossimo progetto</h3>
            <p class="mt-2 text-[0.9rem] leading-relaxed text-zinc-600">
                Che tu abbia bisogno di una nuova interfaccia, di un’applicazione interna o di migliorare un prodotto
                esistente, posso aiutarti a costruire un’esperienza fluida, moderna e curata nei dettagli.
            </p>

            <form action="{{ url('/contact') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="space-y-1.5">
                        <label for="name" class="block text-xs font-medium text-zinc-600">Nome</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            autocomplete="name"
                            class="w-full rounded-xl border border-zinc-200 bg-zinc-50 px-3 py-2 text-sm text-zinc-900 outline-none ring-0 transition focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-100"
                        />
                    </div>
                    <div class="space-y-1.5">
                        <label for="email" class="block text-xs font-medium text-zinc-600">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            class="w-full rounded-xl border border-zinc-200 bg-zinc-50 px-3 py-2 text-sm text-zinc-900 outline-none ring-0 transition focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-100"
                        />
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label for="subject" class="block text-xs font-medium text-zinc-600">Oggetto</label>
                    <input
                        id="subject"
                        name="subject"
                        type="text"
                        class="w-full rounded-xl border border-zinc-200 bg-zinc-50 px-3 py-2 text-sm text-zinc-900 outline-none ring-0 transition focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-100"
                    />
                </div>

                <div class="space-y-1.5">
                    <label for="message" class="block text-xs font-medium text-zinc-600">Messaggio</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="w-full resize-none rounded-xl border border-zinc-200 bg-zinc-50 px-3 py-2 text-sm text-zinc-900 outline-none ring-0 transition focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-100"
                    ></textarea>
                </div>

                <button type="submit" class="btn-primary">
                    Invia messaggio
                </button>
            </form>
        </div>

        <div class="space-y-4 text-sm text-zinc-600">
            <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-zinc-200">
                <p class="text-xs font-medium uppercase tracking-[0.18em] text-zinc-500">Direct</p>
                <div class="mt-3 space-y-2 text-[0.9rem]">
                    <p>
                        Email:
                        <a href="mailto:marcomotolese10@gmail.com" class="font-medium text-sky-600">
                            marcomotolese10@gmail.com
                        </a>
                    </p>
                    <p>Location: Italia · Remote friendly</p>
                </div>
            </div>

            <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-zinc-200">
                <p class="text-xs font-medium uppercase tracking-[0.18em] text-zinc-500">Social</p>
                <div class="mt-3 space-y-2 text-[0.9rem]">
                    <a href="#" class="block text-sky-600 hover:text-sky-700">LinkedIn</a>
                    <a href="#" class="block text-sky-600 hover:text-sky-700">GitHub</a>
                    <a href="#" class="block text-sky-600 hover:text-sky-700">Twitter</a>
                </div>
            </div>
        </div>
    </div>
</section>

