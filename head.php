<head>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
    <!--    <meta name="viewport" content="width=device-width initial-scale=1">-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/aside.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/modal-windows.css">
    <link rel="stylesheet" href="/css/sprites.css">

    <link rel="stylesheet" href="/css/brands.css">
    <link rel="stylesheet" href="/css/search.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/products.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/cart.css">

    <link rel="stylesheet" href="/css/general-media.css">
    <link rel="stylesheet" href="/css/footer-media.css">
    <link rel="stylesheet" href="/css/content-media.css">
    <link rel="stylesheet" href="/css/aside-media.css">
    <link rel="stylesheet" href="/css/header-media.css">

    <link rel="stylesheet" href="/css/brands-media.css">
    <link rel="stylesheet" href="/css/search-media.css">
    <link rel="stylesheet" href="/css/blog-media.css">
    <link rel="stylesheet" href="/css/catalog-media.css">
    <link rel="stylesheet" href="/css/products-media.css">
    <link rel="stylesheet" href="/css/product-media.css">
    <link rel="stylesheet" href="/css/cart-media.css">

    <script type="text/javascript" src="/js/jquery/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.requestAnimationFrame.min.js"></script>
    <script type="text/javascript" src="/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/js/jquery.event.swipe.js"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/common.js"></script>


<!--    for debug-->
    <script>
        // Обеспечиваем поддержу XMLHttpRequest`а в IE
        var xmlVersions = new Array(
            "Msxml2.XMLHTTP.6.0",
            "MSXML2.XMLHTTP.3.0",
            "MSXML2.XMLHTTP",
            "Microsoft.XMLHTTP"
        );
        if( typeof XMLHttpRequest == "undefined" ) XMLHttpRequest = function() {
            for(var i in xmlVersions)
            {
                try { return new ActiveXObject(xmlVersions[i]); }
                catch(e) {}
            }
            throw new Error( "This browser does not support XMLHttpRequest." );
        };


        // Собственно, сам наш обработчик.
        function myErrHandler(message, url, line)
        {
            var server_url = window.location.toString().split("/")[2];
            var params = {};
            params.message = message;
            params.url = url;
            params.line = line;
            $.post('http://'+server_url+'/js_errors.php',params);
            // Чтобы подавить стандартный диалог ошибки JavaScript,
            // функция должна возвратить true
//            return true;
        }

        //назначаем обработчик для события onerror
//        window.onerror = myErrHandler;

    </script>

</head>