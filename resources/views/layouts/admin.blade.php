<html lang="en"><head>
<!— Required meta tags —>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png">
<!--plugins-->
<link href="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
<link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
<link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
<link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
<!— Bootstrap CSS —>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/bootstrap-extended.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<link href="/assets/css/icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


<!— loader-->
<link href="/assets/css/pace.min.css" rel="stylesheet">

<!--Theme Styles-->
<link href="/assets/css/dark-theme.css" rel="stylesheet">
<link href="/assets/css/light-theme.css" rel="stylesheet">
<link href="/assets/css/semi-dark.css" rel="stylesheet">
<link href="/assets/css/header-colors.css" rel="stylesheet">

<title>Onedash - Bootstrap 5 Admin Template</title>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">.apexcharts-canvas {
position: relative;
user-select: none;
/* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
-webkit-appearance: none;
width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
border-radius: 4px;
background-color: rgba(0, 0, 0, .5);
box-shadow: 0 0 1px rgba(255, 255, 255, .5);
-webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}

.apexcharts-canvas.apexcharts-theme-dark {
background: #424242;
}

.apexcharts-inner {
position: relative;
}

.apexcharts-text tspan {
font-family: inherit;
}

.legend-mouseover-inactive {
transition: 0.15s ease all;
opacity: 0.20;
}

.apexcharts-series-collapsed {
opacity: 0;
}

.apexcharts-tooltip {
border-radius: 5px;
box-shadow: 2px 2px 6px -4px #999;
cursor: default;
font-size: 14px;
left: 62px;
opacity: 0;
pointer-events: none;
position: absolute;
top: 20px;
overflow: hidden;
white-space: nowrap;
z-index: 12;
transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
opacity: 1;
transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
border: 1px solid #e3e3e3;
background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
color: #fff;
background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
font-family: inherit;
}


.apexcharts-tooltip-title {
padding: 6px;
font-size: 15px;
margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
background: #ECEFF1;
border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
background: rgba(0, 0, 0, 0.7);
border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
display: inline-block;
font-weight: 600;
margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
font-weight: 600;
}

.apexcharts-tooltip-marker {
width: 12px;
height: 12px;
position: relative;
top: 0px;
margin-right: 10px;
border-radius: 50%;
}

.apexcharts-tooltip-series-group {
padding: 0 10px;
display: none;
text-align: left;
justify-content: left;
align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
opacity: 0;
height: 0;
line-height: 0;
padding: 0 !important;
}

.apexcharts-tooltip-y-group {
padding: 6px 0 5px;
}

.apexcharts-tooltip-candlestick {
padding: 4px 8px;
}

.apexcharts-tooltip-candlestick>div {
margin: 4px 0;
}

.apexcharts-tooltip-candlestick span.value {
font-weight: bold;
}

.apexcharts-tooltip-rangebar {
padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
font-weight: 600;
color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
font-weight: bold;
display: block;
margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
opacity: 0;
padding: 9px 10px;
pointer-events: none;
color: #373d3f;
font-size: 13px;
text-align: center;
border-radius: 2px;
position: absolute;
z-index: 10;
background: #ECEFF1;
border: 1px solid #90A4AE;
transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
background: rgba(0, 0, 0, 0.7);
border: 1px solid rgba(0, 0, 0, 0.5);
color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
left: 50%;
border: solid transparent;
content: " ";
height: 0;
width: 0;
position: absolute;
pointer-events: none;
}

.apexcharts-xaxistooltip:after {
border-color: rgba(236, 239, 241, 0);
border-width: 6px;
margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
border-color: rgba(144, 164, 174, 0);
border-width: 7px;
margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
opacity: 1;
transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
opacity: 0;
padding: 4px 10px;
pointer-events: none;
color: #373d3f;
font-size: 13px;
text-align: center;
border-radius: 2px;
position: absolute;
z-index: 10;
background: #ECEFF1;
border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
background: rgba(0, 0, 0, 0.7);
border: 1px solid rgba(0, 0, 0, 0.5);
color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
top: 50%;
border: solid transparent;
content: " ";
height: 0;
width: 0;
position: absolute;
pointer-events: none;
}

.apexcharts-yaxistooltip:after {
border-color: rgba(236, 239, 241, 0);
border-width: 6px;
margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
border-color: rgba(144, 164, 174, 0);
border-width: 7px;
margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
right: 100%;
}

.apexcharts-yaxistooltip-left:after {
border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
pointer-events: none;
opacity: 0;
transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
opacity: 1;
transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
opacity: 0;
}

.apexcharts-selection-rect {
cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
pointer-events: none;
opacity: 0;
visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
opacity: 0;
visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
cursor: ew-resize;
opacity: 1;
visibility: visible;
}

.svg_select_points {
fill: #efefef;
stroke: #333;
rx: 2;
}

.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
cursor: crosshair
}

.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
cursor: pointer;
width: 20px;
height: 20px;
line-height: 24px;
color: #6E8192;
text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
fill: #6E8192;
}

.apexcharts-selection-icon svg {
fill: #444;
transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
position: relative;
}

.apexcharts-reset-icon {
margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
transform: scale(0.7)
}

.apexcharts-zoomout-icon {
margin-right: 3px;
}

.apexcharts-pan-icon {
transform: scale(0.62);
position: relative;
left: 1px;
top: 0px;
}

.apexcharts-pan-icon svg {
fill: #fff;
stroke: #6E8192;
stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
stroke: #333;
}

.apexcharts-toolbar {
position: absolute;
z-index: 11;
max-width: 176px;
text-align: right;
border-radius: 3px;
padding: 0px 6px 2px 6px;
display: flex;
justify-content: space-between;
align-items: center;
}

.apexcharts-menu {
background: #fff;
position: absolute;
top: 100%;
border: 1px solid #ddd;
border-radius: 3px;
padding: 3px;
right: 10px;
opacity: 0;
min-width: 110px;
transition: 0.15s ease all;
pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
opacity: 1;
pointer-events: all;
transition: 0.15s ease all;
}

.apexcharts-menu-item {
padding: 6px 7px;
font-size: 12px;
cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
background: rgba(0, 0, 0, 0.7);
color: #fff;
}

@media screen and (min-width: 768px) {
.apexcharts-canvas:hover .apexcharts-toolbar {
opacity: 1;
}
}

.apexcharts-datalabel.apexcharts-element-hidden {
opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
cursor: default;
pointer-events: none;
}

.apexcharts-pie-label-delay {
opacity: 0;
animation-name: opaque;
animation-duration: 0.3s;
animation-fill-mode: forwards;
animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
pointer-events: none;
}


/* markers */

