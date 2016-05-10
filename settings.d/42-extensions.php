<?php

wfLoadExtension( 'Cite' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );

wfLoadExtension( 'WikiEditor' );
# Enables use of WikiEditor by default but still allows users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;

# Enables link and table wizards by default but still allows users to disable them in preferences
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;

# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;

# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 1;

require_once "$IP/extensions/News/News.php";

wfLoadExtension( 'ReplaceText' );
$wgGroupPermissions['bureaucrat']['replacetext'] = true;

wfLoadExtension( 'Editcount' );

require_once "$IP/extensions/CustomParser/CustomParser.php";

require_once "$IP/extensions/LookupUser/LookupUser.php";
// Who can use Special:LookupUser?
$wgGroupPermissions['*']['lookupuser'] = false;
$wgGroupPermissions['sysop']['lookupuser'] = true;

require_once "$IP/extensions/Widgets/Widgets.php";

$wgPFEnableStringFunctions = true;

wfLoadExtension( 'Elastica' );
require_once "$IP/extensions/CirrusSearch/CirrusSearch.php";
$wgCirrusSearchServers = array( 'elasticsearch' );
$wgSearchType = 'CirrusSearch';

require_once( "$IP/extensions/Cargo/Cargo.php" );
include_once "$IP/extensions/SemanticForms/SemanticForms.php";