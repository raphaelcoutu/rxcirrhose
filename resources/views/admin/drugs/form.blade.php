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

@if(isset($drug))
    <form action="{{ route('drugs.update', $drug->id) }}" method="POST">
    @method('PUT')
        <input type="hidden" name="id" value="{{ $drug->id }}">
@else
    <form action="{{ route('drugs.store') }}" method="POST">
        <input type="hidden" name="article_translation_id" value="{{ $articleTranslation->id }}">
@endif
    @csrf

    <div class="flex justify-between mt-4">
        <label for="name" class="w-1/4">Titre:</label>
        <input type="text" name="name" class="border border-red-light rounded w-3/4 p-2"
               value="{{ old('name', optional($drug ?? null)->name) }}" />
    </div>

    <div class="flex justify-between mt-4">
        <label for="childa_category" class="w-1/4">Child A:</label>
        <div class="w-3/4 flex">
            <select name="childa_category" class="bg-white border border-red-light mr-4">
                <option value="1" {{ old('childa_category', optional($drug ?? null)->childa_category) == 1 ? 'selected' : '' }}>Sécuritaire</option>
                <option value="2" {{ old('childa_category', optional($drug ?? null)->childa_category) == 2 ? 'selected' : '' }}>Précaution</option>
                <option value="3" {{ old('childa_category', optional($drug ?? null)->childa_category) == 3 ? 'selected' : '' }}>Absence de données</option>
                <option value="4" {{ old('childa_category', optional($drug ?? null)->childa_category) == 4 ? 'selected' : '' }}>Non-recommandé</option>
            </select>
            <input type="text" name="childa_text" class="border border-red-light rounded w-full p-2"
                   value="{{ old('childa_text', optional($drug ?? null)->childa_text) }}" placeholder="Si laissé vide, le nom de la catégorie sera affiché"/>
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <label for="childb_category" class="w-1/4">Child B:</label>
        <div class="w-3/4 flex">
            <select name="childb_category" class="bg-white border border-red-light mr-4">
                <option value="1" {{ old('childb_category', optional($drug ?? null)->childb_category) == 1 ? 'selected' : '' }}>Sécuritaire</option>
                <option value="2" {{ old('childb_category', optional($drug ?? null)->childb_category) == 2 ? 'selected' : '' }}>Précaution</option>
                <option value="3" {{ old('childb_category', optional($drug ?? null)->childb_category) == 3 ? 'selected' : '' }}>Absence de données</option>
                <option value="4" {{ old('childb_category', optional($drug ?? null)->childb_category) == 4 ? 'selected' : '' }}>Non-recommandé</option>
            </select>
            <input type="text" name="childb_text" class="border border-red-light rounded w-full p-2"
                   value="{{ old('childb_text', optional($drug ?? null)->childb_text) }}" placeholder="Si laissé vide, le nom de la catégorie sera affiché"/>
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <label for="childc_category" class="w-1/4">Child C:</label>
        <div class="w-3/4 flex">
            <select name="childc_category" class="bg-white border border-red-light mr-4">
                <option value="1" {{ old('childc_category', optional($drug ?? null)->childc_category) == 1 ? 'selected' : '' }}>Sécuritaire</option>
                <option value="2" {{ old('childc_category', optional($drug ?? null)->childc_category) == 2 ? 'selected' : '' }}>Précaution</option>
                <option value="3" {{ old('childc_category', optional($drug ?? null)->childc_category) == 3 ? 'selected' : '' }}>Absence de données</option>
                <option value="4" {{ old('childc_category', optional($drug ?? null)->childc_category) == 4 ? 'selected' : '' }}>Non-recommandé</option>
            </select>
            <input type="text" name="childc_text" class="border border-red-light rounded w-full p-2"
                   value="{{ old('childc_text', optional($drug ?? null)->childc_text) }}" placeholder="Si laissé vide, le nom de la catégorie sera affiché"/>
        </div>
    </div>

    <div class="flex mt-4">
        <label class="w-1/4">Seulement tableau:</label>
        <div class="w-1/4 flex justify-between">
            <div>
                <input type="radio" name="table_only" value="1" id="table_only_oui" {{ old('table_only', optional($drug ?? null)->table_only) == '1' ? 'checked' : '' }}>
                <label for="active_oui">Oui</label>
            </div>
            <div>
                <input type="radio" name="table_only" value="0" id="table_only_non" {{ old('table_only', optional($drug ?? null)->table_only) == '0' ? 'checked' : '' }}>
                <label for="active_non">Non</label>
            </div>
        </div>
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
            <a href="{{ route('admin.articleTranslations.edit', $drug->articleTranslation->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Retour à la classe</a>
            <a href="{{ route('articleTranslations.show', $drug->articleTranslation->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Visualiser la fiche</a>
        @else
            <a href="{{ route('admin.articleTranslations.edit', $articleTranslation->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Retour à la classe</a>
            <a href="{{ route('articleTranslations.show', $articleTranslation->id) }}" class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Visualiser la fiche</a>
        @endif
        <button type="submit" class="p-2 text-red border border-red rounded">Enregistrer</button>
    </div>
</form>
