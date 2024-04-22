@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('lecturer.create') }}" class="btn btn-info" >{{ __('Add new lecturer') }}</a>
                        <hr>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Lecturer</th>
                                    <th>Course name</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lecturers as $lecturer)
                                <tr>
                                    <td>{{ $lecturer->name }}</td>
                                    <td>
                                        @foreach($lecturer->courses as $course)
                                            {{ $course->name }},
                                        @endforeach
                                    </td>

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
