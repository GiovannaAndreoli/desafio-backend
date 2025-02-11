<div>
    <div class="max-w-screen-lg mx-auto px-4 py-8">
        <form  method="POST" action="/salvar-filme" enctype="multipart/form-data" class="w-full px-4 py-8 bg-zinc-100 text-zinc-950 rounded-lg space-y-4">
        @csrf
        <h1 class="text-2xl font-bold text-center font-film">
                Cadastrar Filme
            </h1>

            <div class="flex flex-col gap-2 !mt-8">
                <label for="title" class="font-semibold">
                    Título
                </label>
                <input type="text" id="title" name="title" class="rounded-lg border border-zinc-950 p-2">
            </div>

            <div class="flex flex-col gap-2">
                <label for="summary" class="font-semibold">
                    Resumo
                </label>
                <textarea id="summary" name="summary" rows="6" class="rounded-lg border border-zinc-950 p-2"></textarea>
            </div>

            <div class="flex flex-col gap-2">
                <label for="cover" class="font-semibold">
                    Capa
                </label>
                <input type="file" id="cover" name="cover" class="rounded-lg border border-zinc-950 p-2">
            </div>

            <button type="submit"
                class="bg-red-600 text-zinc-100 w-full font-mono font-semibold text-center px-4 py-2 rounded-lg">
                Enviar
            </button>
        </form>
    </div>
</div>
