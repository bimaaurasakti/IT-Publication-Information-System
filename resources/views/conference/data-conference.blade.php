@extends('layouts.app')


@section('title')
SIPIT | Journal
@endsection


@section('css')
<link href="{{ asset('css/journal/journal.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('content')
<div class="journal-container">
    <div class="w-100 mb-5">
        <div class="journal-page-title">
            <p>Conference</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($conferences as $conference)
            @php
                $areas = explode(", ", $conference->area);
            @endphp
            <div class="col-xxl-4 col-xl-4 mb-5">
                <div class="d-flex justify-content-center">
                    <div class="journal-item journal-item-border">
                        <div class="position-relative">
                            <div class="d-block">
                                <img class="journal-item-border-top" src="{{ asset($conference->photo) }}" alt="{{ $conference->photo }}" height="300px" width="200px">
                                <div class="journal-score-container">
                                    <div class="journal-score journal--bg-{{ $conference->score }} journal-item">
                                        <p class="m-0 text-light text-uppercase">
                                            {{ $conference->name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-block">
                            <div class="px-3 py-3">
                                <p class="jounal-title m-0">
                                    {{ $conference->name }}
                                </p>

                                <div class="d-flex flex-wrap mt-2">
                                    @foreach ($areas as $area)
                                    <div class="mt-1">
                                        <p class="journal-area-text">
                                            {{ $area }}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
