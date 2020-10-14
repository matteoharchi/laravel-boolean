@extends('layouts.app')

@section('content')
    <div class="container students">
        <h1>Studenti</h1>
        <p> Dai un'occhiata alle storie di alcuni dei nostri studenti</p>
        <div class="d-flex cards">
            @foreach ($data as $key=>$student)
                <div class="card" style="width: 20rem;">
                    <img src="{{$student->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> <a href="{{route('Student.show', ['id'=>$student->id])}}">{{$student['name']}}</a>  ({{$student['anni']}} anni)</h5>
                    <h6>Assunt{{($student->genere == 'f' ? 'a' : 'o')}} da {{$student->azienda}}</h6>
                    <p class="card-text">{{$student->descrizione}}</p>
                    <div class="card-linkedin-icon"><a href="#"><i class="fab fa-linkedin"></i></a></div>
                    </div>
                </div>   
            @endforeach      
        </div>
        
    </div>
@endsection