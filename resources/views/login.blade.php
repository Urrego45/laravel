<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- ESTILO --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="off">
                            @csrf
                            <div class="form-group m-2">
                                <label for="email">Correo</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group m-2">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            @error('message')
                                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-p2"></p> 
                            @enderror

                            

                            <center>
                                <button type="submit" id="sendlogin" class="btn btn-primary">ingresar</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>