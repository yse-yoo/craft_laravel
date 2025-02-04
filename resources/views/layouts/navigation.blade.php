<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-gray-800">
            <a href="./">Craftman Shop</a>
        </h1>
        <nav class="mt-4">
      <ul class="flex space-x-4">
        <li><a href="{{ route('product.index') }}" class="text-gray-600 hover:text-gray-800">商品</a></li>
        <li><a href="{{ route('artisan.index') }}" class="text-gray-600 hover:text-gray-800">職人紹介</a></li>
        <li><a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800">ユーザ登録</a></li>
        <li><a href="#" class="text-gray-600 hover:text-gray-800">マイページ</a></li>
        <li><a href="#" class="text-gray-600 hover:text-gray-800">カート</a></li>
      </ul>
      </nav>
    </div>
</header>