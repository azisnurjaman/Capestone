<div class="mainheader-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.html"><img src="{{asset ('template/admin/srtdash/assets/images/icon/logo2.png') }}" alt="logo"></a>
                </div>
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-9 clearfix text-right">
                <div class="d-md-inline-block d-block mr-md-4">
                    <ul class="notification-area">
                        <li id="full-view"><i class="ti-fullscreen"></i></li>
                        <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                    </ul>
                </div>
                <div class="clearfix d-md-inline-block d-block">
                    <div class="user-profile m-0">
                        <img class="avatar user-thumb" src="{{asset ('template/admin/srtdash/assets/images/author/avatar.png') }}" alt="avatar">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="return logout(event);">{{ __('Logout') }}</a>
                            <script type="text/javascript">
                                function logout(event) {
                                    event.preventDefault();
                                    var check = confirm("Do you really want to logout?");
                                    if (check) {
                                        document.getElementById('logout-form').submit();
                                    }
                                }
                            </script>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>