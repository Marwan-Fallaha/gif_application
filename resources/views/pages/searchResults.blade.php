@if(count($data) > 0)
    <input type="hidden" value="{{ $total }}" id="totalCount">
    <div class="row">
        @foreach ($data as $gif)
            <div class="col-md-3 gifBox">
                <a href="{{ $gif->url }}" target="_b">
                    <img id="{{ $gif->id }}" src=" {{ $gif->images->downsized_medium->url }}">
                </a>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-warning">No Data Found</div>
@endif