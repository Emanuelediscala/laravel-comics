@extends('layouts.app')

@section('content')
<div>
    <section class=" bg-black w-100 relative">
        <div id="jumbo">
        </div>
        <button class="btn btn-primary btnabsolute">CURRENT SERIES</button>
        <div class="container d-flex flex-wrap justify-content-center relative p-5">
            @foreach ($cardsList as $card)
            <div class="widx6 p-2">
                <img src="{{$card["thumb"]}}"  alt="">
                <p>{{ $card["series"] }}</p>
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
            @endforeach
        </div>
    </section>
    <section class="bg-primary w-100">
        <div class="container p-3">
            <nav class="w-100">
                <ul class="nav d-flex justify-content-around">
                    @foreach ($iconsList as $icon) 
                    <li  class="nav-item d-flex align-items-center" >
                        <img src="{{ Vite::asset($icon['path'])}}" alt="">
                        <a class="nav-link active" aria-current="page" href="#">{{ $icon['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>
</div>
@endsection