.apexcharts-marker {
transition: 0.15s ease all;
}

@keyframes opaque {
0% {
opacity: 0;
}
100% {
opacity: 1;
}
}


/* Resize generated styles */

@keyframes resizeanim {
from {
opacity: 0;
}
to {
opacity: 0;
}
}

.resize-triggers {
animation: 1ms resizeanim;
visibility: hidden;
opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
content: " ";
display: block;
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
overflow: hidden;
}

.resize-triggers>div {
background: #eee;
overflow: auto;
}

.contract-trigger:before {
width: 200%;
height: 200%;
}</style></head>

<body class=" pace-done"><div class="pace pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
<div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>


<!--start wrapper-->
<div class="wrapper">
<!--start top header-->
<header class="top-header">
<nav class="navbar navbar-expand gap-3">
<div class="mobile-toggle-icon fs-3">
<i class="bi bi-list"></i>
</div>
<form class="searchbar">
<div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
<input class="form-control" type="text" placeholder="Type here to search">
<div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
</form>
<div class="top-navbar-right ms-auto">
<ul class="navbar-nav align-items-center">
<li class="nav-item search-toggle-icon">
<a class="nav-link" href="#">
<div class="">
<i class="bi bi-search"></i>
</div>
</a>
</li>
<li class="nav-item dropdown dropdown-user-setting">
<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
<div
class="user-setting d-flex align-items-center">
<img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
</div>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
<div class="ms-3">
<h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
<small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
</div>
</div>
</a>
</li>
<li><hr class="dropdown-divider"></li>
<li>
<a class="dropdown-item" href="pages-user-profile.html">
<div class="d-flex align-items-center">
<div class=""><i class="bi bi-person-fill"></i></div>
<div class="ms-3"><span>Profile</span></div>
</div>
</a>
</li>
<li>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class=""><i class="bi bi-gear-fill"></i></div>
<div class="ms-3"><span>Setting</span></div>
</div>
</a>
</li>
<li>
<a class="dropdown-item" href="index2.html">
<div class="d-flex align-items-center">
<div class=""><i class="bi bi-speedometer"></i></div>
<div class="ms-3"><span>Dashboard</span></div>
</div>
</a>
</li>
<li>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class=""><i class="bi bi-piggy-bank-fill"></i></div>
<div class="ms-3"><span>Earnings</span></div>
</div>
</a>
</li>
<li>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>
<div class="ms-3"><span>Downloads</span></div>
</div>
</a>
</li>
<li><hr class="dropdown-divider"></li>
<li>
<a class="dropdown-item" href="/admin/logout">
<div class="d-flex align-items-center">
<div class=""><i class="bi bi-lock-fill"></i></div>
<div class="ms-3"><span>Logout</span></div>
</div>
</a>
</li>
</ul>
</li>
<li class="nav-item dropdown dropdown-large">
<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
<div class="projects">
<i class="bi bi-grid-3x3-gap-fill"></i>
</div>
</a>
<div class="dropdown-menu dropdown-menu-end">
<div class="row row-cols-3 gx-2">
<div class="col">
<a href="ecommerce-orders.html">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-purple">
<i class="bi bi-basket2-fill"></i>
</div>
<p class="mb-0 apps-name">Orders</p>
</div>
</a>
</div>
<div class="col">
<a href="javascript:;">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-info">
<i class="bi bi-people-fill"></i>
</div>
<p class="mb-0 apps-name">Users</p>
</div>
</a>
</div>
<div class="col">
<a href="ecommerce-products-grid.html">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-success">
<i class="bi bi-trophy-fill"></i>
</div>
<p class="mb-0 apps-name">Products</p>
</div>
</a>
</div>
<div class="col">
<a href="component-media-object.html">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-danger">
<i class="bi bi-collection-play-fill"></i>
</div>
<p class="mb-0 apps-name">Media</p>
</div>
</a>
</div>
<div class="col">
<a href="pages-user-profile.html">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-warning">
<i class="bi bi-person-circle"></i>
</div>
<p class="mb-0 apps-name">Account</p>
</div>
</a>
</div>
<div class="col">
<a href="javascript:;">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
<i class="bi bi-file-earmark-text-fill"></i>
</div>
<p class="mb-0 apps-name">Docs</p>
</div>
</a>
</div>
<div class="col">
<a href="ecommerce-orders-detail.html">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-branding">
<i class="bi bi-credit-card-fill"></i>
</div>
<p class="mb-0 apps-name">Payment</p>
</div>
</a>
</div>
<div class="col">
<a href="javascript:;">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-desert">
<i class="bi bi-calendar-check-fill"></i>
</div>
<p class="mb-0 apps-name">Events</p>
</div>
</a>
</div>
<div class="col">
<a href="javascript:;">
<div class="apps p-2 radius-10 text-center">
<div class="apps-icon-box mb-1 text-white bg-gradient-amour">
<i class="bi bi-book-half"></i>
</div>
<p class="mb-0 apps-name">Story</p>
</div>
</a>
</div>
</div><!--end row-->
</div>
</li>
<li class="nav-item dropdown dropdown-large">
<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
<div class="messages">
<span class="notify-badge">5</span>
<i class="bi bi-chat-right-fill"></i>
</div>
</a>
<div class="dropdown-menu dropdown-menu-end p-0">
<div class="p-2 border-bottom m-2">
<h5 class="h5 mb-0">Messages</h5>
</div>
<div class="header-message-list p-2 ps">
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-4.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span class="msg-time float-end text-secondary">3 h</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It was popularised in the 1960</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-5.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span class="msg-time float-end text-secondary">1 d</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If you are going to use a passage</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-6.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span class="msg-time float-end text-secondary">2 w</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All the Lorem Ipsum generators</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div
class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
</div>
</div>
</a>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
<div class="p-2">
<div><hr class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<div class="text-center">View All Messages</div>
</a>
</div>
</div>
</li>
<li class="nav-item dropdown dropdown-large">
<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
<div class="notifications">
<span class="notify-badge">8</span>
<i class="bi bi-bell-fill"></i>
</div>
</a>
<div class="dropdown-menu dropdown-menu-end p-0">
<div class="p-2 border-bottom m-2">
<h5 class="h5 mb-0">Notifications</h5>
</div>
<div class="header-notifications-list p-2 ps">
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-orange text-orange"><i class="bi bi-collection-play-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Time Response <span class="msg-time float-end text-secondary">3 h</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary
d-flex align-items-center">5.1 min avarage time response</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-info text-info"><i class="bi bi-cursor-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">New Product Approved <span class="msg-time float-end text-secondary">1 d</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your new product has approved</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-pink text-pink"><i class="bi bi-gift-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">New Comments <span class="msg-time float-end text-secondary">2 w</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New customer comments recived</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-warning text-warning"><i class="bi bi-droplet-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">New 24 authors<span class="msg-time float-end text-secondary">1 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 new authors joined last week</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Your item is shipped <span class="msg-time float-end text-secondary">7 m</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-success text-success"><i class="bi bi-lightbulb-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">Defense Alerts <span class="msg-time float-end text-secondary">2 h</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45% less alerts last 4 weeks</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-info text-info"><i class="bi bi-bookmark-heart-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span class="msg-time float-end text-secondary">2 w</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New 4 user registartions</small>
</div>
</div>
</a>
<a class="dropdown-item" href="#">
<div class="d-flex align-items-center">
<div class="notification-box bg-light-bronze text-bronze"><i class="bi bi-briefcase-fill"></i></div>
<div class="ms-3 flex-grow-1">
<h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
<small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
</div>
</div>
</a>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
<div class="p-2">
<div><hr class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<div class="text-center">View All Notifications</div>
</a>
</div>
</div>
</li>
</ul>
</div>
</nav>
</header>
<!--end top header-->

