<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;




}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.end {
  padding: 50px;
  text-align: center;

}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

  <nav class="fixed inset-x-0 top-0 h-10">
      <div class="w-full max-w-screen-lg mx-auto flex justify-between items-center h-full px-4 bg-white">
          <div class="">
            <a href= >SECONDSKIN &emsp;</a>
              <a href="{{ route('productList') }}" class="text-blue-600 hover:text-blue-800 hover:underline">Home &emsp;</a>
              <a href="http://127.0.0.1:8000/aboutus" class="text-blue-600 hover:text-blue-800 hover:underline">About&emsp;</a>
              <a href="http://127.0.0.1:8000/contactus" class="text-blue-600 hover:text-blue-800 hover:underline">Contact Us &emsp;</a>

          </div>
      </div>
  </nav>

<div class="about-section">
  <h1>What is Second Skin</h1>
  <p>Second Skin is not merely a name, but a meaning to the outer layer of our fleshy skin: Clothes!.</p>
  <p>We have provided many men with fashionable yet comfortable clothes in Malaysia.</p>
</div>

<h2 style="text-align:center">Preview</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="\images\AcintonSkyBlue.jpeg" alt="Jane" style="width:100%">
      <div class="container">

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
<img src="\images\CelioCyan.jpeg" alt="Jane" style="width:100%">
      <div class="container">

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="\images\PreSolidDenim.jpeg" alt="Jane" style="width:100%">
      <div class="container">

      </div>
    </div>
  </div>

</div>

<div class="end">
<a href="{{ route('productList') }}" class="text-blue-600 hover:text-blue-800 hover:underline">Back To Main Page</a>
</div>


</body>
</html>
