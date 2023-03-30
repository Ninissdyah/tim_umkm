@extends('layouts.app')

@section('content')
<section class="store">
    <div class="tag">
        <!--Diisi sesuai kategorinya-->
        <p>Category</p>
    </div>
    <div class="info-store">
        <div class="profile">
            <img class="img img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
        </div>
        <div class="profile-name">
            <p class="medium-bold">Store Name</p>
            <div class="sosmed">
                <a href="#"><img class="img img-sosmed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" alt="iniGambar"> </a>
                <a href="#"><img class="img img-sosmed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/640px-WhatsApp_icon.png" alt="iniGambar"> </a>
                <a href="#"><img class="img img-sosmed" src="https://w7.pngwing.com/pngs/245/945/png-transparent-shopee-indonesia-online-shopping-android-receive-link-free-android-text-rectangle-orange-thumbnail.png" alt="iniGambar"> </a>
            </div>
            <div class="store-address">
                <i class="fas fa-map-marker-alt fa-xl"></i>
                <p>Yogyakarata</p>
            </div>
        </div>
    </div>
    <div class="desc-store">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <hr>
    </div>
    <div class="product-store">
        <h2>PRODUCT</h2>
        <div class="box-container">
            <div id="myBtn" class="store-card card">
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close"></span>
                        <img class="img-modal" src="https://s0.bukalapak.com/img/08472951892/s-330-330/data.jpeg.webp" alt="iniGambar">
                    </div>
                </div>
                <div class="box-store box">
                    <img class="image" src="https://s0.bukalapak.com/img/08472951892/s-330-330/data.jpeg.webp" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
            <div class="store-card card">
                <div class="box-store box">
                    <img class="image" src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
            <div class="store-card card">
                <div class="box-store box">
                    <img class="image" src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
            <div class="store-card card">
                <div class="box-store box">
                    <img src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
        </div>

        <div class="box-container">
            <div class="store-card card">
                <div class="box-store box">
                    <img src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
            <div class="store-card card">
                <div class="box-store box">
                    <img src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
            <div class="store-card card">
                <div class="box-store box">
                    <img src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
            <div class="store-card card">
                <div class="box-store box">
                    <img src="#" alt="iniGambar">
                </div>
                <p class="title-product">Ayam Bakar Kemangi</p>
                <p class="harga-product"><b>Rp 18.000</b></p>
            </div>
        </div>
    </div>
</section>
@endsection