@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('course.create') }}" class="btn btn-info" >Add new course</a>
                       <hr>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Course name</th>
                                    <th>Lecturer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->lecturer->name }} {{ $course->lecturer->surname }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
