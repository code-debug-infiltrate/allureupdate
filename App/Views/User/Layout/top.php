<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="/Images/Logo/favicon.png"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/webfont/webfont.min.js') ?>"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["<?= public_asset('/other_assets/User/css/fonts.min.css') ?>"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/plugins.min.css') ?>" />
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/kaiadmin.min.css') ?>" />

   
  </head>
  <body>
  <div class="wrapper">