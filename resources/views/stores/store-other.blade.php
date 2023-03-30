@extends('layouts.app')

@section('content')
<section class="store-page">
    <h2 class="center">STORE</h2>
    <div class="tag display-flex">
        <p>Others</p>
    </div>
    <div class="store-box">
    <div class="store-sidebar">
            <a href="/art-store">
            <div class="store-cat">
                <p>Art</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/beauty-store">
            <div class="store-cat">
                <p>Beauty&Health</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/clothes-store">
            <div class="store-cat">
                <p>Clothes</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/electronic-store">
            <div class="store-cat">
                <p>Electronic</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/store">
            <div class="store-cat">
                <p>Food&Drink</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/furniture-store">
            <div class="store-cat">
                <p>Furniture</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
            <a href="/other" class="active">
            <div class="store-cat">
                <p>Others</p>
                <i class="fas fa-angle-down"></i>
            </div></a>
            <hr>
        </div>
        <div class="store-box2">
            <div class="box-container">
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
            </div>
            <div class="box-container">
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
            </div>
            <div class="box-container">
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
                <a href="/store-detail">
                <div class="store-card card">
                    <div class="box-store box">
                        <img class="image" src="#" href="#">
                    </div>
                    <p class="title">Store Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div></a>
            </div>
        </div>  
    </div>
</section>
@endsection