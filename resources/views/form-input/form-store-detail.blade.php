@extends('layoutsUMKM.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="container">
        <div class="box-form">
            <div class="text-in center">Store Detail</div>
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
                        <label>Store Name</label>
                        <input type="text" class="form-control @error('storeName') is-invalid @enderror" name="storeName">
                        @error('storeName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-select form-control @error('category') is-invalid @enderror">
                                <option value="">Category</option>
                                <option value="Food And Drink">Food and Drink</option>
                                <option value="Clothes" >Clothes</option>
                                <option value="Art">Art</option>
                                <option value="Furniture" >Furniture</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Beauty And Health">Beauty and Health</option>
                            </select>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>WhatsApp</label>
                            <input type="text" class="form-control @error('noWa') is-invalid @enderror" name="noWa">
                            @error('noWa')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control @error('ig') is-invalid @enderror" name="ig">
                            @error('ig')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="coloumn-detail">
                        <div class="form-group">
                            <label>Shopee</label>
                            <input type="text" class="form-control @error('shopee') is-invalid @enderror" name="shopee">
                            @error('shopee')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                        <div class="form-group">
                            <label>Other</label>
                            <input type="text" class="form-control @error('others') is-invalid @enderror" name="others">
                            @error('others')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror  
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror"></textarea>
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="button-content">
                        <button type="submit" class="btn-form btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection