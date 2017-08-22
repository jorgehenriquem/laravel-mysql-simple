<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
	<title>{{ $title ?? 'Sistema5' }}</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Sistema5</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="container">
            {{ $slot }}
        </section>
    </main>
    <script src="/js/app.js"></script>
</body>
</html>