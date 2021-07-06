<?php

include("parseUserAgentString.php");
$parser = new parseUserAgentStringClass(); // This creates a new instance of this class object.
$parser->includeAndroidName = true;
$parser->includeWindowsName = true;
$parser->includeMacOSName = true;
$parser->parseUserAgentString("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.70 Safari/537.36 Edg/92.0.902.30"); // This calls the parser function in the class object.

if ($parser->knownbrowser) {
    print "Browser Name: $parser->fullname";
    print "\n\n";
    print_r($parser);
}
else print "Unknown Web Browser";