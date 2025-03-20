<nav class="w-full flex items-center justify-between max-w-7xl mx-auto p-4 xl:py-0 flex-col xl:flex-row gap-4 text-rose-500">
    <div class="flex-none flex gap-2 items-center">
        <img src="{{ asset('img/logo.png') }}" alt="Logo Casa Rosa" class="w-16">
        <h1 class="font-extrabold text-3xl">Casa Rosa</h1>
    </div>
    <div class="w-full xl:w-auto" x-data="{ open: window.innerWidth > 1024? true : false }">
        <button x-on:click="open=!open" class="xl:hidden px-6 p-4 w-full justify-between bg-rose-500 flex items-center font-semibold text-white rounded-lg hover:bg-rose-600">Menu
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
        </button>
        <ul class="flex flex-col xl:flex-row" x-show="open" x-on:click.away="open=false">
            <li>
                <a href="/#a-casa" class="p-6 block hover:bg-rose-100 transition" title="Sobre nós">A Casa Rosa</a>
            </li>
            <li>
                <a href="/#parceiros" class="p-6 block hover:bg-rose-100 transition" title="Parceiros">Parceiros</a>
            </li>
            <li>
                <a href="/#seja-doador" class="p-6 block hover:bg-rose-100 transition" title="Parceiros">Seja um
                    doador</a>
            </li>
            <li>
                <a href="/#seja-voluntario" class="p-6 block hover:bg-rose-100 transition" title="Parceiros">Seja um
                    voluntário</a>
            </li>

            <li>
                <a href="/#fale-conosco" class="p-6 block hover:bg-rose-100 transition" title="Fale Conosco">Fale
                    Conosco</a>
            </li>
        </ul>
    </div>
</nav>
