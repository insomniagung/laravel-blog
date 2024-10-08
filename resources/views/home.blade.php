<x-app-layout>

    @section('hero')
        {{-- <div class="w-full text-center py-32"> --}}
        <div class="w-full text-center py-48">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                {{-- Welcome to <span class="text-yellow-500">&lt;YELO&gt;</span> <span class="text-gray-900"> News</span> --}}
                {{-- <span class="text-yellow-500">&lt;Main.</span><span class="text-gray-900 text-3xl">Kode&gt;</span> --}}
                <span class="text-4xl"><span class="text-yellow-500">Pelajari coding dari </span>&lt;Main.Kode&gt;</span>
            </h1>
            {{-- <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p> --}}
            <p class="text-gray-500 text-lg mt-1">Website belajar bahasa pemrograman.</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="http://127.0.0.1:8000/blog">Mulai Belajar
            </a>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <!-- Featured Posts -->
        <div class="mb-16">
            {{-- <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2> --}}
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Posting Unggulan</h2>
            <div class="w-full">
                <!-- List-->
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-posts.post-card :post='$post' />
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">Posting Lainnya</a>
        </div>
        <hr>

        <!-- Latest Posts -->
        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Posting Terbaru</h2>
        <div class="w-full mb-5">
            <!-- List -->
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post='$post' />
                    </div>
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold" href="http://127.0.0.1:8000/blog">Posting Lainnya</a>
    </div>
</x-app-layout>
