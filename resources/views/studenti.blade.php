@extends('layouts.app')

@section('content')
    <div class="container students">
        <h1>Studenti</h1>
        <p> Dai un'occhiata alle storie di alcuni dei nostri studenti</p>
        <div class="d-flex cards">
            @foreach ($data as $student)
                <div class="card" style="width: 20rem;">
                    <img src="{{$student['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$student['name']}} ({{$student['anni']}} anni)</h5>
                    <p class="card-text">{{$student['descrizione']}}</p>
                    <div class="card-linkedin-icon"><a href="#"><i class="fab fa-linkedin"></i></a></div>
                    </div>
                </div>   
            @endforeach      
        </div>
        
    </div>
@endsection