<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Daily M3</title>
    </head>
    <body>
        <header class="container">
            
        </header>
        <section class="container">
            <div class="row justify-content-center align-itens-center">
                <div class="col-12 col-md-8 p-3 mt-5 border rounded">
                    <h1 class="text-center">
                        Login
                    </h1>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <input type="text" class="form-control" id="staticEmail" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <input type="button" class="col-12 btn btn-primary" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>