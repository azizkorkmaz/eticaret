
@extends("layouts.layout_site")
@section("content")

    <div class="container">
        <div class="jumbotron text-center">
            <h2>Arasığınız sayfa bulunamadı!</h2>
            <a href="{{route("anasayfa")}}" class=" btn btn-primary">Anasayfa'ya Dön</a>
        </div>
    </div>
@endsection
