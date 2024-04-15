@extends('front.layouts.layout')

@section('content')

    <section id="articles">
        <div class="container max-w-6xl mx-auto px-6 py-12 block md:flex">
            <div class="column bg-black/50 w-1/4">
                @foreach($categories as $category)
                    <div class="border-2 rounded-lg bg-amber-200 p-2 mx-2xl">
                        {{$category->title}}
                    </div>
                @endforeach
            </div>
            <div class="column bg-red w-3/4">block</div>
        </div>
    </section>

@endsection
