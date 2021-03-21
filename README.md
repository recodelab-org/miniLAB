# miniLAB
A ridiculously simple WordPress theme by Enno Hyttrek.

Version: a.1.1.9

The current version is absolutely work-in-progress. It is only the minimal shell for a WordPress theme to function. There are no separate PHP template parts, as WP themes usually have. This probably won't change. One objective of this project is to create a theme that accomplishes everything with just the index.php as a template. This might fail or lead nowhere, but if so, so be it.

Please note, that in this version the functions.php doesn't yet include any function to enqueue JavaScript and/or JQuery, like any complete theme should have. The theme itself uses some quick & dirty Vanilla JS added manually in the footer area for the mobile menu. But to make PlugIns which for example rely on JQuery cooperate with the theme, you should definitely enqueue it. You can find the documentation how to do that somewhere at https://developer.wordpress.org (forgive me, if I do not have the precise link ready here at this moment).

Feel free to use this theme for your own experiments, but please be aware, that it is nowhere near 'production ready'. The disclaimers in the GNU license fully apply and I take no responsibility if you use it for a project and then run into trouble.

Still: Enjoy!

Enno Hyttrek, recodeLAB
March 21, 2021


Copyright (C) 2021  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/