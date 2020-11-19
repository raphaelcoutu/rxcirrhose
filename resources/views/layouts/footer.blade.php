<footer class="bg-red text-white text-xs py-4 mt-4">
    <div class="container mx-auto flex justify-center">
        <div class="flex flex-col justify-around w-3/4">
            {{--<a href="#" class="no-underline text-white uppercase text-sm font-thin tracking-tight">À propos</a>--}}
            <a href="{{ url('qui-sommes-nous') }}" class="no-underline text-white uppercase text-sm font-thin tracking-tight mt-2">Qui sommes-nous?</a>
            <a href="mailto:rxcirrhose@gmail.com" class="no-underline text-white uppercase text-sm font-thin tracking-tight mt-2">Pour nous écrire</a>
            <a href="{{ url('conditions-generales-utilisation') }}" class="no-underline text-white uppercase text-sm font-thin tracking-tight mt-2">Conditions d'utilisation</a>
            <p class="mt-4">&copy; {{ date("Y") }}</p>
        </div>
    </div>
</footer>
