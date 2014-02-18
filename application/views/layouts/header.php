<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=50, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Unmark<?php if (! isset($_SESSION['logged_in'])) { echo ': Save your links for later.'; } ?></title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Merriweather:400,300,300italic,400italic,700,700italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/unmark.css" />
    <link rel="icon" type="image/ico" href="/favicon.ico" />
    <script src="/assets/js/plugins/modernizr-2.7.1.min.js"></script>
    <script>
        /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
        window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
        grunticon( [ "/assets/css/icons.data.svg.css", "/assets/css/icons.data.png.css", "/assets/css/icons.fallback.css" ] );
    </script>
    <noscript><link href="/assets/css/icons.fallback.css" rel="stylesheet"></noscript>
</head>

<?php if (isset($active_label)) : ?>
<body id="unmark" class="label-<?php print $active_label['label_id']; ?>" data-lookup="<?php print $lookup_type; ?>">
<?php else : ?>
<body id="unmark" data-lookup="<?php print $lookup_type; ?>">
<?php endif; ?>
    
    <div id="unmark-wrapper">

    <?php $this->load->view('layouts/navigation'); ?>

    <div class="main-wrapper">
        <div class="inner-wrapper">
            <div class="main-content">