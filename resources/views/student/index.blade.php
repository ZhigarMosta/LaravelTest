@extends('layout.main')
@section('content')
    <h1>список студента</h1>
    @foreach ($studensts as $studenst)
        <p>{{$studenst->age}}</p>
    @endforeach
@endsection()