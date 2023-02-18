@extends('layouts.app')

@section('content')
<form method="post"action="{{route('students.store')}}">
    @csrf
    
    <div class="mb-3 row">
        <label for="courseChoice" class="col-sm-2 col-form-label" >Kurs: </label> 
        <div class="col-sm-3">
            <select name="course_id" class="form-select" id="courseChoice" >
                @foreach ($courses as $course)
                    <option value="{{$course->id}}">
                        {{$course->name}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputName" class="col-sm-2 col-form-label" >İsim: </label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') }}">
            @error('name')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputDate" class="col-sm-2 col-form-label">Doğum Tarihi: </label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="inputDate" name="birth_date" value="{{ old('birth_date') }}">
            @error('birth_date')
                <br> <small style="color:red;"> {{ $message }} </small>
            @enderror
        </div>
    </div>
    <button class="btn btn-primary mb-3" type="submit" >Ekle</button>
</form>
@endsection