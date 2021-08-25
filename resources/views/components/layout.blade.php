<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta charset="utf-8">
    <title>Laravel</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- script
    ================================================== -->
    <script src="/js/modernizr.js"></script>
    <script src="/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

{{$slot}}

<footer class="s-footer">


    <div class="col-five md-full end s-footer__subscribe">

        <h4>Our Newsletter</h4>

        <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim
            exercitationem ipsam. Culpa consequatur occaecati.</p>

        <div class="subscribe-form">
            <form id="mc-form" class="group" novalidate="true">

                <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address"
                       required="">

                <input type="submit" name="subscribe" value="Send">

                <label for="mc-email" class="subscribe-message"></label>

            </form>
        </div>

    </div> <!-- end s-footer__subscribe -->

    </div>
    </div> <!-- end s-footer__main -->


</footer>

</section>

<x-flash/>
</body>

