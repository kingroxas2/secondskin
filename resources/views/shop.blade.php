

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Second Skin</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <nav class="fixed inset-x-0 top-0 h-10">
            <div class="w-full max-w-screen-lg mx-auto flex justify-between items-center h-full px-4 bg-white">
                <div class="">
                  <a href="{{ route('productList') }}" >SECONDSKIN &emsp;</a>
                    <a href="{{ route('productList') }}" class="text-blue-600 hover:text-blue-800 hover:underline">Home &emsp;</a>
                    <a href="http://127.0.0.1:8000/aboutus" class="text-blue-600 hover:text-blue-800 hover:underline">About&emsp;</a>
                    <a href="http://127.0.0.1:8000/contactus" class="text-blue-600 hover:text-blue-800 hover:underline">Contact Us &emsp;</a>
                    <a href="http://127.0.0.1:8000/menu" class="text-blue-600 hover:text-blue-800 hover:underline">Menu &emsp;</a>  <!-- new -->


                </div>
            </div>
        </nav>

        <main class="min-h-screen mt-12">
            <div class="w-full max-w-screen-lg mx-auto">
                <div class="grid grid-cols-3 gap-4">
                    @forelse ($all_product_list as $product)
                        <form method="post">
                            @csrf

                            <div class="flex flex-col space-y-2">
                                <div class="h-80">
                                    <img src="{{ asset('images/' . $product->filename) }}" class="h-full w-full object-fill rounded"/>
                                </div>

                                <div>
                                    <p><span class="font-bold">Product Name:</span> {{ $product->name }}</p>

                                    <p><span class="font-bold">Description Name:</span> {{ $product->description }}</p>

                                    <p><span class="font-bold">Price:</span> RM {{ $product->price }}</p>
                                </div>

                                <div>
                                    <input type="hidden" name="id" value="{{ $product->id }}"/>

                                    <div>
                                        <label for="qty" class="">Qty</label>
                                        <input class="w-full appearance-none border p-2 rounded" type="number" name="qty" id="qty" value="1">
                                    </div>

                                    <div>
                                        <button type="submit" name="buy" class="w-full py-2 rounded bg-blue-200 hover:bg-blue-300 text-blue-900">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @empty
                        <div class="col-span-3 flex justify-center py-4">
                            <p>No items</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </main>
    </body>
</html>
