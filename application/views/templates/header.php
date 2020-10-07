<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/header.css">

    <!-- My Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

    <!-- Js tanggal -->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="datepicker/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="datepicker/datepicker.css">
    
    <title><?= $judul; ?></title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container">
            <a class="navbar-brand" href="#"><h4>Klinik SayangIbu</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mr-3 menu" href="<?= base_url();?>home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link mr-3 menu" href="<?= base_url('pasien');?>">Pasien</a>
                    <a class="nav-link mr-3 menu" href="<?= base_url();?>jadwal">Dokter</a>
                    <a class="nav-link mr-3 menu" href="<?= base_url();?>obat">Obat</a>
                    <a class="nav-link mr-3 menu logout" href="<?= base_url('login/logout');?>" style="margin-left:14px;">Log Out</a>
                </div>
            </div>
            </div>
        </nav>


      