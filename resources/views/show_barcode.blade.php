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
            <div class="col-md-12">
                <table class="table" style="overflow-x: auto;">

                    {{-- <tr>
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
                        </tr> --}}

                    @for ($i = 1; $i <= $row; $i++)
                        <tr>
                            @for ($j = 1; $j <= $col; $j++)
                                {{-- <td>{!! DNS1D::getBarcodeHTML("$code", 'C39') !!} </td> --}}
                                <td>{!! DNS2D::getBarcodeHTML("$code", 'QRCODE') !!}</td>
                            @endfor
                        </tr>
                    @endfor
                </table>
                <!-- Print Button -->
                <button onclick="printTable()">Print Table</button>
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



     <!-- JavaScript to Trigger Print Dialog -->
     <script>
        function printTable() {
            window.print();
        }
    </script>
</body>

</html>