<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div
class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content mm-active" style="padding: 0px;">
<div class="sidebar-header">
<div>
<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
</div>
<div>
<h4 class="logo-text">Onedash</h4>
</div>
<div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
</div>
</div>
<!--navigation-->
<ul class="metismenu mm-show" id="menu">
<li class="mm-active">
<a href="javascript:;" class="has-arrow" aria-expanded="true">
<div class="parent-icon"><i class="bi bi-house-fill"></i>
</div>
<div class="menu-title">Dashboard</div>
</a>
<ul class="mm-show mm-collapse">
<li class="mm-active"> <a href="index.html" aria-expanded="true"><i class="bi bi-circle"></i>Blue Dashboard</a>
</li>
<li> <a href="index2.html"><i class="bi bi-circle"></i>Color Dashboard</a>
</li>
</ul>
</li>
<li>
<a href="javascript:;" class="has-arrow">
<div class="parent-icon"><i class="bi bi-grid-fill"></i>
</div>
<div class="menu-title">Application</div>
</a>
<ul class="mm-collapse">
<li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Email</a>
</li>
<li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Chat Box</a>
</li>
<li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>File Manager</a>
</li>
<li> <a href="app-to-do.html"><i class="bi bi-circle"></i>Todo List</a>
</li>
<li> <a href="app-invoice.html"><i class="bi bi-circle"></i>Invoice</a>
</li>
<li> <a href="app-fullcalender.html"><i class="bi bi-circle"></i>Calendar</a>
</li>
</ul>
</li>
<li class="menu-label">UI Elements</li>
<li>
<a href="javascript:;" class="has-arrow">
<div class="parent-icon"><i class="bi bi-droplet-fill"></i>
</div>
<div class="menu-title">Widgets</div>
</a>
<ul class="mm-collapse">
<li> <a href="widgets-static-widgets.html"><i class="bi bi-circle"></i>Static Widgets</a>
</li>
<li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Data Widgets</a>
</li>
</ul>
</li>
<li>
<a href="javascript:;" class="has-arrow">
<div class="parent-icon"><i class="bi bi-basket2-fill"></i>
</div>
<div class="menu-title">eCommerce</div>
</a>
<ul class="mm-collapse">
<li> <a href="{{route('adminListProducts')}}"><i class="bi bi-circle"></i>Products List</a>
</li>
<li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Products Grid</a>
</li>
<li> <a href="{{route('adminCategories')}}"><i class="bi bi-circle"></i>Categories</a>
</li>
<li> <a href="ecommerce-orders.html"><i class="bi bi-circle"></i>Orders</a>
</li>
<li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Order details</a>
</li>
<li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add New Product</a>
</li>
<li> <a href="{{route('adminAddProducts')}}"><i class="bi bi-circle"></i>Add New Product 2</a>
</li>
<li> <a href="ecommerce-transactions.html"><i class="bi bi-circle"></i>Transactions</a>
</li>
</ul>
</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-award-fill"></i>
</div>
<div class="menu-title">Components</div>
</a>
<ul class="mm-collapse">
<li> <a href="component-alerts.html"><i class="bi bi-circle"></i>Alerts</a>
</li>
<li> <a href="component-accordions.html"><i class="bi bi-circle"></i>Accordions</a>
</li>
<li> <a href="component-badges.html"><i class="bi bi-circle"></i>Badges</a>
</li>
<li> <a href="component-buttons.html"><i class="bi bi-circle"></i>Buttons</a>
</li>
<li> <a href="component-cards.html"><i class="bi bi-circle"></i>Cards</a>
</li>
<li> <a href="component-carousels.html"><i class="bi bi-circle"></i>Carousels</a>
</li>
<li> <a href="component-list-groups.html"><i
class="bi bi-circle"></i>List Groups</a>
</li>
<li> <a href="component-media-object.html"><i class="bi bi-circle"></i>Media Objects</a>
</li>
<li> <a href="component-modals.html"><i class="bi bi-circle"></i>Modals</a>
</li>
<li> <a href="component-navs-tabs.html"><i class="bi bi-circle"></i>Navs &amp; Tabs</a>
</li>
<li> <a href="component-navbar.html"><i class="bi bi-circle"></i>Navbar</a>
</li>
<li> <a href="component-paginations.html"><i class="bi bi-circle"></i>Pagination</a>
</li>
<li> <a href="component-popovers-tooltips.html"><i class="bi bi-circle"></i>Popovers &amp; Tooltips</a>
</li>
<li> <a href="component-progress-bars.html"><i class="bi bi-circle"></i>Progress</a>
</li>
<li> <a href="component-spinners.html"><i class="bi bi-circle"></i>Spinners</a>
</li>
<li> <a href="component-notifications.html"><i class="bi bi-circle"></i>Notifications</a>
</li>
<li> <a href="component-avtars-chips.html"><i class="bi bi-circle"></i>Avatrs &amp; Chips</a>
</li>
</ul>
</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
</div>
<div class="menu-title">Icons</div>
</a>
<ul class="mm-collapse">
<li> <a href="icons-line-icons.html"><i class="bi bi-circle"></i>Line Icons</a>
</li>
<li> <a href="icons-boxicons.html"><i class="bi bi-circle"></i>Boxicons</a>
</li>
<li> <a href="icons-feather-icons.html"><i class="bi bi-circle"></i>Feather Icons</a>
</li>
</ul>
</li>
<li class="menu-label">Forms &amp; Tables</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
</div>
<div class="menu-title">Forms</div>
</a>
<ul class="mm-collapse">
<li> <a href="form-elements.html"><i class="bi bi-circle"></i>Form Elements</a>
</li>
<li> <a href="form-input-group.html"><i class="bi bi-circle"></i>Input Groups</a>
</li>
<li> <a href="form-layouts.html"><i class="bi bi-circle"></i>Forms Layouts</a>
</li>
<li> <a href="form-validations.html"><i class="bi bi-circle"></i>Form Validation</a>
</li>
<li> <a href="form-wizard.html"><i class="bi bi-circle"></i>Form Wizard</a>
</li>
<li> <a href="form-date-time-pickes.html"><i class="bi bi-circle"></i>Date Pickers</a>
</li>
<li> <a href="form-select2.html"><i class="bi bi-circle"></i>Select2</a>
</li>
</ul>
</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
</div>
<div class="menu-title">Tables</div>
</a>
<ul class="mm-collapse">
<li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Basic Table</a>
</li>
<li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>Advance Tables</a>
</li>
<li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Data Table</a>
</li>
</ul>
</li>
<li class="menu-label">Pages</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-lock-fill"></i>
</div>
<div class="menu-title">Authentication</div>
</a>
<ul class="mm-collapse">
<li> <a href="authentication-signin.html" target="_blank"><i class="bi bi-circle"></i>Sign In</a>
</li>
<li> <a href="authentication-signup.html" target="_blank"><i class="bi bi-circle"></i>Sign Up</a>
</li>
<li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bi bi-circle"></i>Sign In with Header &amp; Footer</a>
</li>
<li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bi bi-circle"></i>Sign Up with Header &amp; Footer</a>
</li>
<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bi bi-circle"></i>Forgot Password</a>
</li>
<li> <a href="authentication-reset-password.html" target="_blank"><i class="bi bi-circle"></i>Reset Password</a>
</li>
</ul>
</li>
<li>
<a href="pages-user-profile.html">
<div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
</div>
<div
class="menu-title">User Profile</div>
</a>
</li>
<li>
<a href="pages-timeline.html">
<div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
</div>
<div class="menu-title">Timeline</div>
</a>
</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
</div>
<div class="menu-title">Errors</div>
</a>
<ul class="mm-collapse">
<li> <a href="pages-errors-404-error.html" target="_blank"><i class="bi bi-circle"></i>404 Error</a>
</li>
<li> <a href="pages-errors-500-error.html" target="_blank"><i class="bi bi-circle"></i>500 Error</a>
</li>
<li> <a href="pages-errors-coming-soon.html" target="_blank"><i class="bi bi-circle"></i>Coming Soon</a>
</li>
<li> <a href="pages-blank-page.html" target="_blank"><i class="bi bi-circle"></i>Blank Page</a>
</li>
</ul>
</li>
<li>
<a href="pages-faq.html">
<div class="parent-icon"><i class="bi bi-question-lg"></i>
</div>
<div class="menu-title">FAQ</div>
</a>
</li>
<li>
<a href="pages-pricing-tables.html">
<div class="parent-icon"><i class="bi bi-tags-fill"></i>
</div>
<div class="menu-title">Pricing Tables</div>
</a>
</li>
<li class="menu-label">Charts &amp; Maps</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
</div>
<div class="menu-title">Charts</div>
</a>
<ul class="mm-collapse">
<li> <a href="charts-apex-chart.html"><i class="bi bi-circle"></i>Apex</a>
</li>
<li> <a href="charts-chartjs.html"><i class="bi bi-circle"></i>Chartjs</a>
</li>
<li> <a href="charts-highcharts.html"><i class="bi bi-circle"></i>Highcharts</a>
</li>
</ul>
</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-pin-map-fill"></i>
</div>
<div class="menu-title">Maps</div>
</a>
<ul class="mm-collapse">
<li> <a href="map-google-maps.html"><i class="bi bi-circle"></i>Google Maps</a>
</li>
<li> <a href="map-vector-maps.html"><i class="bi bi-circle"></i>Vector Maps</a>
</li>
</ul>
</li>
<li class="menu-label">Others</li>
<li>
<a class="has-arrow" href="javascript:;">
<div class="parent-icon"><i class="bi bi-music-note-list"></i>
</div>
<div class="menu-title">Menu Levels</div>
</a>
<ul class="mm-collapse">
<li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
<ul class="mm-collapse">
<li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level Two</a>
<ul class="mm-collapse">
<li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
<div class="parent-icon"><i class="bi bi-file-code-fill"></i>
</div>
<div class="menu-title">Documentation</div>
</a>
</li>
<li>
<a href="https://themeforest.net/user/codervent" target="_blank">
<div class="parent-icon"><i class="bi bi-telephone-fill"></i>
</div>
<div class="menu-title">Support</div>
</a>
</li>
</ul>
<!--end navigation-->
</div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1314px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 714px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></aside>
<!--end sidebar -->

