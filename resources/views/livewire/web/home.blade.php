<div>
    <div class="px-4 py-8 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-8">
    @foreach($films as $movie)
    
            <a href="{{ route('detail', $movie->id) }}" class="relative w-full aspect-video bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('storage/' . $movie->cover) }}')">
                <div
                    class="absolute flex items-end p-4 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-black/20">
                    <div>
                        <h1 class="text-2xl font-bold">
                        {{ $movie->title }}
                        
                        </h1>                
                    </div>
                </div>
            </a>
        @endforeach
    
    </div>
</div>
