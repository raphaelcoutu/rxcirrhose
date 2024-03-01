<footer class="bg-red-500 text-white text-xs py-4 mt-4 dark:bg-red-900">
    <div class="container mx-auto flex justify-center">
        <div class="flex flex-col justify-around w-3/4">
            <a href="{{ url('qui-sommes-nous') }}" class="no-underline text-white uppercase text-sm font-thin tracking-tight mt-2">{{ __('footer.about_us') }}</a>
            <a href="mailto:rxcirrhose@gmail.com" class="no-underline text-white uppercase text-sm font-thin tracking-tight mt-2">{{ __('footer.contact_us') }}</a>
            <a href="{{ url(__('footer.terms_of_use_link')) }}" class="no-underline text-white uppercase text-sm font-thin tracking-tight mt-2">{{ __('footer.terms_of_use') }}</a>
            <p class="mt-4">&copy; {{ date("Y") }}</p>
        </div>
    </div>
</footer>
