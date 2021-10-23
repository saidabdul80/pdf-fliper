
<?php

if (empty($_COOKIE['mycookiexyz123'])) {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0, max-age=0');
}else{
    if($_COOKIE[''] ===  date('Y-m-d')){

    }else{
        $_COOKIE['mycookiexyz123'] = date('Y-m-d');
        header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0, max-age=0');
    }
}
?>

@extends('layouts.app')

@section('content')
<v-pdflipper></v-pdflipper>
@endsection