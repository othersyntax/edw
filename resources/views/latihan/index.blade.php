@extends('layouts.master')

@section('content')
    @php
    $nama = "Monyet";
    $bapa = "Beruk"; 
    @endphp
        
    <div class="text-center">
        <h1>Nama saya {{ $nama }} bin <?php echo $bapa; ?></h1>
        <p>Selamat datang</p>
        <p>
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Macaca_nigra_self-portrait_large.jpg" class="img-fluid" alt="Monyet" width="50%" height="50%">
        </p>
    </div>
    
@endsection