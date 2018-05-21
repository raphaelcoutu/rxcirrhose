<ul>
    @foreach($articles as $article)
    <li><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></li>
    @endforeach
</ul>