<?php use \app\inc\Input;
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="Analyze and visualize your data. Use a powerful API for adding maps to your own apps."/>
    <meta name="description"
          content="The core component of MyGeoCloud is the rock solid PostGIS database with endless possibilities."/>
    <meta name="description" content="With a powerful adminstration tool you can manage your data online."/>
    <meta name="keywords"
          content="map, visualize, geo, cloud, analyze, gis, geographical data, maps, web mapping, shape file, GPX, MapInfo, WMS, OGC"/>
    <meta name="author" content="Martin Hoegh"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script type="text/javascript">var screenName = '<?php echo $_SESSION['screen_name']; ?>'</script>
    <script type="text/javascript">var subUser = <?php echo ($_SESSION['subuser'])?"'{$_SESSION['subuser']}'":"false"; ?></script>
    <script type="text/javascript">var schema = '<?php echo (Input::getPath()->part(3)) ? Input::getPath()->part(3) : "public"; ?>'</script>
