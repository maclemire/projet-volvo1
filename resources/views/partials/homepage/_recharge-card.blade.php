<div class="">
  <a href="" class="hover:text-blue-500">
    <p class="text-xs font-bold text-gray-500">{{$arrayCard["type"]}}</p>
    <p class="font-bold">{{$arrayCard["modele"]}} <span class="text-gray-400 font-normal">{{$arrayCard["energie"]}}</span></p>
    <p class="text-xs text-gray-400">A partir de <span class="text-black">{{$arrayCard["prix"]}} €</span></p>
    <img class="pt-4" src="img/{{$arrayCard["img"]}}" alt="{{$arrayCard["modele"]}}">
  </a>
  <div class="flex flex-row space-x-6 text-center text-sm pt-6 px-12 font-bold text-blue-800">
      <a href="" class="hover:text-black">DÉCOUVREZ ></a>
      <a href="" class="hover:text-black">CHOISIR ></a>
  </div>
</div>