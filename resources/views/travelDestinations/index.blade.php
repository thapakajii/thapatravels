@extends('layouts.header-footer')
@section('content')
<section class="py-20 px-4">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="mt-10 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-900 to-blue-400">
                Travel Destinations</h2><hr class="mt-5 mb-5">
                <p class="leading-normal text-gray-700">Browse from our destinations</p>
                
        </div>
        <div class="container w-full px-5 py-6 mx-auto"> 
            <div class="grid lg:grid-cols-3 gap-y-6 pt-3 bg-gradient-to-r from-slate-50 to-blue-50 shadow-lg">
                @foreach ($traveldestinations as $traveldestination)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg bg-white">
                        <img class="w-full h-48" src="{{ Storage::url($traveldestination->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                {{ $traveldestination->name }}</h4>
                                <p class="leading-normal text-gray-700 mb-10 object-contain">{{ $traveldestination->description }}.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-blue-500">${{ $traveldestination->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>


@endsection