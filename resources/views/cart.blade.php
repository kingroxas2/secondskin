

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

        <main class="min-h-screen mt-12">
            <div class="w-full max-w-screen-lg mx-auto">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col space-y-2">
                        <div class="h-80">
                            <img src="{{ asset('images/' . $product->filename) }}" class="h-full w-full object-fill rounded"/>
                        </div>

                        <div>
                            <p><span class="font-bold">Product Name:</span> {{ $product->name }}</p>

                            <p><span class="font-bold">Description Name:</span> {{ $product->description }}</p>

                            <p><span class="font-bold">Price:</span> RM {{ $product->price }}</p>
                        </div>
                    </div>

                    <form method="post" action="{{ route('cart.receipt') }}">
                        @csrf

                        <div class="space-y-2">
                            <div>
                                <input type="hidden" name="id" value="{{ $product->id }}"/>
                                <input type="hidden" name="qty" value="{{ $qty }}"/>

                                <div>
                                    <label for="name" class="">Full Name</label>
                                    <input class="w-full appearance-none border p-2 rounded" type="text" name="name" id="name" placeholder="John Doe">
                                </div>

                                <div>
                                    <label for="email" class="">Email</label>
                                    <input class="w-full appearance-none border p-2 rounded" type="text" name="email" id="email" placeholder="example.test@gmail.com">
                                </div>

                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                  <select id="cars">
                                    <option value="volvo">Mastercard</option>
                                    <option value="saab">Visa</option>

                                  </select>
                                </div>

                                <div>
                                    <label for="creditcardnumber" class="">Credit Card Number</label>
                                    <input class="w-full appearance-none border p-2 rounded" type="text" name="creditcardnumber" id="creditcardnumber" placeholder="1234876543210987">
                                </div>

                                <div>
                                    <label for="ccv" class="">CCV</label>
                                    <input class="w-full appearance-none border p-2 rounded" type="text" name="ccv" id="ccv" placeholder="420">
                                </div>

                                <div>
                                    <label for="expdate" class="">Expiry Date</label>
                                    <input class="w-full appearance-none border p-2 rounded" type="text" name="expdate" id="expdate" placeholder="2018">
                                </div>

                                <div>
                                    <label for="phone" class="">Phone</label>
                                    <input class="w-full appearance-none border p-2 rounded" type="text" name="phone" id="phone">
                                </div>

                                <div>
                                    <label for="address" class="">Address</label>
                                    <textarea class="w-full appearance-none border p-2 rounded" name="address" id="address"></textarea>
                                </div>

                                <div>
                                    <label for="price" class="">Total Price</label>
                                    <input class="w-full appearance-none border p-2 rounded bg-gray-200 text-gray-600 focus:outline-none cursor-default" readonly type="text" name="price" id="price" value="RM {{ number_format($qty * $product->price, 2, '.', ',') }}">
                                </div>
                            </div>

                            <div>
                                <button type="submit" name="submit" class="w-full py-2 rounded bg-blue-200 hover:bg-blue-300 text-blue-900">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
