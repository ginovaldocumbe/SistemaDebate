<x-app-layout>
  <div class="h-screen  w-full flex flex-col px-4 pt-20 overflow-y-scroll pb-5">
    <h1 class="text-xl font-bold mb-3">Lista dos debates </h1>
    <div class="grid grid-cols-4 gap-10 ">
      @foreach($events as $event)
      <div class="shadow-lg p-2 flex flex-col w-[270px] rounded-md">
        <div class="bg-blue-500 h-[250px] w-full mb-4 flex items-center justify-center">
          <img class="h-full" src="imagens/posts/{{$event->foto}}" alt="">
        </div>
        <h2 class="mb-2 font-bold text-lg">{{ $event -> titulo}}</h2>
        <span>{{ $event -> descricao}}</span>
        <div class="flex justify-end">
          <span>Data: {{ $event -> data}}</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</x-app-layout>