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
    <div class="container mt-5">

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">

                    <form action="{{ route('home.index') }}" method="get">
                        <div class="form-group">
                            <label for="code">Typer any number code</label>
                            <input type="text" name="code" placeholder="Type any number code">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>




        <div class="container mt-4">

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" style="width: 100%;"  style="overflow-x: auto;">
                       
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                        </tr>
        
        
        
        
        
                        @for ($row = 1; $row <= 10; $row++)
                            <tr>
                                @for ($col = 1; $col <= 10; $col++)
                                    <td>{!! DNS1D::getBarcodeHTML("$productCode", 'C39+') !!}</td>
                                @endfor
                            </tr>
                        @endfor
        
        
        
        
                    </table>
                </div>
            </div>

            

            {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML("$productCode", 'QRCODE') !!}</div>
            <div class="mb-3">{!! DNS2D::getBarcodeHTML("$productCode", 'DATAMATRIX') !!}</div>

            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C39') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C39+') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C39E') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C39E+') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C93') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'S25') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'S25+') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'I25') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'I25+') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C128') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C128A') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML("$productCode", 'C128B') !!}</div> --}}
        </div>


    </div>
</body>

</html>
