@extends('layouts.main_layout')

@section('content')
    <h1>Welcome View and Blade</h1>

    <h2>Page 3</h2>

    <h3> the value is: {{ $value }} </h3>
    {{-- <h3> the value is: <?= $value ?></h3> --}}
    {{-- <h3> the value is: <?php echo $value; ?> </h3> --}}
@endsection
