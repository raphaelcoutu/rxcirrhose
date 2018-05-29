@if(isset($article))
<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @method('PUT')
@else
<form action="{{ route('articles.store') }}" method="POST">
@endif
    @csrf

    <input type="hidden" name="id" value="{{ $article->id }}">

    <div class="flex justify-between mt-4">
        <label for="title" class="w-1/4">Titre:</label>
        <input type="text" name="title" class="border border-red-light rounded w-3/4 p-2"
               value="{{ old('title', optional($article)->title) }}" />
    </div>

    <div class="flex justify-between mt-4">
        <label for="summary" class="w-1/4">Tableau résumé:</label>
        <textarea name="summary" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('summary', optional($article)->summary) }}</textarea>
    </div>

    <div class="flex justify-between mt-4">
        <label for="pharmacodynamics" class="w-1/4">Pharmacodynamie:</label>
        <textarea name="pharmacodynamics" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('pharmacodynamics', optional($article)->pharmacodynamics) }}</textarea>
    </div>

    <div class="flex justify-end mt-4">
        <div class="w-3/4">
        @foreach($article->drugs as $drug)
            <li>{{ $drug->name }} <span class="text-sm ml-2">[<a class="text-red-light no-underline" href="{{ route('drugs.edit', $drug->id) }}">Edit</a>]</span></li>
        @endforeach
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <label for="references" class="w-1/4">Références:</label>
        <textarea name="references" class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('references', optional($article)->references) }}</textarea>
    </div>

    <div class="flex justify-end mt-4">
        <button type="submit" class="p-2 text-red border border-red rounded mr-4">Enregistrer</button>
        <a href="{{ route('articles.show', $article->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded">Visualiser la fiche</a>
    </div>
</form>