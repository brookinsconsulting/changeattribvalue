------------------------------
Dynamic change attribute value for eZ publish 3.9.x
------------------------------

Installing and use
----------
Unpack to extensions directory. Activate extension. Clear caches. Check to have permission on the module "changeattribvalue".
Now you can simply change an attribute value by calling the following url:
http://www.yoursite.com/index.php/<site_access>/changeattribvalue/set?object_id=<object_id_to_modify>&attribute_id=<attribute_identifier_of_object>&value=<new_value>&redirect_node=<redirect_node_after_publish>

no redirection is made if no "redirect_node" is specified

About
-----
This is a Dynamic change attribute value extension. It solves the problem to modify the
attribute value of an object without use the classic eZ workflow edit -> draft -> public.

The code was originally developed by Maurizio Betti.


Changelog
---------
v0.1
- Initial release: modify only numbers and checkbox datatypes attributes


License
-------
Copyright (C) 2008.

This file may be distributed and/or modified under the terms of the
"GNU General Public License" version 2 as published by the Free
Software Foundation

This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
PURPOSE.

The "GNU General Public License" (GPL) is available at
http://www.gnu.org/copyleft/gpl.html