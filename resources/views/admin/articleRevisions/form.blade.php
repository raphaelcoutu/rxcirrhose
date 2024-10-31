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

@if(isset($revision))
    <form action="{{ route('admin.article-revisions.update', [$articleTranslation->id, $revision->id]) }}" method="POST">
        @method('PUT')
        <input type="hidden" name="id" value="{{ $revision->id }}">
@else
    <form action="{{ route('admin.article-revisions.store', $articleTranslation->id) }}" method="POST">
        <input type="hidden" name="article_id" value="{{ request('articleId') }}">
@endif
        @csrf

        <div class="flex justify-between mt-4">
            <label for="revision_date" class="w-1/4">Date de révision:</label>
            <input type="date" name="revision_date" class="border border-red-light rounded w-3/4 p-2"
                   value="{{ old('revision_date', optional($revision ?? null)->revision_date) ?? date('Y-m-d') }}"/>
        </div>

        <div class="flex justify-between mt-4">
            <label for="author" class="w-1/4">Auteur:</label>
            <input type="text" name="author" class="border border-red-light rounded w-3/4 p-2"
                   value="{{ old('author', optional($revision ?? null)->author) }}"/>
        </div>

        <div class="flex justify-between mt-4">
            <label for="content" class="w-1/4">Description:</label>
            <textarea name="content"
                      class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('content', optional($revision ?? null)->content) }}</textarea>
        </div>

        <div class="flex mt-4">
            <label class="w-1/4">Caché:</label>
            <div class="w-1/4 flex justify-between">
                <div>
                    <input type="radio" name="hidden" value="1"
                           id="hidden_oui" {{ old('hidden', optional($revision ?? null)->hidden) == '1' ? 'checked' : '' }}>
                    <label for="hidden_oui">Oui</label>
                </div>
                <div>
                    <input type="radio" name="hidden" value="0"
                           id="hidden_non" {{ old('hidden', optional($revision ?? null)->hidden) == '0' ? 'checked' : '' }}>
                    <label for="hidden_non">Non</label>
                </div>
            </div>
        </div>


        <div class="flex justify-end mt-4">
            <div>
                <a href="{{ route('admin.article-revisions.index', $articleTranslation->id) }}"
                   class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Liste des révisions</a>
                <button type="submit" class="p-2 text-red border border-red rounded">Enregistrer</button>
            </div>
        </div>
    </form>
