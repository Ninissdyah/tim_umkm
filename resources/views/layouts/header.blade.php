 <!--HEADER-->
 <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a href="/" class="navbar navbar-brand">
                <img class="logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar"></a>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="list-head navbar-nav ">
                    <a class="nav-item" href="/">Home</a>
                    <a class="nav-item" href="/blog">Blog</a>
                    <a class="nav-item" href="/store">Store</a>
                    <a class="nav-item" href="/aboutus">About Us</a>
                </div>
                <div class="navbar-nav ms-auto sign">
                    <a href="{{ route('login') }}" class="nav-item">Sign In</a>
                </div>
            </div>
        </div>
        </nav>
    </nav> 
</div>
<!--END HEADER-->