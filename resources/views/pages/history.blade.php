@extends('layouts.app')
@section('content')
<div class="container">
    <div class="pageTitle">
        <span>{{ __('app.USERS_SEARCH_HISTORY') }}</span>
    </div>
    <div class="historiesCont">
        <table id="historyTable" class="table table-striped table-bordered" cellspacing="0" width="100%" border="0">
            <thead>
                <tr>
                    <th width="60%">Search Query</th>
                    <th width="40%">Search Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histories as $history)
                    <tr>
                        <td>{{$history->q}}</td>
                        <td>{{$history->created_at}} ({{$history->created_at->diffForHumans()}})</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('links')
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection
@section('pageScript')
    <script src="{{asset('lib/dataTable/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/history.js') }}" defer></script>
@endsection