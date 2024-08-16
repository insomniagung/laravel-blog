@props(['post'])
<div class="">
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a href="#" class="bg-red-600 
        text-white 
        rounded-xl px-3 py-1 text-sm mr-3">
                Laravel
            </a>
            {{-- <p class="text-gray-500 text-sm">{{ $post->published_at }}</p> --}}
            {{-- <p class="text-gray-500 text-sm">{{ $post->published_at->format('d-m-Y H:i:s') }} </p> --}}
            <p class="text-gray-500 text-sm">{{ $post->published_at->format('d/m/Y') }} · {{ $post->published_at->format('H:i') }}</p>
        </div>
        <a class="text-xl font-bold text-gray-900" href="#">{{ $post->title }}</a>
    </div>
</div>
