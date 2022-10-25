<x-app-layout>
  <div class="h-screen bg-slate-200 flex flex-col items-center justify-center w-full">
    <h1>Crie os seus posts de debate</h1>
    <form action="/criar" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">
      </div>
      <div class="flex flex-col">
        <label for="descricao">Descricao</label>
        <textarea type="text" name="descricao" id="descricao">

        </textarea>
      </div>
      <div class="flex flex-col">
        <label for="data">Data</label>
        <input type="date" name="data" id="data">
      </div>
      <div class="flex flex-col">
        <label for="foto">Foto do debate</label>
        <input type="file" name="foto" id="foto">
      </div>
      <input class="p-2 shadow-lg bg-red-500" type="submit" value="Criar">
    </form>
  </div>

</x-app-layout>