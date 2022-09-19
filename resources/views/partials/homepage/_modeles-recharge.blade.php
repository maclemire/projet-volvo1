<p class="text-4xl font-bold pb-24 text-center">Tous les modèles Recharge</p>

@php
    $arrayCards =[
      [
        "type" => "CROSSOVER",
        "modele" => "C40 Recharge",
        "energie" => "100 % électrique",
        "prix" => "44 950",
        "img" => "8.webp",
      ],
      [
        "type" => "SUV",
        "modele" => "XC40 Recharge",
        "energie" => "100 % électrique",
        "prix" => "43 950",
        "img" => "9.webp",
      ],
      [
        "type" => "SUV",
        "modele" => "XC90 Recharge",
        "energie" => "Hybride rechargeable",
        "prix" => "90 800",
        "img" => "10.webp",
      ],
      [
        "type" => "SUV",
        "modele" => "XC60 Recharge",
        "energie" => "Hybride rechargeable",
        "prix" => "72 130",
        "img" => "11.webp",
      ],
    ]
@endphp


<div class="px-36 grid grid-cols-4 gap-4">
  @foreach ($arrayCards as $arrayCard)
  @include('partials/homepage/_recharge-card')
  @endforeach
</div>
<div class="flex flex-row justify-center space-x-10 text-center text-sm py-20 font-bold text-blue-800">
      <a href="" class="hover:text-black">RECHARGE ></a>
      <a href="" class="hover:text-black">AUTRES MOTORISATIONS ></a>
</div>

