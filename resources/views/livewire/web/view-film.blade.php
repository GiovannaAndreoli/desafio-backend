<div>
    @foreach($films as $movie)
    <div class="max-w-screen-md mx-auto px-4 py-8 flex flex-col">
    
        <img src="{{ asset('storage/' . $movie->cover) }}" alt=""
        class="aspect-video w-full h-auto mx-auto rounded-lg object-cover object-center mb-4 lg:mb-8">
        <h1 class="text-2xl lg:text-4xl font-bold">
        {{ $movie->title }}
        </h1>
       

        <p>
        {{ $movie->summary }}
        </p>
    </div>
    @endforeach
    
</div>
