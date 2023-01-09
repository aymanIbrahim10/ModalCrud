<script>
    @if(Session::has('error'))
        $.toast({
            heading: 'رسالة خطأ',
            text: '{{Session::get('error')}}',
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right'
        });
    @endif
</script>
