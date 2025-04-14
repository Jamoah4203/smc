<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>SMC - Home</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>
<body>
    <header>
    <div id="slider">

    </div>
    <h1>Welcome to Social Media Campaigns (SMC)</h1>
    <p>Helping teenagers stay safe online.</p>
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
        <h2>Why Online Safety Matters</h2>
        <p>Every day, millions of teenagers use social media. Our mission is to educate and guide them to stay safe.</p>
        <img src="images/safety.png" alt="Online Safety">
    </section>
    <article>
      <div id="page">
      <p class="main-left">
            Children’s Online Privacy Protection Act (COPPA) - General Data Protection Regulation (GDPR)</br>
            Online Harms Bill (UK) - Cyberbullying Prevention Laws</br>
            <a href="legislation.php" class="lm">Learn More</a>
        </p>
        <p class="main-right">
            Never share personal information - Use strong privacy settings.<br>
            Moderate your audience interactions - Report any suspicious activity immediately.<br>
            <a href="manage_user.php" class="km">Know More</a>
        </p>
      </div>
    </article>

    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <div class="elfsight-app-3c332bbf-ddf8-40a1-8840-8fbb7189f077"></div>

    <?php include 'footer.php'; ?>
</body>
</html>