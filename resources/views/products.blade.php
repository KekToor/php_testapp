@extends('template')

@section('content')
    <div class="row">

    </div>
    @unless(count($products) == 0)


    @endunless

@endsection
{{--@unless (count($products) == 0)--}}
{{--@foreach ($products as $product)--}}
{{--<p>--}}
{{--    {{$product['text']}}--}}
{{--</p>--}}
{{--@endforeach--}}

{{--@endunless--}}
