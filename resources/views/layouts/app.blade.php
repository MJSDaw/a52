<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
8
rel="stylesheet"
crossorigin="anonymous"
/>
<link rel="stylesheet" type="text/css"
href="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.css"/>
<script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.js"></s
cript><script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cauce_cookie.js"></script>
<script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-base.
js"></script><script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-efor
ma.js"></script><link rel="stylesheet" type="text/css"
href="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.css"/>
<script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.js"></s
cript><script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cauce_cookie.js"></script>
<script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-base.
js"></script><script type="text/javascript"
src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-efor
ma.js"></script></head>
<link rel="stylesheet" href={{ asset('css/app.css') }}>
<title>@yield('title')</title>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
<div class="container">
<a class="navbar-brand" href="/">Online Store</a>
<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup"
aria-expanded="false"
aria-label="Toggle navigation"
>
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ms-auto">
<a class="nav-link active" href="/">Home</a>
<a class="nav-link active" href="/about">About</a>
<a class="nav-link active" href="/products">Products</a>
</div>
</div>
</div>
</nav>
<header class="masthead bg-primary text-white text-center py-4">
<div class="container d-ex align-items-center ex-column">
<h2>@yield('subtitle')</h2>
</div>
</header>
<!-- header -->
<div class="container my-4">@yield('content', 'content')</div>
<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Desarrollo web en entorno servidor - 2º DAW
</small>
<small>
{{now()}}
</small>
</div>
</div>
<!-- footer -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
crossorigin="anonymous"
></script>
</body>
</html>
