<?php
/**
 * Bestelformulier klant
 *
 */
set_time_limit(0);
ini_set('display_errors', 1);
/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS'))
{
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * These defines should only be edited if you have cake installed in
 * a directory layout other than the way it is distributed.
 * When using custom settings be sure to use the DS and do not add a trailing DS.
 */
/**
 * The full path to the directory which holds "app", WITHOUT a trailing DS.
 *
 */
if (!defined('ROOT'))
{
    define('ROOT', dirname(dirname(dirname(__FILE__))));
}

/**
 * The actual directory name for the "app".
 *
 */
if (!defined('APP_DIR'))
{
    define('APP_DIR', basename(dirname(dirname(__FILE__))));
}

/**
 * The absolute path to the "Cake" directory, WITHOUT a trailing DS.
 *
 * For ease of development CakePHP uses PHP's include_path. If you
 * need to cannot modify your include_path, you can set this path.
 *
 * Leaving this constant undefined will result in it being defined in Cake/bootstrap.php
 *
 * The following line differs from its sibling
 * /lib/Cake/Console/Templates/skel/webroot/test.php
 */
//define('CAKE_CORE_INCLUDE_PATH', ROOT . DS . 'lib');

/**
 * Editing below this line should not be necessary.
 * Change at your own risk.
 *
 */
if (!defined('WEBROOT_DIR'))
{
    define('WEBROOT_DIR', basename(dirname(__FILE__)));
}
if (!defined('WWW_ROOT'))
{
    define('WWW_ROOT', dirname(__FILE__) . DS);
}

if (!defined('CAKE_CORE_INCLUDE_PATH'))
{
    if (function_exists('ini_set'))
    {
        ini_set('include_path', ROOT . DS . 'lib' . PATH_SEPARATOR . ini_get('include_path'));
    }
    if (!include ('Cake' . DS . 'bootstrap.php'))
    {
        $failed = true;
    }
}
else
{
    if (!include (CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'bootstrap.php'))
    {
        $failed = true;
    }
}
if (!empty($failed))
{
    trigger_error("CakePHP core could not be found. Check the value of CAKE_CORE_INCLUDE_PATH in APP/webroot/index.php. It should point to the directory containing your " . DS . "cake core directory and your " . DS . "vendors root directory.", E_USER_ERROR);
}

if (Configure::read('debug') < 1)
{
    throw new NotFoundException(__d('cake_dev', 'Debug setting does not allow access to this url.'));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    </head>
    <body>
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <form name="bestel" action="orders/add" method="post" class="form">
                        <input type="file" name="datafile" size="40">
                        <div id="preview"></div>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="rond" >
                            Rond
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="rechthoek" checked>
                            Rechthoek
                        </label>
                        <label class="radio inline">   
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="anders" >
                            Anders
                        </label>
                        <input name="aantal" type="text" placeholder="Aantal..">

                        <label>Hoogte</label>
                        <input name="hoogte" type="text" placeholder="Hoogte..">
                        <label>Breedte</label>
                        <input name="breedte" type="text" placeholder="Breedte..">
                        <label>Diameter</label>
                        <input name="diameter" type="text" placeholder="Diameter..">
                        Enkel zichtbaar indien rond geselecteerd is, 
                        <label>Naam & Voornaam</label>
                        <input name="naam" type="text" placeholder="Naam & Voornaam..">
                        <label>Bedrijfs- of groepsnaam</label>
                        <input name="hoogte" type="text" placeholder="Bedrijfs- of groepsnaam..">
                        <label>Straat, nr, bus</label>
                        <input name="straat" type="text" placeholder="Straat..">
                        <input name="nr" size="7"  type="text" class="input-mini">
                        <input name="bus" size="5" type="text" class="span1">
                        <label>Postcode</label>
                        <input name="postcode" type="text" placeholder="Postcode.." class="input-small">
                        <label>Land</label>
                        <select>
                            <option>België</option>
                            <option>Nederland</option>
                        </select>
                        <label>Telefoon</label>
                        <input name="tel" type="text" placeholder="Telefoon..">
                        <label>E-mail</label>
                        <input name="email" type="email" placeholder="E-mail.." required>
                        <label>BTW-nr. (indien van toepassing)</label>
                        <input name="btw" type="text" placeholder="BTW-nr...">
                        <label class="checkbox">
                            <input type="checkbox" value="voorwaarden" required>
                            <a href="#">Voorwaarden</a>
                        </label>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
