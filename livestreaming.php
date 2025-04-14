<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Livestreaming Safety</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Livestreaming Safety</h1>
        <p>Guidelines to stay safe while live-streaming.</p>
    </header>

    <div>
        <!--- THE WEATHER QUERY-->
<script>
    (function(d, s, id) {
        if (d.getElementById(id)) {
            if (window._TOMORROW_) {
                window._TOMORROW_.renderWidget();
            }
            return;
        }
        const fjs = d.getElementsByTagName(s)[0];
        const js = d.createElement(s);
        js.id = id;
        js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

        fjs.parentNode.insertBefore(js, fjs);
    })(document, 'script', 'tomorrow-sdk');
    </script>

    <div class="tomorrow" data-location-id="052181" data-language="EN" data-unit-system="METRIC" data-skin="light" data-widget-type="aqiPollutant" style="padding-bottom:22px;position:relative;">
      <a href="https://www.tomorrow.io/weather-api/" rel="nofollow noopener noreferrer" target="_blank" style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;">
     <img alt="Powered by the Tomorrow.io Weather API" src="https://weather-website-client.tomorrow.io/img/powered-by.svg" width="250" height="18"/></a>
        </div>
</script>
    </div>

    <section>
        <h2>Stay Safe While Streaming:</h2>
        <ul>
            <li>Never share personal information.</li>
            <li>Use strong privacy settings.</li>
            <li>Moderate your audience interactions.</li>
            <li>Report any suspicious activity immediately.</li>
        </ul>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
