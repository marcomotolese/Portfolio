@php
    $skillLogos = [
        [
            'name' => 'Laravel',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg',
            'url' => 'https://laravel.com/docs',
        ],
        [
            'name' => 'PHP',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
            'url' => 'https://www.php.net/docs.php',
        ],
        [
            'name' => 'JavaScript',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
            'url' => 'https://developer.mozilla.org/docs/Web/JavaScript',
        ],
        [
            'name' => 'TailwindCSS',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg',
            'url' => 'https://tailwindcss.com/docs',
        ],
        [
            'name' => 'Bootstrap',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg',
            'url' => 'https://getbootstrap.com/docs/',
        ],
        [
            'name' => 'MySQL',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
            'url' => 'https://dev.mysql.com/doc/',
        ],
        [
            'name' => 'Git',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg',
            'url' => 'https://git-scm.com/doc',
        ],
        [
            'name' => 'Livewire',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/livewire/livewire-original.svg',
            'url' => 'https://livewire.laravel.com/docs',
        ],
        [
            'name' => 'Vite',
            'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vitejs/vitejs-original.svg',
            'url' => 'https://vite.dev/guide/',
        ],
    ];
@endphp

{{-- Sezione competenze --}}
<section id="skills" class="js-section mx-auto max-w-6xl space-y-8 border-t border-white/10 py-16">
    <div class="s-header">
        <span class="s-tag">03</span>
        <h2 class="s-title">COMPETENZE</h2>
        <div class="s-line"></div>
    </div>

    <p class="text-sm text-slate-300">
        Stack in movimento: passa sopra per mettere in pausa e clicca un logo per aprire la documentazione ufficiale.
    </p>

    <div class="space-y-4">
        <div class="skill-marquee">
            <div class="skill-marquee-track">
                @foreach ([$skillLogos, $skillLogos] as $logoSet)
                    @foreach ($logoSet as $skill)
                        <a
                            href="{{ $skill['url'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="skill-logo-item"
                            aria-label="Apri documentazione {{ $skill['name'] }}"
                            title="{{ $skill['name'] }}"
                        >
                            <img src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }}" class="h-8 w-8 object-contain" loading="lazy" />
                            <span class="text-xs font-medium text-slate-700">{{ $skill['name'] }}</span>
                        </a>
                    @endforeach
                @endforeach
            </div>
        </div>

        <div class="skill-marquee skill-marquee--reverse">
            <div class="skill-marquee-track">
                @foreach ([$skillLogos, $skillLogos] as $logoSet)
                    @foreach (array_reverse($logoSet) as $skill)
                        <a
                            href="{{ $skill['url'] }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="skill-logo-item"
                            aria-label="Apri documentazione {{ $skill['name'] }}"
                            title="{{ $skill['name'] }}"
                        >
                            <img src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }}" class="h-8 w-8 object-contain" loading="lazy" />
                            <span class="text-xs font-medium text-slate-700">{{ $skill['name'] }}</span>
                        </a>
                    @endforeach
                @endforeach
            </div>
        </div>
          <div class="mt-4 flex flex-wrap gap-6 text-xs text-slate-400">

            <div>
                <p class="font-medium text-white">Stack principale</p>
                <p class="mt-1">Laravel · PHP · JavaScript · HTML · CSS · Bootstrap  TailwindCSS · MySQL</p>
            </div>

            <div>
                <p class="font-medium text-white">Competenze extra</p>
                <p class="mt-1">WordPress · Hosting · Photoshop · UI essenziale · Mulesoft</p>
            </div>

            <div>
                <p class="font-medium text-white">Valore che porto</p>
                <p class="mt-1">Efficienza operativa, UX chiara, delivery rapido e scalabile.</p>
            </div>

        </div>
    </div>
</section>

