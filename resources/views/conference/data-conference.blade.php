@extends('layouts.app')


@section('title')
SIPIT | Conferences
@endsection


@section('css')
<link href="{{ asset('css/conference/data-conference.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('content')
<div class="conference-container">
    <div class="w-100 mb-5 d-flex justify-content-center">
        <div class="conference-page-title">
            <h1>Conference</h1>
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
                    <div class="conference-item conference-item-border" onclick="location.href='conference/detail-conference/{{ $conference->slug }}';" style="cursor: pointer;">
                        <div class="position-relative">
                            <div class="d-block">

                            </div>
                        </div>

                        <div class="d-block">
                            <div class="px-3 py-3">
                                <h3 class="conference-title m-0">
                                    {{ $conference->name }}
                                </h3>
                                <hr>
                                <p class="conference-title m-0">
                                    {{ $conference->long_name }}
                                </p>

                                <div class="d-flex flex-wrap mt-2">
                                    @foreach ($areas as $area)
                                    <div class="mt-1">
                                        <p class="conference-area-text">
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

        <div class="d-flex justify-content-center mt-4">
            <div>
                {{ $conferences->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
