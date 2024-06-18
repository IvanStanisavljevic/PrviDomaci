@extends("layout")

@section("naslovStranice")
    Prodavnica
@endsection

@section("sadrzajStranice")

    @foreach($products as $product)
        <div>
            <p>{{ $product->name }}</p>
            <p>{{ $product->description }}</p>
        </div>
    @endforeach


@endsection
