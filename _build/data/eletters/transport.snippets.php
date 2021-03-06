<?php
/**
 * MyComponent transport snippets
 * Copyright 2011 Your Name <you@yourdomain.com>
 * @author Your Name <you@yourdomain.com>
 * 1/1/11
 *
 * MyComponent is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * MyComponent is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MyComponent; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package mycomponent
 */
/**
 * Description:  Array of snippet objects for MyComponent package
 * @package mycomponent
 * @subpackage build
 */

if (! function_exists('getSnippetContent')) {
    function getSnippetContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}
$snippets = array();

$x = 0;

$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterListGroups',
    'description' => 'List the aviable groups for the TV',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/eletterlistgroups.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);

$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterQueue',
    'description' => 'This will run a batch of eletters',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/eletterqueue.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);

$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterFormListGroups',
    'description' => 'List avaiable Groups for the signup form, preHook',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/eletterformlistgroups.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);

$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterSignup',
    'description' => 'The signup form postHook to assign subscriber to group(s)',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/elettersignup.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);

$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterConfirm',
    'description' => 'Confirm the subscription after completing the signup form',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/eletterconfirm.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);

$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterUnsubscribe',
    'description' => 'Unsubscribe from eletter groups',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/eletterunsubscribe.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);ies);


$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterUpdateTables',
    'description' => 'Update Tables if needed, only run once',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/update.snippet.php'),
),'',true,true);
//$properties = include $sources['data'].'/properties/properties.mysnippet1.php';
//$snippets[$x]->setProperties($properties);
//unset($properties);ies);

// Added 1.1 beta2
$snippets[++$x]= $modx->newObject('modSnippet');
$snippets[$x]->fromArray(array(
    'id' => $x, // set this in order not the ID for the snippet
    'name' => 'EletterFormItEmail',
    'description' => 'A hook for FormIt to replace the default Email hook. Will send out an email on successful submit for FormIt',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/eletterformitemail.snippet.php'),
),'',true,true);



return $snippets;