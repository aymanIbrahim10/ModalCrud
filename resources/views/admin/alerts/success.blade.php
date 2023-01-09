<script>
@if(Session::has('success'))
$.toast({
heading: 'رسالة نجاح',
text: '{{Session::get('success')}}',
showHideTransition: 'slide',
icon: 'success',
loaderBg: '#f96868',
position: 'top-right'
});
@endif
</script>
