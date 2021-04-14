<!doctype html>
<html lang="en">
<style>
    head {
        background-color: deeppink;
    }
</style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Offline Version -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/homestyle.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/aboutstyle.css">
  
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/office-building.png">

    <title><?= $judul; ?></title>
</head>

<style>
    
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Simple List</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                    <a class="nav-link" href="<?= base_url(); ?>university">University</a>
                </div>
            </div>
        </div>
    </nav>