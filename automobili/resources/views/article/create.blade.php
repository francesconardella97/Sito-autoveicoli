<x-layout>
    <div class="container-fluid p-5-bg-info text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Inserisci un articolo
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 shadow" action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotilo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" type="category" class="form-control text-capitalize" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{ old('body') }}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info">Inserisci un articolo</button>
                        <a class="btn btn-outline-info" href="{{ route('homepage') }}">Torna alla home</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>