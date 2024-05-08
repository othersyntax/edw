<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            @php
            $nama = "USUP";
            @endphp
            <?php 
                $bapa = "Keram"; 
            ?>
            <div class="text-center">
                <h1>Nama saya {{ $nama }} bin <?php echo $bapa; ?></h1>
                <p>Selamat datang</p>
                <p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Macaca_nigra_self-portrait_large.jpg" class="img-fluid" alt="Monyet" width="50%" height="50%">
                </p>
            </div>
        </div>

        <h1 class="h3 mb-4 text-gray-800">Main Page</h1>
  </body>
</html>