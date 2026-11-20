<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli articoli</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
                @foreach ($articles as $article)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <h6 class="card-title">{{$article->subtitle}}</h6>
                            <p class="card-text">{{$article->body}}</p>
                            
                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Modifica articolo</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</x-layout>
