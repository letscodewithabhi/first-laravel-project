<!DOCTYPE html>
<?php

use Illuminate\Support\Facades\App;

if (App::environment('local')) {
    var_dump('if');
} else if (App::environment('staging')) {
    var_dump('else if staging');
} else if (App::environment('production')) {
    var_dump('else if prod');
}
?>
