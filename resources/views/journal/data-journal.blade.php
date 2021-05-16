@extends('layouts.app')


@section('title')
SIPIT | Journal
@endsection


@section('css')
<link href="{{ asset('css/journal/data-journal.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('content')
<div class="content-container">
    <div class="w-100 mb-5 d-flex justify-content-center">
        <div class="content-page-title">
            <h1>Journal</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($journals as $journal)
            @php
                $areas = explode(", ", $journal->area);
            @endphp
            <div class="col-xxl-3 col-xl-4 mb-5">
                <div class="d-flex justify-content-center">
                    <div class="journal-item journal-item-border" onclick="location.href='journal/detail-journal/{{ $journal->slug }}';" style="cursor: pointer;">
                        <div class="position-relative">
                            <div class="d-block">
                                <img class="journal-item-border-top" src="{{ asset($journal->photo) }}" alt="{{ $journal->photo }}" height="300px" width="200px">
                                <div class="journal-score-container">
                                    <div class="journal-score journal--bg-{{ $journal->score }} journal-item">
                                        <p class="m-0 text-light text-uppercase">
                                            {{ $journal->score }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-block">
                            <div class="px-3 py-3">
                                <p class="jounal-title m-0">
                                    {{ $journal->judul }}
                                </p>

                                <div class="d-flex flex-wrap mt-2 mb-3">
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
