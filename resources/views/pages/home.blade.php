@extends('layouts.app')
@section('content')
<div class="page-single">
    <div class="container adsDataDiv">
        <div class="pageTitle">
        <span>{{ __('app.WELCOME') }} {{ Auth::user()->name }}</span>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control search" placeholder="{{ __('app.SEARCH_GIF') }}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary searchBtn" type="button">{{ __('app.SEARCH') }}</button>
                    </div>
                </div>
                <div class="flex-wrap-movielist mv-grid-fw pageData">
                    <div class="filterDiv O adStyle2 adStyle1 show">
                        <div class="container">
                            <div id="searchResults"></div>
                        </div>                                    
                    </div>
                </div>
                <div class="loader" style="display:none;width:100%">
                    <img src="{{ asset('images/loader.gif') }}" width="500px" style="margin-left:30%">	
                </div>
                <div class="searchWarning">
                    <div class="alert alert-warning">{{ __('app.PLEASE_SEARCH_FOR_GIFS') }}</div>
                </div>
                <div class="topbar-filter" style="display:none;">
                    <div class="pagination2 paginationCont">
                        <button class="btn btn-primary loadMore">Load More</button>
                    </div>
                    <div class="showCount"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('pageScript')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
