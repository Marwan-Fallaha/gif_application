<script src="{{ asset("lib/jquery/jquery.min.js") }}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    $('.dark-light').click(function(){
        $('body').toggleClass('dark-mode');
        var isDark = $('body').hasClass('dark-mode');
        if(isDark == true)
            $('.navbar').removeClass('navbar-light bg-ligh').addClass('navbar-dark bg-dark');
        else
            $('.navbar').removeClass('navbar-dark bg-dark').addClass('navbar-light bg-light');
        $.ajax({
            headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url:"setDarkMode",
            data: {'isDarkMode': isDark},
            type:'post'
        });
      });  
</script>
@yield('pageScript')