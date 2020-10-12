@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">
    Cambia la tua vita. <br> 
    Entra in Boolean.
    </h1>
    <h4>Segui il corso, diventi un web developer e trovi lavoro</h4>
    <ul>
        <li><i class="fas fa-angle-right"></i> 6 mesi di corso full time, online e in diretta</li>
        <li><i class="fas fa-angle-right"></i> Nessuna competenza di programmazione richiesta</li>
        <li><i class="fas fa-angle-right"></i> Se non trovi lavoro ti rimborsiamo</li>
    </ul>
  </div>
  <div class="jumbotron-image">
    <img src="https://www.boolean.careers/images/visual/homeHeader.gif" alt="">

  </div>
</div>

<div class="nostri-numeri container">
    <h2>I nostri numeri</h2>
    <div class="d-flex">
        <div class="box">
            <img src="https://www.boolean.careers/images/icons/person.png" alt="">
            <p class="number">700 +</p>
            <p class="fact">GLI STUDENTI CHE FINO AD OGGI HANNO SEGUITO IL CORSO ONLINE DI BOOLEAN</p>
        </div>
        <div class="box">
            <img src="https://www.boolean.careers/images/icons/pacman.png" alt="">
            <p class="number">98 %</p>
            <p class="fact">LA PECENTUALE DEI NOSTRI STUDENTI CHE ORA LAVORA IN CAMPO TECH.</p>
        </div>
        <div class="box">
            <img src="https://www.boolean.careers/images/icons/rettangolo.png" alt="">
            <p class="number">23.000 €</p>
            <p class="fact">LO STIPENDIO MEDIO LORDO DI PARTENZA DEGLI STUDENTI ASSUNTI.</p>
        </div>
    </div>

</div>

@endsection