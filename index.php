<?php
$APPNAME = 'NewOneFileCMS'; //název CMS
$NOFCMS_version = '0.0.1'; //verze CMS
$WEBSITE   = $_SERVER['HTTP_HOST'].'/';


// Zadáme uživatelské jméno a heslo
$username = "admin"; // password to access admin functions
$password = "password"; // username to access admin functions

// Získame uživatelské jméno a heslo z formuláře
$username_form = $_POST['username'];
$password_form = $_POST['password'];

$folder_img = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAApklEQVR4nGNgoBTMq/UwXdDsWYWKXe2INmBRi/ekc0vj/19amQjHWycFP1vQ4hFItAHX1iT/v70hFY5vrU/9v64v8MvmSeGfN08Kw4o3Tgz7srjFez3DojaffbtmRP7fMysKjnfNjPr/9GD1/6/nWnHi9yca/y9t97/IACJAHHyKRw1oHRFh8Hhvxf8Xh2tIwiA9YAMW1nnHL2nz2UUOBumlIB9DAAB0IFsCX65eTgAAAABJRU5ErkJggg==">';
$NOFCMS_logo = '<img alt="Logo NewOneFileCMS" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACA0lEQVR4nO2aoW4UYRSFRxAaHgJBgilPQMJOa9GtqcLzArxDH6AvUUOaGVA3qcIgMK3oP3VYQkgIRy/BkbALVf3Yme9Ljlvx55x77h2xXSciIiIiIiIiIiIiIosn1a3/B3VLhTY+BsCbHxtgABj05McG8ObHFWQAGPTkxwbw5meHNZsGZEdlAGUA+BTGBvBGxBXEmxFA3oAyAHwKYwN4I+IK4s0IIG9AGQA+hbEBvBFxBfFmBJA3oAwAn8LYAN6IuIJ4MwLIG1AGgE9hbABvRFxBvBkB5A0oA8CnMDaANyKuIN6MAPIG1P0Y/aXbrBy/2Sj/GVcGsKbXgw0o3jhXUPHmeQNq9+URLjaA7t3rjeqncaP8CioDWNNTawOKN84VVLx53oDafXmEywDwKYwN4I2IK4g3I4C8AWUA+BTGBvBGxBXEmxFA3oAyAHwKYwN4I+IK4s0IIG9AGQA+hbEBvBFxBfFmBJA3oAwAn8LMsQFyN7YZbQD3hAHAGACMAcAYAIwBwBgAjAHA9G08vXMIbTyl3zs7Di8vH6za8OFf5q+m8eOz6/OH9HtnSX/79nE/DV+3mt/Gb/3NxRP6nbPmoI1H2wMYTuj3LYK+DWd/7v3hjH7XYng5vd9bteHTb6vn6vnn80f0uxbF4e3F034av6+m4cdBG/fp9yySF2149Ut/+9FPjlYR3i6ZDCAAAAAASUVORK5CYII="> ';
?>
<?php
function human_filesize($bytes, $decimals = 2) {
    $factor = floor((strlen($bytes) - 1) / 3);
    if ($factor > 0) $sz = 'KMGT';
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor - 1] . 'B';
}


?>


<html lang="        cs">
<head>
    <meta charset="UTF-8">

    <title><?php echo $APPNAME . " " . $NOFCMS_version; ?></title>
    <meta name="robots" content="noindex,nofollow">
    <script>
        function g() {

            // Získáme aktuální čas
            let cas = new Date();
            let hodiny = cas.getHours();

            // Vygenerujeme pozdrav
            let pozdrav;
            if (hodiny >= 6 && hodiny < 12) {
                pozdrav = "Dobré ráno.";
            } else if (hodiny >= 12 && hodiny < 18) {
                pozdrav = "Dobrý den.";
            } else if (hodiny >= 18 && hodiny < 22) {
                pozdrav = "Dobré odpoledne.";
            } else {
                pozdrav = "Dobrý večer.";
            }

            // Vypíšeme pozdrav
            document.getElementById('greet').innerHTML = pozdrav;
        }

    </script>
