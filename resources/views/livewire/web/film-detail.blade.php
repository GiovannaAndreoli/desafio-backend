<div class="max-w-screen-md mx-auto px-4 py-8">
    
    <h1 class="text-3xl font-bold mb-4">{{ $film->title }}</h1>

    <img src="{{ asset('storage/' . $film->cover) }}" alt="Capa de {{ $film->title }}"
        class="aspect-video w-full h-auto mx-auto rounded-lg object-cover object-center mb-4">
    
    <p class="text-lg text-gray-700">{{ $film->summary }}</p>

    <a href="{{ route('home') }}" class="inline-block mt-4 px-4 py-2 border border-transparent rounded hover:border-red-600 hover:text-red-600 transition-all ease-in-out">
        Voltar à Lista de Filmes
    </a>

</div>