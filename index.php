<?php
include "koneksi.php";
$koneksi = new Koneksi();
$h = $koneksi->connect();

$a;
if(isset($_GET['page'])){
  if ($_GET['page']=="tambahdata") {
    $a = 1;
  }else if ($_GET['page']=="tampildata") {
    $a = 1;
  }else if ($_GET['page']=="setting") {
    $a = 2;
  }
}else{
  $a = 0;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/concept/style.css">
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
  <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
  <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Skripsi</title>
</head>
<body>
  <div class="dashboard-main-wrapper">
    <div class="dashboard-header">
      <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
    <div class="nav-left-sidebar sidebar-dark">
      <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
              <li class="nav-divider">
                Menu
                <li class="nav-item ">
                  <a class="nav-link <?php if($a == 1) echo 'active'; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-database"></i>Data<span class="badge badge-success">1</span></a>
                  <div id="submenu-1" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?page=tambahdata">Tambah Data</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?page=tampildata">Tampil Data</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="dashboard-wrapper">
        <div style="min-height:88vh">
          <?php
          if(isset($_GET['page'])){
            if ($_GET['page']=="tambahdata") {
              include 'views/tambahdata.php';
            }else if ($_GET['page']=="tampildata") {
              include 'views/tampildata.php';
            }else if ($_GET['page']=="setting") {
              include 'views/setting.php';
            }else if ($_GET['page']=="logout") {
            }
          }else{
            include 'welcome.php';
          }
          ?>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2021 Admin.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/js/concept/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/js/concept/dashboard-ecommerce.js"></script>
    <script src="assets/js/style.js"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
    <script>
      function deleteFoto(url){
        var x = confirm("Apakah Anda ingin menghapus foto ini?");
        if(x){
          window.location.href = url;
        }
      }
    </script>
  </body>
  </html> 

  <script>
    CKEDITOR.replace( 'editor1', {
      // Define the toolbar: http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_toolbar
      // The standard preset from CDN which we used as a base provides more features than we need.
      // Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
      toolbar: [
      { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
      { name: 'styles', items: [ 'Styles', 'Format' ] },
      { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
      { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
      { name: 'links', items: [ 'Link', 'Unlink' ] },
      { name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
      { name: 'tools', items: [ 'Maximize' ] },
      { name: 'editing', items: [ 'Scayt' ] }
      ],
      customConfig: '',
      removePlugins: 'image',
      height: 300,
      contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/standard-all/contents.css', 'mystyles.css' ],
      bodyClass: 'article-editor',
      format_tags: 'p;h1;h2;h3;pre',
      removeDialogTabs: 'image:advanced;link:advanced',
      stylesSet: [
      /* Inline Styles */
      { name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },
      { name: 'Cited Work',		element: 'cite' },
      { name: 'Inline Quotation',	element: 'q' },
      /* Object Styles */
      {
        name: 'Special Container',
        element: 'div',
        styles: {
          padding: '5px 10px',
          background: '#eee',
          border: '1px solid #ccc'
        }
      },
      {
        name: 'Compact table',
        element: 'table',
        attributes: {
          cellpadding: '5',
          cellspacing: '0',
          border: '1',
          bordercolor: '#ccc'
        },
        styles: {
          'border-collapse': 'collapse'
        }
      },
      { name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
      { name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },
      /* Widget Styles */
      // We use this one to style the brownie picture.
      { name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
      // Media embed
      { name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
      { name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
      { name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
      { name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
      { name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
      ]
    } );
  </script>