<style>

    th {text-align: left}
    :root {
        --heading-background: #16f;
        --font-color: #ff7;
        --input-bg-color: #f0f;
    }
    html {
        font-size: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    body {
        direction: ltr;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-tap-highlight-color: transparent;
        -webkit-text-size-adjust: none;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        -webkit-font-feature-settings: "liga" 0;
        font-feature-settings: "liga" 0;
        height: 100%;
        overflow-y: scroll;
        position: relative;
        margin: 0;
        font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
        font-size: 0.9375rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: left;
        background-color: #f5f7fb;

    }
    .page {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        min-height: 100%;}

        .page-single {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 1rem 0;

        }

    .container {
        width: 100%;
        padding-right: 0.75rem;
        padding-left: 0.75rem;
        margin-right: auto;
        margin-left: auto;
    }
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -0.75rem;
        margin-left: -0.75rem;
    }
      .mx-auto {
        margin-left: auto !important;
    }
    .mx-auto {
        margin-right: auto !important;
    }
    .col {

        flex-basis: 0;

        flex-grow: 1;
        max-width: 100%;
    }
    *, *::before, *::after {
        box-sizing: border-box;
    }
    a {
        color: #467fcf;
        text-decoration: none;
        background-color: transparent;
    }
    .card {
        background-color: var(--heading-background);
    }
    .card {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        position: relative;
        margin-bottom: 1.5rem;
        width: 100%;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 40, 100, 0.12);
        border-radius: 3px;
    }

    .p-6 {
        padding: 2rem !important;
    }
    .card-title {
        font-size: 1.125rem;
        line-height: 1.2;
        font-weight: 400;
        margin-bottom: 1.5rem;
    }
    form {
        display: block;

    }
    button, input {
        overflow: visible;
    }
    input, button, select, optgroup, textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    input[type="hidden" i] {
        appearance: none;
        background-color: initial;
        cursor: default;
        display: none !important;
        padding: initial;
        border: initial;
    }

    .form-group {
        display: block;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .form-label {
        display: block;
        margin-bottom: 0.375rem;
        font-weight: 600;
        font-size: 0.875rem;
    }
    .form-control, .dataTables_wrapper .dataTables_length select, .dataTables_wrapper.dataTables_filter input {
        color: var(--font-color);
        background-color: var(--input-bg-color);
    }
    .form-control, .dataTables_wrapper .dataTables_length select, .dataTables_wrapper .dataTables_filter input {
        display: block;
        width: 100%;
        height: 2.375rem;
        padding: 0.375rem 0.75rem;
        font-size: 0.9375rem;
        font-weight: 400;
        line-height: 1.6;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 40, 100, 0.12);
        border-radius: 3px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .form-footer {
        margin-top: 2rem;
    }
    .text-center {
        text-align: center !important;
    }
     .text-muted {
        color: #9aa0ac !important;
    }
    button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    .btn {
        display: inline-block;
        font-weight: 600;
        letter-spacing: .03em;
        font-size: 0.8125rem;
        min-width: 2.375rem;
        padding: 0.625rem 1.25rem;
        line-height: 1.6;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        border-radius: 3px;
        transition: all 0.15s ease-in-out;
        cursor: pointer;
    }

    .btn-block {
        display: block;
        width: 100%;
    }
    .btn-primary   {
        color: #fff;
        background-color: #467fcf;
        border-color: #467fcf;
    }

    .card-body > :last-child {
        margin-bottom: 0;
    }

    .c {
        display: flex;
        justify-content: center;
        align-items: center;}
</style>
</head>

<body onload="g()">
<div class="page">
    <div class="container">

    </div>

    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col mx-auto" style="max-width: 45rem">
                    <?php
                    if ($username_form == $username &&  $password_form == $password) {

                        echo '<p style="color: #00ff05;">Všechno v pohodě</p>';
                        echo "<div class=\"card\" style=\"border-radius: 2%\">
                        <div class=\"card-body p-6\"><table   style=\"width:50%\"><tr><th>Název souboru</th><th>Velikost</th><th>Datum poslední úpravy</th></tr><tr>";
                        $cesta = dirname(__FILE__);
                        $slozka = new DirectoryIterator($cesta);
                        foreach ($slozka as $soubor) {

                            if ($soubor->isFile()) {
                                echo "<td>" . $soubor->getFilename() . "</td><td>" . human_filesize($soubor->getSize()) . "</td><td>" . date('d. n. Y',$soubor->getMTime()). "</td></tr>";
                            }
                            //FOLDER
                            else if ($soubor->isDir()) {
                                echo "<td>" . $folder_img . " <a href=\"" . $soubor->getPathname() . "\">" . $soubor->getFilename() . "</a><td>  </td><td>  </td></tr>";
                            }
                        }
                        echo "</table></div></div>";

                        } else {
                        // Pokud uživatel není přihlášen, vypíšeme chybovou hlášku
                        echo '<p style="color: #d92323;">Chybné uživatelské jméno nebo heslo.</p>';
                    }

                    ?>
                    <div class="text-center mb-6">
                        <a href="#">
                            <img alt="Logo NewOneFileCMS" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACA0lEQVR4nO2aoW4UYRSFRxAaHgJBgilPQMJOa9GtqcLzArxDH6AvUUOaGVA3qcIgMK3oP3VYQkgIRy/BkbALVf3Yme9Ljlvx55x77h2xXSciIiIiIiIiIiIiIosn1a3/B3VLhTY+BsCbHxtgABj05McG8ObHFWQAGPTkxwbw5meHNZsGZEdlAGUA+BTGBvBGxBXEmxFA3oAyAHwKYwN4I+IK4s0IIG9AGQA+hbEBvBFxBfFmBJA3oAwAn8LYAN6IuIJ4MwLIG1AGgE9hbABvRFxBvBkB5A0oA8CnMDaANyKuIN6MAPIG1P0Y/aXbrBy/2Sj/GVcGsKbXgw0o3jhXUPHmeQNq9+URLjaA7t3rjeqncaP8CioDWNNTawOKN84VVLx53oDafXmEywDwKYwN4I2IK4g3I4C8AWUA+BTGBvBGxBXEmxFA3oAyAHwKYwN4I+IK4s0IIG9AGQA+hbEBvBFxBfFmBJA3oAwAn8LMsQFyN7YZbQD3hAHAGACMAcAYAIwBwBgAjAHA9G08vXMIbTyl3zs7Di8vH6za8OFf5q+m8eOz6/OH9HtnSX/79nE/DV+3mt/Gb/3NxRP6nbPmoI1H2wMYTuj3LYK+DWd/7v3hjH7XYng5vd9bteHTb6vn6vnn80f0uxbF4e3F034av6+m4cdBG/fp9yySF2149Ut/+9FPjlYR3i6ZDCAAAAAASUVORK5CYII=">
                        </a>
                               </div>
                    <div class="card" style="border-radius: 2%">
                        <div class="card-body p-6">
                            <h1 class="card-title"><span>Vítejte zpět! </span><span id="greet"></span></h1>

                            <form method="post">
                                <input id="csrf_token" name="csrf_token" type="hidden" value="">
                                <div class="form-group">
                                    <label  for="username" class="form-label">Login</label>
                                   <input class="form-control" id="username" name="username" required="" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <label  for="password" class="form-label">Heslo</label>
                                    <input class="form-control" id="password" name="password" required="" type="password" value="">

                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Přihlásit</button>
                                </div>
                            </form>
                        </div>
                        <p class="text-muted c">
                            <?php
                            echo $APPNAME . " " . $NOFCMS_version;
                            ?>
                        </p>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.container -->
    </div><!-- /.row -->
</div><!-- /page -->
</body>
</html>
