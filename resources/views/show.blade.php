@extends('layouts.app')

@section('content')
    <a href="{{route ('Student.studenti')}}"> < Torna a Studenti </a>

    <div class="container students">
        <div class="d-flex cards">
                <div class="card" style="width: 20rem;">
                    <img src="{{$student['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> <a href="#">{{$student['name']}}</a>  ({{$student['anni']}} anni)</h5>
                    <h6>Assunt{{($student['genere'] == 'f' ? 'a' : 'o')}}</h6>
                    <p class="card-text">{{$student['descrizione']}}</p>
                    <div class="card-linkedin-icon"><a href="#"><i class="fab fa-linkedin"></i></a></div>
                    </div>
                </div>        
        </div>
        
    </div>
@endsection