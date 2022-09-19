<nav class="flex justify-between items-center p-5 sticky top-0 bg-white z-10">
  {{-- logo --}}
  <div class="">
    <a href="/"><img src="img/1.svg" alt="logo volvo"></a>
  </div>

  {{-- nav-item --}}
  <div class="space-x-5">
    <a href="/offre-du-moment" class="font-bold hover:underline hover:underline-offset-8 hover:text-red-500">Offres du moment</a>
    <a href="{{ route('show')}}" class="font-bold hover:underline hover:underline-offset-8 hover:text-red-500">Nos voitures</a>
  </div>
</nav>