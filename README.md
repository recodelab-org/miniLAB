# miniLAB
A ridiculously simple WordPress theme by Enno Hyttrek and recodeLAB.

Version: 1.2.0

The current version is still absolutely work-in-progress. It is only the minimal shell for a WordPress theme to function. Since version 1.2.0 there are separate PHP template parts, as WP themes usually have, while before there was only one index.php with the code that usually sits in header.php and footer.php integrated. One objective of this project initially was, to create a theme that accomplishes everything with just the index.php as a template. However, we felt, that the theme will still be minimal enough with just a handful templates and with header and footer neatly separated, as you do.

Please note, that in this version the functions.php doesn't yet include any function to enqueue JavaScript and/or JQuery, like any complete theme should have. The theme itself uses some quick & dirty Vanilla JS added manually in the footer area for the mobile menu. But to make PlugIns which for example rely on JQuery cooperate with the theme, you should definitely enqueue it. You can find the documentation how to do that somewhere at https://developer.wordpress.org (forgive me, if I do not have the precise link ready here at this moment).

Feel free to use this theme for your own experiments, but please be aware, that it is nowhere near 'production ready'. The disclaimers in the GNU license fully apply and I take no responsibility if you use it for a project and then run into trouble.

The theme layout behaves fairly responsive, in a minimal basic way. So if you want to study the basics of how a WP theme can be responsive, miniLAB could give you a starting point here (however, we can't provide explantions or a tutorial for/with it at this point, sorry -- maybe in the future).

Enjoy!

Enno Hyttrek, recodeLAB
April 2021


Copyright (C) 2021  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
