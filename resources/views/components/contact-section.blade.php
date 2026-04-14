{{-- Sezione contatti --}}
<section id="contact" class="js-section mx-auto max-w-6xl space-y-8 border-t border-white/10 pb-8 pt-16">
    <div class="s-header">
        <span class="s-tag">04</span>
        <h2 class="s-title">CONTATTI</h2>
        <div class="s-line"></div>
    </div>

    <div class="grid gap-8 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)]">
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-blue-200/80">
            <h3 class="text-sm font-semibold text-slate-900">Parliamo del tuo prossimo progetto</h3>
            <p class="mt-2 text-[0.9rem] leading-relaxed text-slate-600">
                Che tu abbia bisogno di una nuova interfaccia, di un’applicazione interna o di migliorare un prodotto
                esistente, posso aiutarti a costruire un’esperienza fluida, moderna e curata nei dettagli.
            </p>

            <form action="{{ url('/contact') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="space-y-1.5">
                        <label for="name" class="block text-xs font-medium text-slate-600">Nome</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            autocomplete="name"
                            value="{{ old('name') }}"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-900 outline-none ring-0 transition focus:border-blue-600 focus:bg-white focus:ring-2 focus:ring-blue-100"
                        />
                        @error('name')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1.5">
                        <label for="email" class="block text-xs font-medium text-slate-600">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-900 outline-none ring-0 transition focus:border-blue-600 focus:bg-white focus:ring-2 focus:ring-blue-100"
                        />
                        @error('email')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label for="subject" class="block text-xs font-medium text-slate-600">Oggetto</label>
                    <input
                        id="subject"
                        name="subject"
                        type="text"
                        value="{{ old('subject') }}"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-900 outline-none ring-0 transition focus:border-blue-600 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    />
                    @error('subject')
                        <p class="text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <label for="message" class="block text-xs font-medium text-slate-600">Messaggio</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-900 outline-none ring-0 transition focus:border-blue-600 focus:bg-white focus:ring-2 focus:ring-blue-100"
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <label for="privacy_consent" class="flex items-start gap-2 text-xs text-slate-600">
                        <input
                            id="privacy_consent"
                            name="privacy_consent"
                            type="checkbox"
                            value="1"
                            class="mt-0.5 h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            @checked(old('privacy_consent'))
                        />
                        <span>
                            Ho letto e accetto la
                            <a
                                href="{{ route('privacy.policy') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="font-medium text-blue-700 underline decoration-blue-400/70 underline-offset-2 hover:text-blue-900"
                            >
                                Privacy Policy
                            </a>
                            per il trattamento dei miei dati.
                        </span>
                    </label>
                    @error('privacy_consent')
                        <p class="text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <p class="text-xs leading-relaxed text-slate-500">
                    I dati inseriti saranno usati esclusivamente per rispondere alla tua richiesta di contatto.
                </p>

                <button type="submit" class="btn-primary">
                    Invia messaggio
                </button>
            </form>
        </div>

        <div class="space-y-4 text-sm text-slate-600">
            <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-blue-200/80">
                <p class="text-xs font-medium uppercase tracking-[0.18em] text-blue-950/75">Direct</p>
                <div class="mt-3 space-y-2 text-[0.9rem]">
                    <p>
                        Email:
                        <a href="mailto:marcomotolese10@gmail.com" class="font-medium text-blue-800 hover:text-slate-900">
                            marcomotolese10@gmail.com
                        </a>
                    </p>
                    <p>Location: Italia · Remote friendly</p>
                </div>
            </div>

            <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-blue-200/80">
                <p class="text-xs font-medium uppercase tracking-[0.18em] text-blue-950/75">Social</p>
                <div class="mt-3 space-y-2 text-[0.9rem]">
                    <a
                        href="https://www.linkedin.com/in/marco-motolese-webdeveloper/"
                        class="block text-blue-800 hover:text-slate-900"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        LinkedIn
                    </a>
                    <a
                        href="https://github.com/marcomotolese"
                        class="block text-blue-800 hover:text-slate-900"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        GitHub
                    </a>
                    <a
                        href="https://www.instagram.com/marcomotolese.dev/"
                        class="block text-blue-800 hover:text-slate-900"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Instagram
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

