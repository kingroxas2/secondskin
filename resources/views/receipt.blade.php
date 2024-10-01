

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

              </div>
          </div>
      </nav>

        <main class="min-h-screen mt-12 bg-gray-100">
            <div class="w-full max-w-screen-lg mx-auto flex flex-col items-center space-y-8 pt-10">
                <div class="bg-white shadow rounded w-full max-w-sm p-8 space-y-8 text-center">
                    <div>
                        <p class="font-bold text-3xl">Receipt</p>
                    </div>

                    <div>
                        <p class="text-lg font-semibold"><span class="font-bold">Name: </span>{{ $name }}</p>
                        <p class="text-lg font-semibold"><span class="font-bold">Credit Card: </span>{{ $creditcardnumber }}</p>
                        <p class="text-lg font-semibold"><span class="font-bold">Phone: </span>{{ $phone }}</p>
                        <p class="text-lg font-semibold"><span class="font-bold">Address: </span>{{ $address }}</p>
                    </div>

                    <div>
                        <p class="text-lg font-semibold"><span class="font-bold">Product: </span>{{ $product->name }}</p>
                        <p class="text-lg font-semibold"><span class="font-bold">Quantity: </span>{{ $qty }}</p>
                        <p class="text-lg font-semibold"><span class="font-bold">Total Price: </span>{{ $price }}</p>
                    </div>
                </div>

                <div>
                    <a href="{{ route('productList') }}" class="w-full py-2 rounded bg-blue-200 hover:bg-blue-300 text-blue-900 px-6">Main Page</a>
                </div>
            </div>
        </main>
    </body>
</html>
