@extends('template')

@section('content')
    <div class="row border rounded mt-3">
        @unless(count($products) == 0)

            @foreach($products as $product)
                <div class="col-6 text-justify p-1 border rounded h-25 w-50 d-inline-block">
                    <h4 class="text-center">{{$product->product_name}}</h4>
                    <h5>Cena: {{$product->price}}</h5>
                    <p><strong>Popis: </strong> {{$product->desc}} </p>
                    <div><strong>EAN: </strong> {{$product->barcode}} </div>
                </div>
            @endforeach

        @endunless
    </div>


@endsection
{{--@unless (count($products) == 0)--}}
{{--@foreach ($products as $product)--}}
{{--<p>--}}
{{--    {{$product['text']}}--}}
{{--</p>--}}
{{--@endforeach--}}

{{--@endunless--}}
