<nav>
    <div class="bg-white">
        <div class="container mx-auto flex justify-between flex-wrap">
            <div class="w-2/12 lg:w-1/5 pl-6">
                <a href="{{ url('/') }}" class="flex items-center no-underline text-black">
                @include('svg.liver', ['class' => 'h-16 w-16'])
                <span class="font-semibold text-xl hidden lg:block">{{ __('navbar.brand') }}</span>
                </a>
            </div>
            <div class="flex-1 flex items-center px-4">
                <cirrhose-search class="w-full"></cirrhose-search>
            </div>
            <div class="md:hidden flex items-center">
                <button @click="toggleMobileMenu" class="flex items-center text-black p-2 m-2 border border-black rounded">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div :class="mobileMenu ? 'block' : 'hidden'" class="w-full md:flex md:items-center md:w-1/2 tracking-tight font-thin uppercase md:justify-end" v-cloak>
                <a href="/" class="navbar-item">{{ __('navbar.home') }}</a>
                <a href="{{ url(__('navbar.cirrhosis')) }}" class="navbar-item {{ $active == 'cirrhose' ? 'active' : '' }}">{{ __('navbar.cirrhosis') }}</a>
                <a href="{{ route('articleTranslations.index') }}" class="navbar-item {{ $active == 'medicaments' ? 'active' : '' }}">{{ __('navbar.drugs') }}</a>
                <a href="{{ url('faq') }}" class="navbar-item {{ $active == 'faq' ? 'active' : '' }}">{{ __('navbar.faq') }}</a>
                <a href="{{ url()->current(). '?lang='.__('navbar.other_locale') }}" class="navbar-item">
                    @include('svg.globe', ['class' => 'w-4 h-4 fill-current text-red-400 hidden lg:inline-block']){{ __('navbar.other_locale_name') }}
                </a>
            </div>
        </div>
    </div>
</nav>
