<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First web</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="bg-purple-300 text-black">
    
        <Header class="fixed bg-gray-900 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black"> Car.Info </h1>    
            
        </Header>
        <Main>
            @yield('page-content')
        </Main>
      
</body>
</html>