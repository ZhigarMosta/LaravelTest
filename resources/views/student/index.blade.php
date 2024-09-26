@extends('layout.main')
@section('content')
    <h1>список студента</h1>
    @foreach ($students as $studenst)
        <p>{{$studenst->age}}</p>
    @endforeach
@endsection()