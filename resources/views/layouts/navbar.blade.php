<nav>
    <div class="bg-white">
        <div class="container mx-auto flex justify-between flex-wrap">
            <div class="w-1/5 px-6">
                <a href="{{ url('/') }}" class="flex items-center no-underline text-black">
                @include('svg.liver', ['class' => 'h-16 w-16'])
                <span class="font-semibold text-xl">{{ __('navbar.brand') }}</span>
                </a>
            </div>
            <div class="block sm:hidden flex items-center">
                <button class="flex items-center text-black p-2 m-2 border border-black rounded" @click="toggleMobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div :class="mobileMenu ? 'block' : 'hidden'" class="w-full sm:flex sm:items-center sm:w-auto md:w-3/5 md:justify-between tracking-tight font-thin uppercase sm:justify-end" v-cloak>
                <a href="/" class="navbar-item">{{ __('navbar.home') }}</a>
                <a href="{{ url(__('navbar.cirrhosis')) }}" class="navbar-item {{ $active == 'cirrhose' ? 'active' : '' }}">{{ __('navbar.cirrhosis') }}</a>
                <a href="{{ route('articleTranslations.index') }}" class="navbar-item {{ $active == 'medicaments' ? 'active' : '' }}">{{ __('navbar.drugs') }}</a>
                <a href="{{ url('faq') }}" class="navbar-item {{ $active == 'faq' ? 'active' : '' }}">{{ __('navbar.faq') }}</a>
                <a href="{{ url()->current(). '?lang='.__('navbar.other_locale') }}" class="navbar-item">
                    @include('svg.globe', ['class' => 'sm:hidden md:hidden w-3 h-3 fill-current text-red-400']){{ __('navbar.other_locale_name') }}
                </a>
                <div class="flex-1 w-12 flex justify-center items-center">
                    <cirrhose-search-button
                            class="px-2 py-6 no-underline text-sm text-gray-500 border-b-2 border-transparent hover:text-grey-darker"
                    ></cirrhose-search-button>
                </div>
            </div>
        </div>
    </div>
    <cirrhose-search class="fixed w-full"></cirrhose-search>
</nav>
