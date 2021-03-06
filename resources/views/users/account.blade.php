@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-4">
           @component('shared.sideBar',['stores'=>'active'])
            @endcomponent
        </div>

        <div class="col-8">
    <div class="card-group">
    @foreach( $stores as $store)
    <div class="card" style="width:18rem;">
        @isset($store->image)
            <img src="{{asset($store->image)}}" class="card-img-top" alt="...">
        @endisset

        @empty($store->image)
        <img src="{{asset('/img/open.jpg')}}" class="card-img-top" alt="...">
        @endempty
        <div class="card-body">
            <h5 class="card-title">{{$store->name}}</h5>
            <p class="card-text">{{$store->description}}</p>
            <a role="button" href="{{route('stores.edit',$store->id)}}" class="btn btn-primary">تعديل المتجر</a>
            <a role="button" href="{{route('stores.products',$store->id)}}" class="btn btn-primary">اضافه سلع </a>
            <a role="button" href="{{route('stores.delete',$store->id)}}" class="btn btn-primary">مسح المتجر</a>
        </div>
    </div>

    @endforeach
    </div>
        </div>
    </div>

@endsection
