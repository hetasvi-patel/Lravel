@extends('template.layout')

@section('content')
<h3 align='center'>blog post</h3>

<h4>Patient Name :- {{$mypost->title}} </h4>

<hr>
<h5>Disease :-</h5>
<h6>{{$mypost}}</h6>
<h5>Medicines :-</h5>
<h6>{{}}</h6>

@php
    $i= 1;
@endphp
<ul>
@forelse()
    <li>
        <label for="">Visits : {{$i++}}<6/label>
        <p>{{}}</p>
    </li>
@empty
    <li>No More visits found</li>
@endforelse
</ul>

<form action="{{route('mypost.store')}}" method="post">
    @csrf
    <input type="hidden" name="patients_id" value= {{ $mypost->id }} >
    <div class="form-group">
    <label>Example textarea</label>
    <textarea name="med_diseases" class="form-control" rows="3"></textarea>
    </div>
    <input type="submit"  value="Visit Info" class="btn btn-primary">
</form>

@endsection
