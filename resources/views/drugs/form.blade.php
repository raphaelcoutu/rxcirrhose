<form action="{{ route('drugs.update', $drug->id) }}" method="POST">
    @method('PUT')
    @csrf

    <input type="hidden" name="id" value="{{ $drug->id }}">

    <div class="flex justify-between mt-4">
        <label for="name" class="w-1/4">Titre:</label>
        <input type="text" name="name" class="border border-red-light rounded w-3/4 p-2"
               value="{{ old('name', optional($drug)->name) }}" />
    </div>

    <div class="flex justify-between mt-4">
        <label for="absorption" class="w-1/4">Absorption:</label>
        <textarea name="absorption" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('absorption', optional($drug)->absorption) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="distribution" class="w-1/4">Distribution:</label>
        <textarea name="distribution" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('distribution', optional($drug)->distribution) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="metabolisme" class="w-1/4">Métabolisme:</label>
        <textarea name="metabolisme" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('metabolisme', optional($drug)->metabolisme) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="elimination" class="w-1/4">Élimination:</label>
        <textarea name="elimination" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('elimination', optional($drug)->elimination) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="official" class="w-1/4">Monographie:</label>
        <textarea name="official" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('official', optional($drug)->official) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="litterature" class="w-1/4">Littérature:</label>
        <textarea name="litterature" class="w-3/4 border border-red-light rounded p-2 h-96">{{ old('litterature', optional($drug)->litterature) }}</textarea>
    </div>

    <div class="flex justify-end mt-4">
        <button type="submit" class="p-2 text-red border border-red rounded mr-4">Enregistrer</button>
        <a href="{{ route('articles.edit', $drug->article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Retour à la classe</a>
        <a href="{{ route('articles.show', $drug->article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded">Visualiser la fiche</a>
    </div>
</form>