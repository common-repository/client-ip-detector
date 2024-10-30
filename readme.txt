=== client-ip-detector ===
Contributors: alessiobravi
Author URL: http://blog.bravi.org/
Plugin URL: http://wordpress.org/extend/plugins/client-ip-detector/
Donate link: http://blog.bravi.org/
Tags: IP, IPv6, IPv4, Client IP
Requires at least: 2.6.0
Tested up to: 3.5
Stable tag: trunk
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A Simple widget to display client IP Address and print if the client is connecting via IPv6 or IPv4.


== Description ==
Simple IP detector widget for WordPress to show if user is connecting with IPv6 or IPv4.

IPv4 Address TAG will be marked in RED while IPv6 ones will me marked in GREEN, to remember the reached availability limits of v4 Protocols.

Statistics (percentage) of clients using IPv6 and IPv4 are generated and printed.


== Installation ==

1. Unzip client-ip-detector.zip
2. Upload the `client-ip-detector` folder into the `/wp-content/plugins/` directory on server
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Place the client-ip-detector in the wordpress widget admin interface
5. Choose a widget title

It is also possible to install the plugin via WordPress Plugin Repository by searching 'client-ip-detector' as plugin name. (From "Admin Panel" -> "Plugins" -> "Add New")

This plugin is provided "AS-IS" without warranty of any kind, expressed or implied.
We shall not be liable for any damages, including but not limited to, direct, indirect, special, incidental or consequential damages or losses that occur out of the use or inability to use ithis plugin.

== Frequently Asked Questions ==

= What is IPv4 ? =
Internet Protocol version 4 (IPv4) is the fourth revision in the development of the Internet Protocol (IP) and the first version of the protocol to be widely deployed.
It is at the core of standards-based internetworking methods of the Internet. As of 2012 IPv4 is still the most widely deployed Internet Layer protocol.
IPv4 uses 32-bit (four-byte) addresses, which limits the address space to 4.294.967.296 (2^32) addresses.
Addresses were assigned to users, and the number of unassigned addresses decreased. IPv4 address exhaustion occurred on February 3, 2011.
It had been significantly delayed by address changes such as classful network design, Classless Inter-Domain Routing, and network address translation (NAT).
IPv4 addresses, as commonly displayed to users, consist of four groups of three decimal digits separated by dots.

= What is IPv6 ? =
IPv6 (Internet Protocol version 6) is the latest revision of the Internet Protocol (IP), the primary communications protocol upon which the entire Internet is built.
It is intended to replace the older IPv4, which is still employed for the vast majority of Internet traffic as of 2012.
IPv6 was developed by the Internet Engineering Task Force (IETF) to deal with the long-anticipated problem of IPv4 running out of addresses.
IPv6 uses 128-bit addresses, allowing for 2?128, or approximately 3.4×10^38 addresses — more than 7.9×10^28 times as many as IPv4.
IPv6 addresses, as commonly displayed to users, consist of eight groups of four hexadecimal digits separated by colons.


== Screenshots ==
1. ScreenShot of placed client-ip-detector on a WordPress powered WebSite. (Widget Output.jpg)


== Changelog ==

= 0.01 - 12012011 =
Initial version.

= 0.02 - 12192011 =
Added Feature: IPv6 and IPv4 Colored Tagging.

= 1.0 - 12142012 =
Code Cleaning and Stable release publication.

= 1.1 - 12172012 =
Added Feature: IPv6 and IPv4 Usage Statistics (percentage).

= 1.2 - 12172012 =
Added Feature: Statistics output can be toggled via Widget Admin Panel.
Added Feature: IP TAG (IPv4 or IPv6) Colors and Links to protocol Overview can be toggled via Widget Admin Panel.
Fix: CSS Classes and IDs generated on <ul> and <id> Widget HTML Tags.


== Upgrade Notice ==

1.2 - Added Feature: Statistics and IP TAG Colors and Links can be toggled from Widget Admin Panel.

