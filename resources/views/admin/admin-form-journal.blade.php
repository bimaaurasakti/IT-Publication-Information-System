@extends('admin.layouts.index')


@section('title')

SIPIT | Add Data Journal

@endsection


@section('content')

<div class="container">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="box">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1>Journal</h1>
                        <div class="d-flex justify-content-between">
                            <h4>{{ $action == 'add' ? 'Add' : 'Edit' }} Data Journal</h4>
                            <div class="pull-right">
                                <a href="{{ route('admin.adminDataJournal') }}" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
                            </div>
                        </div>

                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{ old('title') ?? $journal->title }}" id="title" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="score">Score</label>
                                <input type="text" name="score" value="{{ old('score') ?? $journal->score }}" id="score" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" name="publisher" value="{{ old('publisher') ?? $journal->publisher }}" id="publisher" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" name="category" value="{{ old('category') ?? $journal->area }}" id="category" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" name="website" value="{{ old('website') ?? $journal->link_website }}" id="website" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="loc">Location</label>
                                <textarea name="loc" id="loc" class="form-control" required>{{ old('loc') ?? $journal->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" name="district" value="{{ old('district') ?? $journal->district }}" id="district" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" name="email" value="{{ old('email') ?? $journal->email }}" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') ?? $journal->phone }}" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="file">File JPG, PNG, JPEG</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>
                            <div class="form-group pull-right">
                                <input type="submit" name="add" value="{{ $action == 'add' ? 'Add' : 'Edit' }}" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
