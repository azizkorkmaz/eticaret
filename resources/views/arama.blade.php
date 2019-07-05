
@extends("layouts.layout_site")

@section("content")

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{route("anasayfa")}}">Anasayfa</a></li>
            <li class="active">Arama Sonucu</li>
        </ol>

        <div class="products bg-content">
            <div class="row">
                @if(count($products) == 0)
                    <div class="col-md-12 text-center">
                        Bir ürün bulunamadı!
                    </div>
                @endif
                @foreach($products as $product)

                    <div class="col-md-3 product">
                        <a href="{{route("urun", $product->slug)}}">
                            <img src="http://lorempixel.com/400/400/food/1" alt="{{$product->product_name}}">

                        </a>

                        <p>
                            <a href="{{route("urun", $product->slug)}}">
                                {{$product->product_name}}
                            </a>
                        </p>

                        <p class="price">{{$product->price}}</p>
                    </div>
                @endforeach
            </div>
            {{$products->appends(["aranan" => old("aranan")])->links()}}
        </div>
    </div>
@endsection
