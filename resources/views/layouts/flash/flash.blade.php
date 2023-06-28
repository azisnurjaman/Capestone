<script>
    @if($message = Session::get('login'))
        toastr.success("{{Session::get('login')}}");
    @endif
</script>
<script>
    @if($message = Session::get('logout'))
        toastr.success("{{Session::get('logout')}}");
    @endif
</script>
<script>
    @if($message = Session::get('success'))
        toastr.success("{{Session::get('success')}}");
    @endif
</script>
<script>
    @if($message = Session::get('delete'))
        toastr.success("{{Session::get('delete')}}");
    @endif
</script>
<script>
    @if($message = Session::get('edit'))
        toastr.success("{{Session::get('edit')}}");
    @endif
</script>
<script>
    @if($message = Session::get('error'))
        toastr.warning("{{Session::get('error')}}");
    @endif
</script>
<script>
    @if(count($errors) > 0)
        @if($message = Session::get('errors'))
            @foreach($errors - > all() as $error)
                toastr.warning("{{Session::get('Perhatian','Data sudah ada')}}");
            @endforeach
        @endif
    @endif
</script>