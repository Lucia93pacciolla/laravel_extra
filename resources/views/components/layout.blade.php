<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$layout}}</title> 
    <link rel="shortcut icon" href={{$icon}} type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    
    <x-navbar />
    

    
    <x-header header="{{$header}}"/>
    
    
    
    
    <section class="min-vh-100">
        {{$slot}}
    </section>
 
    


    <x-footer />
</body>
</html>