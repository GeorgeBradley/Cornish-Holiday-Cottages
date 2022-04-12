<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Recently added --}}
    <link
      class="jsbin"
      href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
      rel="stylesheet"
      type="text/css"
    />
    <script
      class="jsbin"
      src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
    ></script>
    <script
      class="jsbin"
      src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"
    ></script>
    {{-- End of recently added --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

   @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    
    <script src="{{ asset('js/app.js') }}"> </script>
    {{-- <div class="image-thumbnail-preview">
        <img id="property-thumbnail-preview" src="" alt="">
    </div> --}}
    <script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {

      $('.image-thumbnail-preview').removeClass("hidden");
      $('#property-thumbnail-preview').attr('src', e.target.result);

    };

    reader.readAsDataURL(input.files[0]);
  }
}

    </script>
</body>
</html>