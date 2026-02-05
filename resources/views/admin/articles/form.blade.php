@if ($errors->any())
    <div class="w-3/4 mx-auto p-4 bg-red-100 mt-4 text-red-500 border border-red-500 rounded shadow dark:bg-red-900/30 dark:border-red-500">
        <h3 class="py-2 border-t border-b border-red-500 dark:border-red-500">Erreurs à la validation</h3>
        <ul class="p-4 font-thin">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(isset($article))
<form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
    @method('PUT')
    <input type="hidden" name="id" value="{{ $article->id }}">
@else
<form action="{{ route('admin.articles.store') }}" method="POST">
@endif
    @csrf

    <div class="flex justify-between mt-4">
        <label for="name" class="w-1/4 dark:text-gray-300">Nom (pas apparent sur le site):</label>
        <input type="text" name="name" class="border border-red-400 rounded w-3/4 p-2 dark:bg-slate-800 dark:border-slate-600 dark:text-gray-300"
               value="{{ old('name', optional($article ?? null)->name) }}" />
    </div>

    <div class="flex justify-between mt-4">
        <label for="keywords" class="w-1/4 dark:text-gray-300">Keywords:</label>
        <textarea name="keywords" class="w-3/4 border border-red-400 rounded p-2 h-24 dark:bg-slate-800 dark:border-slate-600 dark:text-gray-300">{{ old('keywords', optional($article ?? null)->keywords) }}</textarea>
    </div>
    <div class="flex justify-end mt-4">
        <button type="submit" class="p-2 text-red-500 border border-red-500 rounded dark:text-red-400 dark:border-red-500 dark:bg-slate-800">Enregistrer</button>
        <a href="{{ route('admin.articles.index') }}" class="no-underline text-gray-600 p-2 border border-gray-500 rounded ml-4 dark:text-gray-400 dark:border-slate-600">Annuler</a>
    </div>
</form>