@yield('content')

<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
<!--End Back To Top Button-->

<!--start switcher-->
<div class="switcher-body">
<button class="btn btn-primary btn-switcher shadow-sm"
type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
<div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
<div class="offcanvas-header border-bottom">
<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
</div>
<div class="offcanvas-body">
<h6 class="mb-0">Theme Variation</h6>
<hr>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked="">
<label class="form-check-label" for="LightTheme">Light</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
<label class="form-check-label" for="DarkTheme">Dark</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
<label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
</div>
<hr>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
<label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
</div>
<hr>
<h6 class="mb-0">Header Colors</h6>
<hr>
<div class="header-colors-indigators">
<div class="row row-cols-auto g-3">
<div class="col">
<div class="indigator headercolor1" id="headercolor1"></div>
</div>
<div class="col">
<div class="indigator headercolor2" id="headercolor2"></div>
</div>
<div class="col">
<div class="indigator headercolor3" id="headercolor3"></div>
</div>
<div class="col">
<div class="indigator headercolor4" id="headercolor4"></div>
</div>
<div class="col">
<div class="indigator headercolor5" id="headercolor5"></div>
</div>
<div class="col">
<div class="indigator headercolor6" id="headercolor6"></div>
</div>
<div class="col">
<div class="indigator headercolor7" id="headercolor7"></div>
</div>
<div class="col">
<div class="indigator headercolor8" id="headercolor8"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--end switcher-->

</div>
<!--end wrapper-->


<!— Bootstrap bundle JS —>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/assets/js/pace.min.js"></script>
<script src="/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="/assets/js/app.js"></script>
<script src="/assets/js/index.js"></script>
<script>
new PerfectScrollbar(".best-product")
</script>




<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline>
<path id="SvgjsPath1004" d="M-1 55L-1 55C-1 55 40.90909090909091 55 40.90909090909091 55C40.90909090909091 55 81.81818181818181 55 81.81818181818181 55C81.81818181818181 55 122.72727272727272 55 122.72727272727272 55C122.72727272727272
XLink namespace
www.w3.org
55 163.63636363636363 55 163.63636363636363 55C163.63636363636363 55 204.54545454545453 55 204.54545454545453 55C204.54545454545453 55 245.45454545454544 55 245.45454545454544 55C245.45454545454544 55 286.3636363636364 55 286.3636363636364 55C286.3636363636364 55 327.27272727272725 55 327.27272727272725 55C327.27272727272725 55 368.1818181818182 55 368.1818181818182 55C368.1818181818182 55 409.09090909090907 55 409.09090909090907 55C409.09090909090907 55 450 55 450 55C450 55 450 55 450 55 "></path></svg><div class="jvectormap-tip"></div></body></html>
