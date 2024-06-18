@extends("layout")

@section("naslovStranice")

    Glavna strana

@endsection

@section("sadrzajStranice")

    @if($sat >= 0 && $sat <=12)
        <p>Dobro jutro!</p>
    @else
        <p>Dobar dan!</p>
    @endif

    @foreach($products as $product)

        <p>{{ $product->name }}</p>

    @endforeach

    <p>Trenutno sati: {{ $sat }}</p>
    <p>Trenutno vreme je {{ $trenutnoVreme }}</p>
@endsection


