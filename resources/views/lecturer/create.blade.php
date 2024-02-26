@extends('layouts.app')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('lecturer.store') }}" method="post">
                    @csrf
                    <div class="card">

                        <div class="card-header">Add new lecturer</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input name="name" type="text" value="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Surname:</label>
                                <input name="surname" type="text" value="" class="form-control" required>
                            </div>

                            <button class="btn btn-success">Add</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
