@extends('layouts.app')

@php
    $counter=1;
@endphp

@section('content')

<h3>{{ $course->name }}</h3>

<ul class="list-group list-group-horizontal-lg">
    <li class="list-group-item" style="width:200px;">Eğitmenler</li>
    <li class="list-group-item" style="width:200px;">{{ $course->lecturers }}</li>
</ul>
<ul class="list-group list-group-horizontal-lg">
    <li class="list-group-item" style="width:200px;">Toplam Kontenjan</li>
    <li class="list-group-item" style="width:200px;">{{ $course->available_seats }}</li>
</ul>
<ul class="list-group list-group-horizontal-lg">
    <li class="list-group-item" style="width:200px;">Eklenme Zamanı</li>
    <li class="list-group-item" style="width:200px;">{{ $course->created_at }}</li>
</ul>
<ul class="list-group list-group-horizontal-lg">
    <li class="list-group-item" style="width:200px;">Güncellenme Zamanı</li>
    <li class="list-group-item" style="width:200px;">{{ $course->updated_at }}</li>
</ul>
<br>

<a class="btn btn-primary" href="{{ route('courses.edit', $course) }}" role="button" style="width:90px;">Düzenle</a>

<form method="post" action="{{ route('courses.destroy', $course) }}" class="mt-3">
    @method('delete')
    @csrf
    <button class="btn btn-danger" type="submit" style="width:90px;">Sil</button>
</form>

<br>
<br>
<h4>Öğrenciler</h4>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Öğrencinin Adı</th>
            <th scope="col">Yaşı</th>
            <th scope="col">Eklenme Tarihi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($course->students as $student)
            <tr>
                <th scope="row">{{ $counter++; }}</th>
                <td>{{ $student->name }} </td>
                <td>
                    @if (getType($student->age)== 'integer')
                    {{ $student->age }}
                    @endif
                </td>
                <td>{{ $student->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection