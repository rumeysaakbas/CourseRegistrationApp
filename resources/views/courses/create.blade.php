@extends('layouts.app')

@section('content')
<form method="post"action="{{route('courses.store')}}">
    @csrf
    
    <div class="mb-3 row">
        <label for="inputName" class="col-sm-2 col-form-label" >Kurs Adı: </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') }}">
            @error('name')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputLecturers" class="col-sm-2 col-form-label" >Kurs Eğitmenleri: </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputLecturers" name="lecturers" value="{{ old('lecturers') }}">
            @error('lecturers')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputAvailableSeats" class="col-sm-2 col-form-label" >Kontenjan: </label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="inputAvailableSeats" name="available_seats" value="{{ old('available_seats') }}">
            @error('available_seats')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <br>
    <button class="btn btn-primary mb-3" type="submit" >Ekle</button>
</form>
@endsection
