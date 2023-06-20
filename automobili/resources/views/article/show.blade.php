<x-layout>
    <div class="container-fluid p-5 bg-info text-center">
       <div class="row justify-content-center">
           <h1 class="display-1">
               {{ <$article->title }}
           </h1>
       </div>
    </div>

    <div class="container my-5">
       <div class="row justify-content-around">
           @foreach ($articles as $article)
               <div class="col-12 col-md-8">
                    <img src="{{ Storage::url($articles->image) }}" class="img-fluid my-3" alt="">
                    <div class="text-center">
                        <h2>{{ $article->title }}</h2>
                        <div class="my-3 text-muted fst-italic">
                            <p> Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                    <hr>
                    <p>{{ $article->body }}</p>
                    <div class="text-center">
                        <a href="{{ route('article.index') }}" class="btn btn-info text-white my-5">Torna indietro</a>
                    </div>
               </div>
           @endforeach
       </div>
    </div>
</x-layout>

