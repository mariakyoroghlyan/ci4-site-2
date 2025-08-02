<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="/admin_css/admin.css">

</head>
<body>
<div class="container-fluid">

    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal show border-end">
                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100 bg-dark">
                    <a href="/admin/dashboard" class="list-group-item border-end-0 d-inline-block text-truncate text-white bg-dark"><span>Dashboard</span></a>
                    <a href="/admin/gallery" class="list-group-item border-end-0 d-inline-block text-truncate text-white bg-dark"> <span>Gallery</span></a>
                    <a href="/admin/projects_lists" class="list-group-item border-end-0 d-inline-block text-truncate text-white bg-dark"><span>Projects</span></a>
                    <a href="/admin/awards_lists" class="list-group-item border-end-0 d-inline-block text-truncate text-white bg-dark"><span>Awards and Media</span></a>
                </div>
            </div>
        </div>
        <main class="col ps-md-2 pt-2">