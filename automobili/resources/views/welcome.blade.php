<x-layout>
     <div class="container-fluid p-5 bg-info text-center">
        <div class="row justify-content-center">
            <h1 class="display-1">
                AUTOMOBILI
            </h1>

            @if(session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
        </div>
     </div>
</x-layout>

