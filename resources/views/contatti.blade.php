@extends('layouts.app')

@section('content')
    <div class="container contacts">
    <h1>Contattaci</h1>
    <div class="contatti">
        <p><strong>Numero di telefono: </strong>02435768745</p>
        <p><strong>Fax: </strong> 05245456465</p>
        <p><strong>Email:</strong> info@boolean.it</p>
    </div>
    
    <form>
        <div class="email">
            <input type="email" class="form-control" id="emailArea" placeholder="Inserisci il tuo indirizzo email">
        </div>
        <div class="message">
            <textarea class="form-control" id="textArea" rows="10" placeholder="Scrivi qui"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="send">Invia</button>
    </form>

</div>
@endsection
