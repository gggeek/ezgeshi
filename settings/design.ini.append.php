<?php /*

[ExtensionSettings]
DesignExtensions[]=ezsh

[JavaScriptSettings]

# Uncomment these setting to enable integration of ez geshi with debug output:
# the debug output results will be enhanced with links to display the
# source code of all php and template file used.
# They are left commented out by default to avoid loading unnecessary javascript
# in production websites

# eZP 4.3.0 and later
FrontendJavaScriptList[]=ezjsc::jquery
FrontendJavaScriptList[]=ezgeshi.js
# (for admin interface design, we can assume jQuery is already loaded)
BackendJavaScriptList[]=ezgeshi.js

# eZP 4.2.0 and earlier
# Make sure you have jQuery loaded, either via ezjscore or some other means
#JavaScriptList[]=ezgeshi.js

*/ ?>
