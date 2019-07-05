@extends("layouts.layout_site")
@section("title", $category->category_name)
@section("content")

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route("anasayfa")}}">Anasayfa</a></li>
            <li class="active">{{$category->category_name}}</li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$category->category_name}}</div>
                    <div class="panel-body">
                        @if(count($sub_categories) > 0)
                        <h3>Alt Kategoriler</h3>
                            <div class="list-group categories">
                                @foreach($sub_categories as $sub_category)
                                    <a href="{{ route("kategori", $sub_category->slug) }}" class="list-group-item">
                                        <i class="fa fa-arrow-circle-right"></i>
                                        {{$sub_category->category_name}}
                                    </a>
                                @endforeach
                            </div>
                            @else
                            Bu kategori altında başka kategori bulunmamaktadır!
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    @if(count($products) > 0)
                        Sırala
                        <a href="?order=coksatanlar" class="btn btn-default">Çok Satanlar</a>
                        <a href="?order=yeni" class="btn btn-default">Yeni Ürünler</a>
                        <hr>
                    @endif
                    <div class="row">
                        @if(count($products) == 0)
                            <div class="col-md-12"> Bu kategoride henüz ürün eklenmemiştir!</div>
                        @endif
                        @foreach($products as $product)
                            <div class="col-md-3 product">
                                <a href="{{route("urun", $product->product_name)}}">
                                    <img src="http://lorempixel.com/400/400/food/4"></a>
                                <p><a href="{{route("urun", $product->slug)}}">{{$product->product_name}}</a></p>
                                <p class="price">{{$product->price}}₺</p>
                                <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                            </div>
                        @endforeach
                    </div>
                    {{ $products->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
