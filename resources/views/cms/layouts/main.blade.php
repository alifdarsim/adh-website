<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="./images/favicon.png">
    <title>User List | DashLite Admin Template</title>
    <link rel="stylesheet" href="/assets_cms/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="/assets_cms/css/theme.css?ver=3.2.2">
</head>

<body class="nk-body ui-rounder has-sidebar ">
<div class="nk-app-root">
    <div class="nk-main ">
        @include('cms.layouts.sidebar')
        <div class="nk-wrap pt-2">
            @include('cms.layouts.header')
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('cms.layouts.footer')
        </div>
    </div>
</div>

<script src="/assets_cms/js/bundle.js?ver=3.2.2"></script>
<script src="/assets_cms/js/scripts.js?ver=3.2.2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.0/moment.min.js"></script>
@stack('scripts')
</body>

</html>
