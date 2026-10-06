@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body class=" overflow-hiddenbg-gray-50">
     <!-- Loading Spinner -->
  
    @include('Statique.partials.nav')

    <main>
        {{$slot}}
    </main>
    
    @include('Statique.partials.footer')




    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
   
</body>
</html>