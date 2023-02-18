@extends('layouts.app')

@section('content')
<form method="post"action="{{route('courses.update', $course)}}">
    @method('put')
    @csrf
    <div class="mb-3 row">
        <label for="inputName" class="col-sm-2 col-form-label" >Kurs Adı: </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') ? old('name') : $course->name }}">
            @error('name')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputLecturers" class="col-sm-2 col-form-label" >Kurs Eğitmenleri: </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputLecturers" name="lecturers" value="{{ old('lecturers') ? old('lecturers') : $course->lecturers}}">
            @error('lecturers')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputAvailableSeats" class="col-sm-2 col-form-label" >Kontenjan: </label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="inputAvailableSeats" name="available_seats" value="{{ old('available_seats') ? old('available_seats') : $course->available_seats}}">
            @error('available_seats')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <br>
    <button class="btn btn-primary mb-3" type="submit" >Düzenle</button>
</form>
@endsection

