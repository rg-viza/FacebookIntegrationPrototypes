<?php
/**
 * Created by PhpStorm.
 * User: ndavis
 * Date: 11/5/17
 * Time: 3:20 PM
 */

?>

<html>
<body>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1125928294209166',
            xfbml      : true,
            version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div
    class="fb-like"
    data-share="true"
    data-width="450"
    data-show-faces="true">
</div>
</body>

</html>
