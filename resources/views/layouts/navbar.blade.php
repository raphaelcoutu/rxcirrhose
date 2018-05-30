<nav>
    <div class="bg-white">
        <div class="container mx-auto flex justify-between flex-wrap">
            <div class="w-1/5 px-6">
                <a href="{{ url('/') }}" class="flex items-center no-underline text-black">
                @include('svg.liver', ['class' => 'h-16 w-16'])
                <span class="font-semibold text-xl">RxCirrhose</span>
                </a>
            </div>
            <div class="block sm:hidden flex items-center">
                <button class="flex items-center text-black p-2 m-2 border border-black rounded" @click="toggleMobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div :class="mobileMenu ? 'block' : 'hidden'" class="w-full sm:flex sm:items-center sm:w-auto md:w-3/5 md:justify-between tracking-tight font-thin uppercase sm:justify-end" v-cloak>
                <a href="/" class="block px-2 py-3 sm:py-6 text-sm text-grey no-underline border-b-2 border-transparent sm:hover:border-red hover:bg-red-lightest sm:hover:bg-transparent hover:text-black trans">Accueil</a>
                <a href="{{ url('cirrhose') }}" class="block px-2 py-3 sm:py-6 text-sm text-grey no-underline border-b-2 border-transparent sm:hover:border-red hover:bg-red-lightest sm:hover:bg-transparent hover:text-black trans flex{{ $active == 'cirrhose' ? ' active' : '' }}"><span class="md:hidden">Cirrhose</span><span class="hidden md:block">Cirrhose du foie</span></a>
                <a href="{{ route('articles.index') }}" class="block px-2 py-3 sm:py-6 text-sm text-grey no-underline border-b-2 border-transparent sm:hover:border-red hover:bg-red-lightest sm:hover:bg-transparent hover:text-black trans{{ $active == 'medicaments' ? ' active' : '' }}">Médicaments</a>
                <a href="{{ url('faq') }}" class="block px-2 py-3 sm:py-6 text-sm text-grey no-underline border-b-2 border-transparent sm:hover:border-red hover:bg-red-lightest sm:hover:bg-transparent hover:text-black trans{{ $active == 'faq' ? ' active' : '' }}">FAQ</a>
                <div class="w-12 flex justify-center items-center">
                    <cirrhose-search-button
                            class="hidden px-2 py-6 no-underline text-sm text-grey border-b-2 border-transparent hover:text-grey-darker"
                    ></cirrhose-search-button>
                </div>
            </div>
        </div>
    </div>
    <cirrhose-search>
        <template slot-scope="props">
            <div class="bg-red-light" v-if="props.show">
                <div class="mx-auto container py-2 flex justify-center ">
                    <div class="w-3/5 relative">
                        <input type="search" class="py-2 pl-10 my-2 w-full rounded" placeholder="Rechercher ....">
                        @include('svg.search', ['class' => 'absolute pin-l pin-t mt-3 ml-2 h-6 w-6 fill-current text-grey'])
                    </div>
                </div>
            </div>
        </template>
    </cirrhose-search>
</nav>