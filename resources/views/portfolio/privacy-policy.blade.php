@extends('layouts.app')

@section('title', 'Privacy Policy — Marco Motolese')

@section('content')
    <section class="mx-auto max-w-3xl rounded-2xl bg-white/95 p-6 shadow-sm ring-1 ring-blue-200/70 md:p-8">
        <h1 class="text-2xl font-semibold text-slate-900">Privacy Policy</h1>
        <p class="mt-2 text-sm text-slate-600">Ultimo aggiornamento: {{ now()->format('d/m/Y') }}</p>

        <div class="mt-6 space-y-5 text-sm leading-relaxed text-slate-700">
            <div>
                <h2 class="text-base font-semibold text-slate-900">1) Titolare del trattamento</h2>
                <p class="mt-1">
                    Il titolare del trattamento e' Marco Motolese, contattabile all'indirizzo email
                    <a href="mailto:marcomotolese10@gmail.com" class="font-medium text-blue-700 hover:text-blue-900">
                        marcomotolese10@gmail.com
                    </a>.
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-slate-900">2) Dati raccolti</h2>
                <p class="mt-1">
                    Tramite il form di contatto vengono raccolti: nome, email, oggetto e messaggio.
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-slate-900">3) Finalita' e base giuridica</h2>
                <p class="mt-1">
                    I dati sono trattati esclusivamente per rispondere alle richieste inviate dall'utente. La base
                    giuridica e' il consenso espresso tramite la spunta nel form.
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-slate-900">4) Conservazione dei dati</h2>
                <p class="mt-1">
                    I dati sono conservati per il tempo strettamente necessario a gestire la richiesta e gli eventuali
                    follow-up collegati.
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-slate-900">5) Comunicazione a terzi</h2>
                <p class="mt-1">
                    I dati non vengono ceduti a terzi per finalita' commerciali. Possono essere trattati da fornitori
                    tecnici necessari al funzionamento del sito (hosting e servizi email).
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-slate-900">6) Cookie</h2>
                <p class="mt-1">
                    Questo sito non utilizza cookie di profilazione o marketing. Se in futuro verranno introdotti
                    cookie non tecnici, verra' pubblicata una cookie policy dedicata.
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-slate-900">7) Diritti dell'interessato</h2>
                <p class="mt-1">
                    In qualunque momento puoi richiedere accesso, rettifica, cancellazione, limitazione o opposizione
                    al trattamento dei dati scrivendo a
                    <a href="mailto:marcomotolese10@gmail.com" class="font-medium text-blue-700 hover:text-blue-900">
                        marcomotolese10@gmail.com
                    </a>.
                </p>
            </div>
        </div>
    </section>
@endsection
