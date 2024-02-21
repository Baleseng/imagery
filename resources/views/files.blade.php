
@extends('layouts.app')

@section('content')
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-gray-900">Latest Products</h3>
        <div class="h-1 bg-gray-800 w-48"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($files as $file)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url('storage/images/'.$file->file_name) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-gray-700 uppercase">{{ $file->title }}</h3>
                        <span class="mt-2 text-gray-500 font-semibold">${{ $file->price }}</span>
                    </div>


                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $file->id }}" name="id">
                        <input type="hidden" value="{{ $file->title }}" name="name">
                        <input type="hidden" value="{{ $file->price }}" name="price">
                        <input type="hidden" value="{{ $file->file_name }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-gray-900 rounded">Add To Cart</button>
                    </form>
 

                </div>
                
            </div>
            @endforeach
        </div>
    </div>

@endsection


