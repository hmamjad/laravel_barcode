<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel 8 Barcode Demo - codeanddeploy.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

         {{-- navbar start --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
         
         
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('create_barcode') }}">Create Barcode</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    {{-- navbar end --}}

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 offset-4 shadow p-4 bg-info">
                    <h4>Create Barcode</h4>

                    <form action="{{ route('show_barcode') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="code">Code Number</label>
                            <input type="text" name="code" placeholder="Type any number code" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="row">Row</label>
                            <input type="number" name="row" placeholder="Type any number code" class="form-control mt-2" required>
                        </div>

                        <div class="form-group">
                            <label for="col">Column</label>
                            <input type="number" name="col" placeholder="Type any number code" class="form-control mt-2" required>
                        </div>

                        <input type="submit" class="btn btn-primary mt-2">
                    </form>

                </div>
            </div>
        </div>





    </div>
</body>

</html>
