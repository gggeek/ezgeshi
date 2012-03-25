<?php /*

[GeneralSettings]

# List of files that will not be available for highlight via the geshi/highlight view
# Use full paths for files outside of eZP, relative paths for files in it
# NB: this is matched using preg_match, so it can supports directories, just put .* at the end
# Default value: protect site.ini and file.ini everywhere, index_cluster.php and the most common unix config dir
# Another option, probably safer, is to enable open_basedir in php.ini
Blacklist[]
Blacklist[]=/etc/.*
Blacklist[]=index_cluster\.php
Blacklist[]=settings/override/site\.ini(\.append)?(\.php)?
Blacklist[]=settings/siteaccess/[^/]+/site.ini(\.append)?(\.php)?
Blacklist[]=extension/[^/]+/settings/site.ini(\.append)?(\.php)?
Blacklist[]=extension/[^/]+/settings/siteaccess/[^/]+/site.ini(\.append)?(\.php)?
Blacklist[]=settings/override/file\.ini(\.append)?(\.php)?
Blacklist[]=settings/siteaccess/[^/]+/file.ini(\.append)?(\.php)?
Blacklist[]=extension/[^/]+/settings/file.ini(\.append)?(\.php)?
Blacklist[]=extension/[^/]+/settings/siteaccess/[^/]+/file.ini(\.append)?(\.php)?

# Allow usage of absolute paths to files for highlight via the geshi/highlight view.
# This is an extra security measure to complement permissions that have to be given
# first to the desired users/groups:
# even when allowing access only to files within the eZ Publish root, if the user
# is allowed to specify an absolute path for them, he could use a brute force
# attack to find out the location of the index.php file on the filesystem.
# It is recommended to enable this only on evelopment servers, when using the
# enhanced debug output (see INSTALL file for details)
AllowAbsolutePaths=disabled

*/ ?>