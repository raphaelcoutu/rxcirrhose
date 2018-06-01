@if(isset($drug))
    <form action="{{ route('drugs.update', $drug->id) }}" method="POST">
    @method('PUT')
        <input type="hidden" name="id" value="{{ $drug->id }}">
@else
    <form action="{{ route('drugs.store', $article->id) }}" method="POST">
@endif
    @csrf

    <div class="flex justify-between mt-4">
        <label for="name" class="w-1/4">Titre:</label>
        <input type="text" name="name" class="border border-red-light rounded w-3/4 p-2"
               value="{{ old('name', optional($drug ?? null)->name) }}" />
    </div>

    <div class="flex justify-between mt-4">
        <label for="absorption" class="w-1/4">Absorption:</label>
        <textarea name="absorption" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('absorption', optional($drug ?? null)->absorption) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="distribution" class="w-1/4">Distribution:</label>
        <textarea name="distribution" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('distribution', optional($drug ?? null)->distribution) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="metabolisme" class="w-1/4">Métabolisme:</label>
        <textarea name="metabolisme" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('metabolisme', optional($drug ?? null)->metabolisme) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="elimination" class="w-1/4">Élimination:</label>
        <textarea name="elimination" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('elimination', optional($drug ?? null)->elimination) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="official" class="w-1/4">Monographie:</label>
        <textarea name="official" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('official', optional($drug ?? null)->official) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="litterature" class="w-1/4">Littérature:</label>
        <textarea name="litterature" class="w-3/4 border border-red-light rounded p-2 h-96">{{ old('litterature', optional($drug ?? null)->litterature) }}</textarea>
    </div>

    <div class="flex justify-end mt-4">
        @if(isset($drug))
            <a href="{{ route('articles.edit', $drug->article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Retour à la classe</a>
            <a href="{{ route('articles.show', $drug->article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Visualiser la fiche</a>
        @else
            <a href="{{ route('articles.edit', $article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Retour à la classe</a>
            <a href="{{ route('articles.show', $article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Visualiser la fiche</a>
        @endif
        <button type="submit" class="p-2 text-red border border-red rounded">Enregistrer</button>
    </div>
</form>