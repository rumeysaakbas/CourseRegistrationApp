@extends('layouts.app')

@section('content')

@php
    $counter=1;
@endphp
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kurs Adı</th>
      </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
            <tr>
                <th scope="row">{{ $counter++ }}</th>
                <td>        
                    <a href="{{ route('courses.show', $course) }}" class="text-decoration-none">
                        {{ $course->name }}
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection