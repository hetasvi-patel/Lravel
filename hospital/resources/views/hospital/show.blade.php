@extends('template.layout')

@section('content')
<h3 align='center'>NavGeevan Hospital</h3>

<h4>Patient Name :- {{$hospital->name}} </h4>

<hr>
<h5>Disease :-</h5>
<h6>{{$hosSpital->disease}}</h6>
<h5>Medicines :-</h5>
<h6>{{$hospital->medicines}}</h6>

@php
    $i= 1;
@endphp
<ul>
@forelse($hospital->getVisits as $visit)
    <li>
        <label for="">Visits : {{$i++}}<6/label>
        <p>{{$visit->med_diseases}}</p>
    </li>
@empty
    <li>No More visits found</li>
@endforelse
</ul>

<form action="{{route('visit.store')}}" method="post">
    @csrf
    <input type="hidden" name="patients_id" value= {{ $hospital->id }} >
    <div class="form-group">
    <label>Example textarea</label>
    <textarea name="med_diseases" class="form-control" rows="3"></textarea>
    </div>
    <input type="submit"  value="Visit Info" class="btn btn-primary">
</form>

@endsection
