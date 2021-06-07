@extends('admin.layouts.index')


@section('title')

SIPIT | Add Data Conference

@endsection


@section('content')

<div class="container">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="box">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1>Conference</h1>
                        <div class="d-flex justify-content-between">
                            <h4>{{ $action == 'add' ? 'Add' : 'Edit' }} Data Conference</h4>
                            <div class="pull-right">
                                <a href="{{ route('admin.adminDataConference') }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
                            </div>
                        </div>

                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') ?? $conference->name }}" id="name" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="long_name">Full Name</label>
                                <input type="text" name="long_name" value="{{ old('long_name') ?? $conference->long_name }}" id="long_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="area">Area</label>
                                <input type="text" name="area" value="{{ old('area') ?? $conference->area }}" id="area" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="organizer">Organizer</label>
                                <input type="text" name="organizer" value="{{ old('organizer') ?? $conference->organizer }}" id="organizer" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="link_website">Link Website</label>
                                <input type="text" name="link_website" value="{{ old('link_website') ?? $conference->link_website }}" id="link_website" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" value="{{ old('location') ?? $conference->location }}" id="location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" value="{{ old('location') ?? $conference->date }}" id="date" class="form-control" required>
                            </div>
                            <div class="form-group pull-right">
                                <input type="submit" name="add" value="Simpan" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
