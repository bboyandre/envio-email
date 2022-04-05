<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Daily M3</title>
    </head>
    <body>
        {{-- <header class="container">

        </header> --}}
        <section class="container">
            <form class="row justify-content-center align-itens-center" action="/leads" method="POST">
                <input type="hidden" value={`${csrf}`} name="_token" />
                <div class="col-12 col-md-8 p-3 mt-5 border rounded">
                    <h1 class="text-center">
                        Daily M3
                    </h1>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <input type="text" class="form-control" id="staticEmail" name="nome" placeholder="Cód. Tarefa" required>
                            <i class="fa-solid fa-circle-plus"></i>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <input type="text" class="form-control" id="staticEmail" name="nome" placeholder="Título" required>
                            <i class="fa-solid fa-circle-plus"></i>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <label class="form-label" for="status">Status da tarefa</label>
                            <select name="" id="">
                                <option value="pend">Pendente</option>
                                <option value="conc">Concluída</option>
                                <option value="start">A Iniciar</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <label for="validationTextarea" class="form-label">Comentários</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Tarefas" name="tarefas" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center align-itens-center">
                        <div class="col-12 col-md-10">
                            <button type="submit" class="col-12 btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>
