//*************************************************** */
$(function(){
    $('.search').on('keypress',function(e) {
        if(e.which == 13) {
            searchGIF($(this).val(), 0, 'Y');
        };
    });
    $('.searchBtn').click(function(){searchGIF($('.search').val(), 0, 'Y');});
    if($('.gifBox').length == 0)
        $('.topbar-filter').hide();
    $('.loadMore').click(function(){
        searchGIF($('.search').val(), parseInt($('.gifBox').length), '');
    });
})
//*************************************************** */
function searchGIF(q, offset, isClear){
    //you can get API data from javascript and send it to view
    // var xhr = $.get("http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key=ZlxXfTTo5TZ8LXTyRJBZ8Ips98oAeKgK&limit=5");
    if(q != ''){
        $('.loadMore').attr('disabled', true);
        $('.loader').show();
        $('.searchWarning').hide();
        if(isClear == 'Y')
            $('#searchResults').fadeOut('slow').html(null);
        $.ajax({
            headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url:"getSearchResults",
            data: {'q': q, 'offset':offset},
            type:'post',
            success: function(res){
                if(isClear == 'Y')
                    $('#searchResults').fadeIn('slow')
                $('#searchResults').append(res.html);
                $('.loadMore').attr('disabled', false);
                $('.loader').hide();
                $('.showCount').html('Showing'+$('.gifBox').length+' of '+$('#totalCount').val());
                if($('.gifBox').length != 0)
                    $('.topbar-filter').show();
            },
            error: function(res){
                $('.loader').hide();
                alert('error');
            }
        });
    } else {
        $('#searchResults').fadeOut('slow').html(null);
        $('.loadMore').attr('disabled', false);
        if($('.gifBox').length == 0)
            $('.topbar-filter').hide();
    }
}
//*************************************************** */
