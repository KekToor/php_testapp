@extends('template')

@section('title')
    Produkty
@endsection

@section('content')
    <div class="row border rounded my-3">
        <div class="row">
            <div class="col-2 fs15 text-left">
                <strong>Filtrovat Podle:</strong>
            </div>
            <div class="col-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Název výrobce (Všechny)</option>
                    @unless(count($manufacturers) == 0)

                        @foreach($manufacturers as $manufacturer)
                            <option>{{$manufacturer->manufacturer_name}}</option>
                        @endforeach

                    @endunless

                </select>
            </div>
            <div class="col-5">
                <form method="get" action="{{route('index')}}" id="search-form">
                    <select class="form-select" name="selectedParttypeId">
                        <option selected>Kategorie (Všechny)</option>
                        @unless(count($parttypes) == 0)

                            @foreach($parttypes as $parttype)
                                <option value="{{$parttype->id}}" <?php if ($selectedParttypeId == $parttype->id){echo 'selected';} ?>>{{$parttype->parttype_name}}</option>
                            @endforeach

                        @endunless

                    </select>
                </form>

            </div>
        </div>
        @unless(count($products) == 0)

            @foreach($products as $product)
                <x-product-card :product="$product "/>
            @endforeach

        @endunless
    </div>
{{--    <div class="mt-5 p-4">--}}
{{--        {{$products->links()}}--}}
{{--    </div>--}}


@endsection
