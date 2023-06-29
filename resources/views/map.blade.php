<!DOCTYPE html>
<html>
<head>
    <title>Bing Maps in Laravel</title>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AqEGUG2YCPHnc5OeASJN1Y4FgmxLGsog7tJ6aZtEtpwMlcjR9w9v_OvbFP8JpVs_' async defer></script>
    <style>
        #myMap {
            height: 400px;
        }
    </style>
    <script type='text/javascript'>
        function GetMap() {
            var map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'AqEGUG2YCPHnc5OeASJN1Y4FgmxLGsog7tJ6aZtEtpwMlcjR9w9v_OvbFP8JpVs_'
            });
            var center = map.getCenter();

            var pushpin = new Microsoft.Maps.Pushpin(center, {
                title: 'Hello World!',
                subTitle: 'Welcome to Bing Maps!'
            });

            map.entities.push(pushpin);
        }
    </script>
</head>
<body>
    <div id="myMap"></div>
</body>
</html>