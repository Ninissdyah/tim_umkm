@extends('layouts.app')

@section('content')
<section class="blog-detail">
    <h2>Article Title</h2>
    <div class="info-blog">
        <p>xx/yy/xx</p>
        <i class="bi-dash-lg"></i>
        <p>Author</p>
    </div>

    <div id="myBtn" class="banner-blog">
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close"></span>
                <img class="img-modal" src="https://bua.ub.ac.id/wp-content/uploads/2018/02/Banner-Pameran-Februari-6kali3-1024x512.jpg" alt="iniGambar">
            </div>
        </div>
        <img class="img-blog" src="https://bua.ub.ac.id/wp-content/uploads/2018/02/Banner-Pameran-Februari-6kali3-1024x512.jpg">
    </div>

    <div class="contain-blog">
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
            a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
            "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. 
            This book is a treatise on the theory of ethics, very popular during the Renaissance. 
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
            a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
            "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. 
            This book is a treatise on the theory of ethics, very popular during the Renaissance. 
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
            a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 
            "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. 
            This book is a treatise on the theory of ethics, very popular during the Renaissance. 
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>
    <button href="#" class="btn">Food&Drink</button>
</section>
@endsection