<x-app-layout>
  <div class="h-screen flex flex-col pt-20 px-4 w-full overflow-y-scroll">
    <h1 class="text-xl font-bold mb-3">Tela para fechar debates </h1>
    <div class="grid grid-cols-4 gap-10 ">
      @foreach($events as $event)
      <div class="shadow-lg p-2 flex flex-col w-[270px] rounded-md">
        <div class="bg-blue-500 h-[250px] w-full mb-4 flex items-center justify-center">
          <img class="h-full" src="imagens/posts/{{$event->foto}}" alt="">
        </div>
        <h2 class="mb-2 font-bold text-lg">{{ $event -> titulo}}</h2>
        <span>{{ $event -> descricao}}</span>
        <div class="flex justify-end">
          <form action="/posts/{{$event->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</x-app-layout>