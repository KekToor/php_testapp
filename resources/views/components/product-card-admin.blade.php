@props(['product'])

<div class="col-6 text-justify p-1 border rounded d-inline-block">
    <h4 class="text-center">{{$product->parttype->parttype_name}} {{$product->manufacturer->manufacturer_name}} {{$product->product_name}}</h4>
    <h5><strong>Cena: </strong> <strong class="text-danger"> {{$product->price}},- </strong></h5>
    <p><strong>Popis: </strong> {{$product->desc}} </p>
    <div><strong>EAN: </strong> {{$product->barcode}} </div>
    <div class="row py-2">
        <div class="col-6">
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-primary">Upravit</button>
            <button type="button" class="btn btn-danger">Odstranit</button>
        </div>
    </div>
</div>
