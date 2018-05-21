<nav>
    <div class="bg-white flex justify-center">
        <div class="container mx-auto flex justify-between">
            <div class="w-2/5 px-6">
                <a href="{{ url('/') }}" class="flex items-center no-underline text-black">
                @include('svg.liver', ['class' => 'h-16 w-16'])
                <span class="font-semibold text-xl">HépatoPharm</span>
                </a>
            </div>
            <div class="flex items-center justify-between w-3/5 tracking-tight font-thin uppercase">
                <a href="/" class="active navbar-item">Accueil</a>
                <a href="#" class="navbar-item">Cirrhose du foie</a>
                <a href="#" class="navbar-item">Médicaments</a>
                <a href="#" class="navbar-item">FAQ</a>
                <div class="w-12 flex justify-center items-center">
                    <cirrhose-search-button
                            class="px-2 py-6 no-underline text-sm text-grey border-b-2 border-transparent hover:text-grey-darker"
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