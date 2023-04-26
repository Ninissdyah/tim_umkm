@extends('layouts-admin.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="text">I DASHBOARD</div>
    <div class="grid-dash">
        <div class="grid grid-profile">
            <div class="text-in">PROFILE</div>
            <hr class="line-style">
            <div class="profile">
                <img class="img dash-profile img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
            </div>
            <div class="content-profile">
                <p class="sub-title">Role</p>
                <div class="text-content">
                    <p>Admin 1</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Email</p>
                <div class="text-content">
                    <p>Email</p>
                </div>
            </div>
            <div class="content-profile">
                <p class="sub-title">Password</p>
                <div class="text-content">
                    <p>******</p>
                </div>
            </div>
            <br>
        </div>
        <div class="grid grid-product">
            <div class="text-in">STORE</div>
            <hr class="line-style">
            <div class="content-profile content">
                <p>20<span> Store</span></p>
            </div>
        </div>
        <div class="grid grid-blog">
            <div class="text-in">BLOG</div>
            <hr class="line-style">
            <div class="content-profile content">
                <p>30<span> Content</span></p>
            </div>
        </div>
    </div>
</section>
@endsection