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

@if(isset($articleTranslation))
    <form action="{{ route('admin.article-translations.update', $articleTranslation->id) }}" method="POST">
        @method('PUT')
        <input type="hidden" name="id" value="{{ $articleTranslation->id }}">
        @else
            <form action="{{ route('admin.article-translations.store') }}" method="POST">
                <input type="hidden" name="article_id" value="{{ request('articleId') }}">
                @endif
                @csrf

                <div class="flex justify-between mt-4">
                    <label for="title" class="w-1/4">Titre:</label>
                    <input type="text" name="title" class="border border-red-light rounded w-3/4 p-2"
                           value="{{ old('title', optional($articleTranslation ?? null)->title) }}"/>
                </div>

                <div class="flex justify-between mt-4">
                    <label class="w-1/4">Fiche (groupe):</label>
                    <input type="text" class="border border-red-light rounded w-3/4 p-2" value="{{ $article->name }}"
                           disabled>
                </div>

                <div class="flex justify-between mt-4">
                    <label class="w-1/4">Locale:</label>
                    <input type="text" class="border border-red-light rounded w-3/4 p-2"
                           value="{{ request('locale') ?? optional($articleTranslation)->locale }}" disabled>
                    <input type="hidden" name="locale"
                           value="{{ request('locale') ?? optional($articleTranslation)->locale }}">
                </div>

                <div class="flex justify-between mt-4">
                    <label for="summary" class="w-1/4">Résumé:</label>
                    <textarea name="summary"
                              class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('summary', optional($articleTranslation ?? null)->summary) }}</textarea>
                </div>

                <div class="flex justify-between mt-4">
                    <label for="pharmacodynamics" class="w-1/4">Pharmacodynamie:</label>
                    <textarea name="pharmacodynamics"
                              class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('pharmacodynamics', optional($articleTranslation ?? null)->pharmacodynamics) }}</textarea>
                </div>

                <div class="flex justify-end mt-4">
                    <div class="w-3/4">
                        @if(isset($articleTranslation))
                            @foreach($articleTranslation->drugs as $drug)
                                <li>{{ $drug->name }} <span class="text-sm ml-2">[<a class="text-red-light no-underline"
                                                                                     href="{{ route('admin.drugs.edit', $drug->id) }}">Edit</a>]</span>
                                </li>
                            @endforeach
                            <div class="mt-4">
                                <a href="{{ route('admin.drugs.create', ['articleTranslationId' => $articleTranslation->id]) }}"
                                   class="bg-red-light p-2 text-white shadow rounded">Ajouter une molécule</a>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex justify-between mt-4">
                    <label for="references" class="w-1/4">Dernière version [<a class="text-red-light no-underline" href="{{route('admin.article-revisions.index', $articleTranslation)}}">Éditer</a>]:</label>
                    <div class="w-3/4">
                        <p>Auteur: {{ $lastRevision?->author ?? 'Aucun(e)' }}</p>
                        <p>Date: {{ $lastRevision?->revision_date ?? 'Aucune' }}<p>
                        <p>Description: {{ $lastRevision?->content ?? 'Aucune' }}</p>
                        @if($lastRevision?->hidden === true)<p>(Cachée)</p>@endif
                    </div>
                </div>

                <div class="flex justify-between mt-4">
                    <label for="references" class="w-1/4">Références:</label>
                    <textarea name="references"
                              class="w-3/4 border border-red-light rounded p-2 h-48">{{ old('references', optional($articleTranslation ?? null)->references) }}</textarea>
                </div>

                <div class="flex mt-4">
                    <label class="w-1/4">Active:</label>
                    <div class="w-1/4 flex justify-between">
                        <div>
                            <input type="radio" name="active" value="1"
                                   id="active_oui" {{ old('active', optional($articleTranslation ?? null)->active) == '1' ? 'checked' : '' }}>
                            <label for="active_oui">Oui</label>
                        </div>
                        <div>
                            <input type="radio" name="active" value="0"
                                   id="active_non" {{ old('active', optional($articleTranslation ?? null)->active) == '0' ? 'checked' : '' }}>
                            <label for="active_non">Non</label>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <a href="{{ route('admin.articles.index') }}"
                       class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Liste</a>
                    @if(isset($articleTranslation))
                        <a href="{{ route('article-translations.show', $articleTranslation->id) }}"
                           class="no-underline text-grey-dark p-2 border border-grey rounded mr-4">Visualiser la
                            fiche</a>
                    @endif
                    <button type="submit" class="p-2 text-red border border-red rounded">Enregistrer</button>
                </div>
            </form>
