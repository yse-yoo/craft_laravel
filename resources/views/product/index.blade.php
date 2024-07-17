<x-app-layout>
    <section class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Products</h2>
    </section>

    <section class="p-6">
        @if($products)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img class="w-full h-48 object-cover rounded-t-lg mb-4" src="/images/products/{{ $product['image_name'] }}" alt="{{ $product['name'] }}">
                <h4 class="text-xl font-bold text-gray-800">{{ $product['name'] }}</h4>
                <p class="text-gray-600 mt-2">{{ $product['summary'] }}</p>
                <p class="text-gray-800 font-bold mt-2">¥{{ number_format($product['price']) }}</p>
                <a class="text-blue-800 font-bold mt-2" href="{{ route('product.show', $product['id']) }}">More...</a>
            </div>
            @endforeach
        </div>
        @endif
    </section>
</x-app-layout>