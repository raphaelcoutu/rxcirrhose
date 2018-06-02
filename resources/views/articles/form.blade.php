@if ($errors->any())
    <div class="w-3/4 mx-auto p-4 bg-red-lightest mt-4 text-red border border-red rounded shadow">
        <h3 class="py-2 border-t border-b border-red">Erreurs à la validation</h3>
        <ul class="list-reset p-4 font-thin">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(isset($article))
<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @method('PUT')
    <input type="hidden" name="id" value="{{ $article->id }}">
@else
<form action="{{ route('articles.store') }}" method="POST">
@endif
    @csrf

    <div class="flex justify-between mt-4">
        <label for="title" class="w-1/4">Titre:</label>
        <input type="text" name="title" class="border border-red-light rounded w-3/4 p-2"
               value="{{ old('title', optional($article ?? null)->title) }}" />
    </div>

    <div class="flex justify-between mt-4">
        <label for="summary" class="w-1/4">Résumé:</label>
        <textarea name="summary" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('summary', optional($article ?? null)->summary) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="pharmacodynamics" class="w-1/4">Pharmacodynamie:</label>
        <textarea name="pharmacodynamics" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('pharmacodynamics', optional($article ?? null)->pharmacodynamics) }}</textarea>
    </div>

    <div class="flex justify-end mt-4">
        <div class="w-3/4">
        @if(isset($article))
            @foreach($article->drugs as $drug)
                <li>{{ $drug->name }} <span class="text-sm ml-2">[<a class="text-red-light no-underline" href="{{ route('drugs.edit', $drug->id) }}">Edit</a>]</span></li>
            @endforeach
                <div class="mt-4">
                    <a href="{{ route('drugs.create', $article->id) }}" class="bg-red-light p-2 text-white shadow rounded">Ajouter une molécule</a>
                </div>
        @endif
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <label for="references" class="w-1/4">Références:</label>
        <textarea name="references" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('references', optional($article ?? null)->references) }}</textarea>
    </div>

    <div class="flex justify-end mt-4">
        @if(isset($article))
            <a href="{{ route('articles.show', $article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Visualiser la fiche</a>
        @endif
        <button type="submit" class="p-2 text-red border border-red rounded">Enregistrer</button>
    </div>
</form>