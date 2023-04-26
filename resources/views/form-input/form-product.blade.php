@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="container">
        <div class="box-form height2">
            <div class="text-in center">Product</div>
            <hr class="line-style">
            <div class="formsbox">
                <form action="#" method="POST" enctype ="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-group">
                        <input type="file" name="imagePath" class="@error('imagePath') is-invalid @enderror">
                        @error('imagePath')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control @error('productName') is-invalid @enderror" name="productName">
                        @error('productName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror"></textarea>
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="button-content">
                        <button type="submit" class="btn-form btn">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection