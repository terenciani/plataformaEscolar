  <?php
    include_once("includes/head.php");
  ?>
<style type="text/css">
	/*Google Fonts*/
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i");
/*Modify Chart Colors Hack*/
.chart, .easypiechart {
  filter: hue-rotate(0deg) saturate(100%); }

/*Theme Switcher*/
.theme-switcher {
  list-style: none;
  text-align: center;
  margin: 1rem auto 3rem auto;
  display: block;
  width: 280px;
  display: block; }
  .theme-switcher li {
    float: left;
    text-transform: uppercase;
    color: #ffffff; }
    .theme-switcher li span {
      margin-right: 10px; }
    .theme-switcher li a.theme-btn {
      color: #ffffff;
      background: none;
      display: inline-block;
      width: 30px;
      height: 30px;
      padding: 0;
      margin: 0 6px;
      text-indent: -499rem;
      border-radius: 499rem;
      opacity: .8; }
    .theme-switcher li a.theme-btn:hover {
      opacity: 1; }
    .theme-switcher li a.theme-btn-default {
      background: #7376df !important; }
    .theme-switcher li a.theme-btn-teal {
      background: #3dbb9c !important; }
    .theme-switcher li a.theme-btn-ruby {
      background: #f54b63 !important; }
    .theme-switcher li a.theme-btn-nightfall {
      background: #32343c !important; }
    .theme-switcher li a.theme-btn-organic {
      background: #918278 !important; }

@media (max-width: 768px) {
  .theme-switcher {
    display: none; } }
body {
  background-color: #ffffff;
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1rem;
  color: #444444; }

h1, h2 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  padding-bottom: 1.2rem;
  border-bottom: 1px solid #dfdfdf; }

h3, h4, h5, h6 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif; }

a, a:visited {
  color: #7376df; }

a:hover, a:focus, a:active {
  color: #6365d2;
  text-decoration: none; }

.nav-pills .nav-item.show .nav-link, .nav-pills .nav-link.active {
  background-color: #7376df; }

h1 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 2.4rem;
  font-weight: 600; }

h2 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 2.4rem;
  font-weight: 500; }

h3 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1.8rem;
  font-weight: 500; }

h4 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1.4rem;
  font-weight: 500; }

h5 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1rem;
  letter-spacing: .1rem;
  font-weight: 600;
  text-transform: uppercase; }

h6 {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: .8rem;
  letter-spacing: .1rem;
  font-weight: 500;
  text-transform: uppercase; }

p {
  color: #7c7c7c;
  font-size: 1rem; }

.text-white p {
  color: #ffffff; }

.card-inverse p {
  color: #ffffff;
  font-size: .9rem; }

.card h1 {
  border: none;
  margin: 0;
  padding-bottom: .5rem; }

.no-border {
  border: none; }

.no-padding {
  padding: 0; }

.clear {
  clear: both; }

.justify-center {
  display: flex;
  align-items: center;
  justify-content: center; }

.text-muted {
  color: #a0a0a0 !important; }

code {
  background-color: #f7f7f7; }

.divider {
  display: block;
  width: 100%;
  height: 1px;
  background-color: #dfdfdf;
  margin: 2rem auto; }

.circle {
  border-radius: 499rem; }

.jumbotron {
  padding: 2rem 2rem;
  background-color: #f7f7f7; }

.btn-primary, .btn-primary.disabled, .btn-primary:disabled, .btn-outline-primary:hover, .btn-outline-primary:active, .btn-outline-primary.active, .show > .btn-outline-primary.dropdown-toggle, .card-primary, .page-item.active .page-link, .list-group-item.active {
  background-color: #7376df !important;
  border-color: #7376df !important; }

.btn-primary:hover, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
  background-color: #6365d2 !important;
  border-color: #6365d2 !important; }

.btn-outline-primary {
  color: #7376df !important;
  border-color: #7376df !important; }

.btn-outline-primary.disabled, .btn-outline-primary:disabled, .btn-link, .page-link, .text-primary {
  color: #7376df !important; }

.btn-link:focus, .btn-link:hover, .page-link:focus, .page-link:hover, a.text-primary:focus, a.text-primary:hover {
  color: #6365d2 !important; }

.dropdown-item.active, .dropdown-item:active, .custom-control-input:checked ~ .custom-control-indicator, .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-indicator, .nav-pills .nav-item.show .nav-link, .badge-primary, .progress-bar, .bg-primary {
  background-color: #7376df !important;
  background-image: none; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #7376df !important;
  border-radius: 4px; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #7376df !important;
  border-radius: 499px; }

.nav-pills .nav-link.active, .badge-primary[href]:focus, .badge-primary[href]:hover, a.bg-primary:focus, a.bg-primary:hover {
  background-color: #6365d2 !important; }

.form-control:focus {
  border-color: #7376df !important; }

.btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  color: #ffffff !important;
  background-color: #7376df;
  border-color: #7376df; }

.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background-color: #6365d2;
  border-color: #6365d2; }

.btn-outline-primary, .btn-outline-primary:visited {
  color: #7376df;
  border-color: #7376df;
  background: none; }

.btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active {
  background-color: #7376df;
  border-color: #7376df;
  color: #ffffff; }

.btn-secondary, .btn-default {
  background-color: #ffffff;
  color: #444444;
  border-color: #dfdfdf; }

.btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active, .btn-default:hover, .btn-default:focus, .btn-default:active {
  color: #444444 !important;
  background-color: #f7f7f7 !important;
  border-color: #dfdfdf !important; }

.btn-margins button.btn {
  margin: 0 4px 6px 0 !important; }

.btn {
  border-radius: 499rem;
  text-transform: uppercase;
  letter-spacing: .1rem;
  font-size: .75rem;
  padding: .6rem 1.15rem;
  cursor: pointer; }

.btn:focus {
  outline: none;
  box-shadow: none; }

.btn-xs {
  font-size: .6rem;
  padding: .5rem 1rem; }

.btn-sm {
  font-size: .65rem;
  padding: .5rem 1rem; }

.btn-md {
  font-size: .75rem;
  padding: .6rem 1.15rem; }

.btn-lg {
  font-size: .8rem;
  padding: .9rem 1.5rem; }

.btn-circle {
  width: 2.8rem;
  height: 2.8rem;
  font-size: 1rem;
  padding: 0;
  border-radius: 50%; }

.btn-subtle {
  border: none;
  background: #f7f7f7;
  color: #7376df;
  -webkit-appearance: none;
  cursor: pointer; }

.btn-subtle:hover, .btn-subtle:focus, .btn-subtle:active {
  color: #ffffff;
  background-color: #7376df;
  outline: none; }

.btn-stripped {
  border: none;
  background: none !important;
  color: #444444 !important;
  -webkit-appearance: none;
  cursor: pointer; }

.btn-stripped:hover, .btn-stripped:focus, .btn-stripped:active {
  color: #7376df;
  background-color: none;
  outline: none; }

.dropdown a {
  color: #444444; }

.dropdown a:hover, .dropdown a:active, .dropdown a:focus {
  background-color: #7376df;
  color: #ffffff; }

.dropdown-menu {
  background: #ffffff;
  border: 1px solid #dfdfdf;
  width: 14rem;
  box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.15); }

.dropdown-menu .divider {
  margin: .5rem 0; }

.dropdown-menu li a {
  padding: .35rem 1rem; }

.dropdown-menu li a {
  color: #444444;
  display: inline-block;
  width: 100%; }

.dropdown-menu li a:hover {
  background: #7376df;
  color: #ffffff;
  text-decoration: none; }

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 20px;
  padding-left: 0;
  padding-right: 0;
  z-index: 1000;
  overflow-x: hidden;
  overflow-y: auto;
  /* Scrollable contents if viewport is shorter than content. */
  background: #7376df; }
  .sidebar a {
    color: #ffffff;
    text-transform: uppercase;
    font-size: .7rem;
    letter-spacing: .2rem;
    padding: .75rem 1rem; }
  .sidebar em {
    font-size: 1rem; }
  .sidebar h1 {
    color: #ffffff;
    border: none;
    font-size: 0.9rem;
    padding: 0rem 1rem;
    text-transform: uppercase;
    letter-spacing: .2rem; }
  .sidebar .site-title {
    margin-top: .5rem;
    margin-bottom: 1.75rem; }
    .sidebar .site-title a {
      font-size: .9rem;
      padding-left: 0;
      padding-right: 0;
      cursor: pointer; }
    .sidebar .site-title a:hover {
      background: none !important; }
  .sidebar .nav {
    margin-bottom: 20px; }
  .sidebar .nav-item {
    width: 100%; }
  .sidebar .nav-item + .nav-item {
    margin-left: 0; }
  .sidebar .nav-link {
    border-radius: 0; }
  .sidebar .logout-button {
    position: absolute;
    bottom: 20px;
    left: 20px;
    width: 85%;
    text-align: center;
    border-radius: .3rem; }

.sidebar .nav ul.children {
  width: auto;
  padding: 0;
  margin: 0; }
  .sidebar .nav ul.children li a {
    padding: .5rem 1rem;
    background: rgba(0, 0, 0, 0.5);
    color: #ffffff; }
  .sidebar .nav ul.children li a:visited {
    background: rgba(0, 0, 0, 0.5) !important;
    color: #ffffff !important; }
  .sidebar .nav ul.children li a:hover {
    background: #6365d2 !important;
    color: #ffffff !important; }

#wrapper.toggled .sidebar-nav {
  display: none; }

#menu-toggle {
  position: absolute;
  top: 1rem;
  right: 1rem; }

.sidebar a:focus, .sidebar a:hover, .sidebar a:active {
  background-color: #6365d2 !important; }

@media screen and (max-width: 576px) {
  #wrapper .sidebar-nav {
    display: none; }

  #wrapper.toggled .sidebar-nav {
    display: block !important; }

  .sidebar {
    position: inherit;
    padding-bottom: 0px;
    margin-bottom: 1rem; }

  #menu-toggle {
    background-color: #6365d2; } }
@media screen and (min-width: 576px) {
  #wrapper.toggled .sidebar-nav {
    display: block; }

  #menu-toggle {
    display: none; } }
.card {
  background-color: #ffffff;
  border: 1px solid #dfdfdf; }

.card.bg-primary, .card.bg-success, .card.bg-info, .card.bg-warning, .card.bg-danger {
  border: 1px solid rgba(0, 0, 0, 0.125); }

.card-block {
  padding: 1rem; }

.card-title {
  padding-bottom: .25rem;
  margin-bottom: 1rem; }

.card-subtitle {
  margin-top: -.75rem;
  padding-bottom: .5rem; }

.card-title-btn-container {
  position: absolute;
  top: 1.25rem;
  right: 1.25rem;
  list-style: none; }

.card-footer {
  background: #f7f7f7;
  border-top: 1px solid #dfdfdf;
  margin: -1rem !important;
  margin-top: 1rem !important; }

.card-header {
  padding: .75rem 1.25rem; }

.bg-default .card-header {
  background: #f7f7f7;
  border-bottom: 1px solid #dfdfdf; }

.card-header-tabs .nav-link:hover,
.card-header-pills .nav-link:hover {
  background-color: #ffffff;
  border-color: #dfdfdf; }

.card-header-tabs .nav-link:hover {
  border-bottom: 1px solid #ffffff; }

.card-header-tabs .active {
  background: #ffffff !important;
  border-color: #dfdfdf !important;
  border-bottom-color: #ffffff !important;
  color: #444444 !important; }

.alert {
  color: #ffffff; }
  .alert a {
    color: #ffffff !important; }

.no-left-margin {
  margin-left: 0; }

.page-header {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin-top: 0rem;
  margin-bottom: 2.4rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #dfdfdf;
  height: auto; }
  .page-header h1 {
    display: inline;
    border: none;
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
    width: 100%; }

.profile-photo {
  border-radius: 499rem;
  float: left; }

.username {
  float: left;
  text-align: left;
  margin: 0 0 0 1rem; }
  .username h1, .username h2, .username h3, .username h4 {
    margin-bottom: 0;
    text-transform: none !important;
    letter-spacing: 0 !important; }

.user-dropdown .dropdown-toggle::after {
  margin-top: 1rem;
  margin-left: 1rem; }

.user-progress {
  margin-top: 1rem; }
  .user-progress .profile-photo {
    max-height: 75px;
    max-width: 75px !important; }

.progress-custom {
  margin-top: .25rem;
  background-color: #f7f7f7;
  padding: 0;
  height: 6px; }

.progress-label {
  text-align: center !important;
  color: #7376df;
  font-size: .75rem;
  margin-top: -.25rem; }

.progress-bar {
  height: 6px; }

#calendar, .datepicker-inline {
  width: 100%;
  text-align: center; }

#calendar table {
  width: 100%; }

.datepicker-switch {
  font-size: 16px;
  height: 46px !important; }

.datepicker table tr td.old, .datepicker table tr td.new {
  color: #dfdfdf; }

.datepicker table tr td {
  padding: 2px 2px !important;
  cursor: pointer;
  border-radius: .3rem; }

#calendar th {
  text-align: center !important;
  cursor: pointer;
  border-radius: .3rem; }

.datepicker table tr td.active, .datepicker table tr td.active:hover, .datepicker table tr td.active.disabled, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
  color: #ffffff;
  background-color: #7376df;
  text-shadow: none;
  border-color: #285e8e; }

.datepicker table tr td span:hover, .datepicker thead tr:first-child th:hover, .datepicker tfoot tr th:hover, .datepicker table tr td.day:hover, .datepicker table tr td.day.focused {
  background-color: #f7f7f7; }

.panel-heading .glyphicon {
  margin-right: 10px; }

.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative; }

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 2px;
  background-color: #dfdfdf;
  left: 25px;
  margin-right: -1.5px; }

.timeline > li {
  margin-bottom: 20px;
  position: relative; }

.timeline > li:before, .timeline > li:after {
  content: " ";
  display: table; }

.timeline > li:after {
  clear: both; }

.timeline > li > .timeline-panel {
  width: calc( 100% - 65px );
  float: right;
  border: 1px solid #dfdfdf;
  border-radius: .3rem;
  padding: 10px 20px;
  position: relative;
  box-shadow: none; }

.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  left: -11px;
  display: inline-block;
  border-top: 11px solid transparent;
  border-right: 11px solid #dfdfdf;
  border-left: 0 solid #dfdfdf;
  border-bottom: 11px solid transparent;
  content: " "; }

.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  left: -10px;
  display: inline-block;
  border-top: 10px solid transparent;
  border-right: 10px solid #ffffff;
  border-left: 0 solid #ffffff;
  border-bottom: 10px solid transparent;
  content: " "; }

.timeline > li > .timeline-badge {
  color: #444444;
  width: 46px;
  height: 46px;
  line-height: 2.8rem;
  font-size: 1.4rem;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 0px;
  margin-right: -25px;
  margin-left: 3px;
  border: 1px solid #dfdfdf;
  background-color: #ffffff;
  z-index: 100;
  border-radius: 499rem; }

.timeline-badge.primary {
  background-color: #7376df !important;
  color: #ffffff !important;
  border: none !important; }

.timeline-badge.success {
  background-color: #8ad919 !important; }

.timeline-badge.warning {
  background-color: #ffb53e !important; }

.timeline-badge.danger {
  background-color: #f9243f !important; }

.timeline-badge.info {
  background-color: #30a5ff !important; }

.article {
  padding: 1rem 0;
  border-bottom: 1px solid #dfdfdf;
  margin-bottom: 1rem; }

.article:first-child {
  padding: 0 0 10px 0; }

.article:last-child {
  padding: 0 0 10px 0;
  border: none;
  margin-bottom: 0; }

.article h4 a {
  margin-bottom: 10px; }

.article .date {
  text-align: center;
  font-size: 1.8rem;
  margin: 0 auto;
  display: block; }

.article .date .text-muted {
  font-size: .8rem;
  text-transform: uppercase;
  letter-spacing: .1rem; }

.todo-list-item {
  list-style: none;
  padding: 0.5rem 1rem .15rem 1.25rem;
  border-radius: .3rem; }
  .todo-list-item .fa {
    margin: 0 .25rem 0 0;
    color: #444444; }
  .todo-list-item .fa:hover {
    color: #7376df; }
  .todo-list-item input[type=checkbox] {
    margin: 0 0.5rem 0 0 !important;
    border: 1px solid #444444; }

.todo-list {
  padding: 0;
  margin: -15px;
  background: #ffffff;
  color: #444444; }

#btn-todo {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

input[type=checkbox]:checked + label {
  text-decoration: line-through;
  color: #a0a0a0; }

.todo-list-item:hover, a.todo-list-item:focus {
  text-decoration: none; }

.todo-list-item .trash .fa:hover {
  color: #ef4040; }

.todo-list-footer {
  margin: -20px;
  margin-top: 2rem; }
  .todo-list-footer .btn {
    border-radius: .3rem; }

/*Font Awesome List*/
ul.font-awesome-list {
  list-style: none;
  margin: 0;
  padding: 0; }
  ul.font-awesome-list li {
    border: 1px solid #dfdfdf;
    float: left;
    width: 20%;
    height: auto;
    text-align: center; }
    ul.font-awesome-list li i {
      display: block;
      font-size: 32px;
      margin: 20px auto; }
    ul.font-awesome-list li span.icon-name, ul.font-awesome-list li .glyphicon-class {
      color: #7376df;
      font-size: .8rem;
      white-space: nowrap;
      font-weight: bold; }
    ul.font-awesome-list li span.icon-value {
      display: block;
      color: #7c7c7c;
      font-size: .7rem;
      margin-bottom: 15px; }

@media screen and (max-width: 1180px) {
  ul.font-awesome-list li {
    width: 25%; } }
@media screen and (max-width: 1024px) {
  ul.font-awesome-list li {
    width: 33.3%; } }
@media screen and (max-width: 768px) {
  ul.font-awesome-list li {
    width: 50%; } }
/*Forms*/
.form-control {
  border: 1px solid #dfdfdf;
  background-color: #ffffff;
  box-shadow: none; }

input.form-control {
  height: 46px; }

.bootstrap-table input.form-control {
  height: 34px; }

.input-group-btn .btn {
  height: 46px; }

.form-control:disabled, .form-control[readonly] {
  background-color: #f7f7f7;
  color: #7c7c7c; }

.form-control:focus {
  outline: 0;
  background-color: #ffffff;
  color: #444444; }

.help-block {
  font-size: .9rem;
  color: #7c7c7c; }

.custom-select, .custom-select.form-control {
  height: 46px !important;
  background-color: #ffffff;
  border-color: #dfdfdf;
  color: #444444; }

/*Tables*/
.dataTables_info, .dataTables_paginate {
  margin-top: 1rem !important; }

.page-item.active .page-link {
  color: #ffffff !important; }

.page-item .page-link {
  outline: none !important;
  color: #444444 !important; }

.dataTables_wrapper {
  padding: 0; }

table, td, tr, th, thead {
  border-color: #dfdfdf !important; }

/*Login Page*/
.login-page {
  background: #f7f7f7; }
  .login-page .login-panel .btn {
    display: block;
    width: 100%; }

/*Error Page*/
.error-page {
  background: #f7f7f7; }
  .error-page h1 {
    font-size: 4rem; }
</style>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
								<div class="jumbotron">
									<h1 class="mb-4">Hello, world!</h1>
									<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
									<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
									<p class="lead"><a class="btn btn-primary btn-lg mt-2" href="#" role="button">Learn more</a></p>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									<div class="card-block">
										<div id="calendar"></div>
										<div class="divider"></div>
										<h3 class="card-title">Timeline</h3>
										<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
										<ul class="timeline">
											<li>
												<div class="timeline-badge"><em class="fa fa-camera"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Lorem ipsum</h5>
													</div>
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-badge primary"><em class="fa fa-link"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Dolor</h5>
													</div>
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-badge"><em class="fa fa-paperclip"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Sit amet</h5>
													</div>
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</section>
					</div>
				</section>
			</main>
		</div>
	</div>
	<?php
      include_once("includes/modal-sair.php");
      include_once("includes/footer.php");
    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
	    var startCharts = function () {
	                var chart1 = document.getElementById("line-chart").getContext("2d");
	                window.myLine = new Chart(chart1).Line(lineChartData, {
	                responsive: true,
	                scaleLineColor: "rgba(0,0,0,.2)",
	                scaleGridLineColor: "rgba(0,0,0,.05)",
	                scaleFontColor: "#c5c7cc "
	                });
	            }; 
	        window.setTimeout(startCharts(), 1000);
	</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
	</body>
