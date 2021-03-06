<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<style id="" media="all">
    *{-webkit-box-sizing:border-box;box-sizing:border-box}body{padding:0;margin:0}#notfound{position:relative;height:100vh}#notfound .notfound{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound{max-width:520px;width:100%;line-height:1.4}.notfound>div:first-child{padding-left:200px;padding-top:12px;height:170px;margin-bottom:20px}.notfound .notfound-404{position:absolute;left:0;top:0;width:170px;height:170px;background:#e01818;border-radius:7px;-webkit-box-shadow:0 0 0 10px #e01818 inset,0 0 0 20px #fff inset;box-shadow:0 0 0 10px #e01818 inset,0 0 0 20px #fff inset}.notfound .notfound-404 h1{font-family:chango,cursive;color:#fff;font-size:118px;margin:0;position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);display:inline-block;height:60px;line-height:60px}.notfound h2{font-family:chango,cursive;font-size:68px;color:#222;font-weight:400;text-transform:uppercase;margin:0;line-height:1.1}.notfound p{font-family:montserrat,sans-serif;font-size:16px;font-weight:400;color:#222;margin-top:5px}.notfound a{font-family:montserrat,sans-serif;color:#e01818;font-weight:400;text-decoration:none}@media only screen and (max-width:480px){.notfound{padding-left:15px;padding-right:15px}.notfound>div:first-child{padding:0;height:auto}.notfound .notfound-404{position:relative;margin-bottom:15px}.notfound h2{font-size:42px}}
    /* cyrillic-ext */
    @font-face {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/montserrat/v18/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/montserrat/v18/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/montserrat/v18/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/montserrat/v18/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/montserrat/v18/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    </style>
    <style id="" media="all">/* latin-ext */
    @font-face {
    font-family: 'Chango';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/chango/v11/2V0cKI0OB5U7WaJCxne5fFU.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
    font-family: 'Chango';
    font-style: normal;
    font-weight: 400;
    src: url(/fonts.gstatic.com/s/chango/v11/2V0cKI0OB5U7WaJCyHe5.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>

<link type="text/css" rel="stylesheet" href="css/style.css" />


<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <meta name="robots" content="noindex, follow">
</head>
<body>
    <div id="notfound">
        <div class="notfound">
            <div>
                <div class="notfound-404">
                    <h1>!</h1>
                </div>
                <h2>Error<br>@yield('code')</h2>
            </div>
            <p>@yield('message')</p>
            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable. 
                @auth
                    @if ($role = auth()->user()->role->first())
                        @if ($role->kode_role == "100")
                            <a href="{{ route("dashboard") }}">Back to homepage</a>
                        @else
                            <a href="{{ route("dashboarduser") }}">Back to homepage</a>
                        @endif
                    @endif
                @endauth
            </p>
        </div>
    </div>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68097d31bb935607","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>
</html>
