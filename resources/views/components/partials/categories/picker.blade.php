<div class="container py-16 mx-auto">
    <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">{{ $title }}</h2>
    <div class="grid grid-cols-6 gap-3 ">
        @foreach ($category->subcategories as $subcategory)
            <div class="relative rounded-sm overflow-hidden group">
                <img src="{{ $subcategory->image }}" alt="{{ $subcategory->name }}" class="object-cover">
                <a href="{{ route('subcategory', ['category' => $subcategory->category->slug, 'subcategory' => $subcategory->slug]) }}"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition px-4">
                    {{ $subcategory->name }}
                </a>
            </div>
        @endforeach
    </div>
</div>
