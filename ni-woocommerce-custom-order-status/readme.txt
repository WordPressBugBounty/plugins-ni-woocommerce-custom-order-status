=== Ni WooCommerce Custom Order Status ===
Contributors: anzia
Tags: custom order status, order status, woocommerce order status, order status email, order status report
Stable tag: 2.2.8
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Requires at least: 5.0
Tested up to: 6.9.1
Requires PHP: 7.4

WC requires at least: 4.0
WC tested up to: 9.7

Last Updated Date: 10-September-2026



Create, manage and color-code unlimited WooCommerce custom order statuses, send status emails and view order status reports. HPOS compatible.

== Description ==

**Ni WooCommerce Custom Order Status** lets you create, edit, color-code and delete unlimited **custom order statuses** for WooCommerce, automatically send a **custom order status email** to the customer whenever an order moves to one of your statuses, and analyse your store with a built-in **order status report** and sales dashboard.

Out of the box WooCommerce ships with a fixed set of order statuses (pending, processing, on-hold, completed, cancelled, refunded, failed). Most stores need more, for example "Awaiting Shipment", "Packing", "Ready for Pickup", "Out for Delivery" or "Quote Sent". This plugin adds an **Order Status** manager to your WordPress admin so you can model your real order fulfilment workflow without writing a single line of code.

The plugin is fully compatible with the WooCommerce **High-Performance Order Storage (HPOS)** feature as well as the legacy post-based order storage.

= Key features =

*	Create unlimited **WooCommerce custom order statuses**
*	Edit, rename and delete custom order statuses at any time
*	Assign a **color** to every order status so it stands out in the WooCommerce orders list
*	Add an internal **description** to each order status
*	Custom, editable order **status slug**
*	Custom statuses appear on the single order screen, in the order status dropdown and in the order status filter
*	**Bulk change order status** from the WooCommerce orders list (HPOS compatible)
*	One-click "Complete" action for orders that are in a custom order status
*	**Custom order status email** &ndash; enable or disable per status, with its own subject line and message, sent automatically when the order status changes
*	**Order Status Report** &ndash; order count and order total per status, filter by period (today, yesterday, last 7 / 15 / 30 / 60 / 90 days) and sort by status, order total or order count
*	**Sales dashboard** &ndash; total, yearly, monthly, weekly, yesterday and today sales and order counts
*	Customer analysis, top 5 customers, top 5 countries, payment gateway sales breakdown and stock analysis
*	Developer friendly &ndash; filters to customise the order status email subject and content
*	Works with WooCommerce HPOS and legacy order storage
*	Lightweight, translation ready and easy to use

= Why use custom order statuses in WooCommerce? =

Custom order statuses give you and your team an instant overview of where every order is in your process. They reduce fulfilment mistakes, improve customer communication through targeted order status emails, and let you filter and report on orders by the stages that actually matter to your business.

= How the custom order status email works =

Every custom order status has its own "Enable Email Send" option, subject line and email content. When an order changes to that status, the plugin sends the message to the customer's billing email address using the store's configured "from" name and address. Developers can adjust the subject and body with the `ni_custom_order_status_email_subject` and `ni_custom_order_status_email_content` filters.

= How to get started =

1.	Go to **Plugins &gt; Add New** in your WordPress dashboard.
2.	Search for "Ni WooCommerce Custom Order Status".
3.	Click **Install Now**, then **Activate**.
4.	Open the new **Order Status** menu and click **Add New** to create your first custom order status, set its color and (optionally) its status email.

= Support and feedback =

We are open to your suggestions and feedback &ndash; thank you for using one of our plugins. For help or feature requests, email <a href="mailto:support@naziinfotech.com">support@naziinfotech.com</a>.

== Installation ==

1. Install through **Plugins &gt; Add New** in WordPress, or upload the `ni-woocommerce-custom-order-status` folder to `/wp-content/plugins/`.
2. Activate **Ni WooCommerce Custom Order Status** from the Plugins screen (WooCommerce must be installed and active).
3. Go to the **Order Status** menu and choose **Add New** to create a custom order status.
4. Set the status title, slug and color, and enable the status email if you want customers notified on that status change.
5. Your custom statuses are now available on the order screen, in the order status dropdown, in the status filter and in the Bulk actions menu.

== Frequently Asked Questions ==

= How do I create a custom order status in WooCommerce? =

Activate the plugin, open the **Order Status** menu in your WordPress admin, click **Add New**, enter a title, slug and color, then publish. The new status is immediately available on the order screen and in the order status dropdown.

= Is this plugin compatible with WooCommerce HPOS (High-Performance Order Storage)? =

Yes. The plugin declares HPOS compatibility and works with both the new custom order tables and the legacy post-based order storage.

= Can I email customers when the order status changes? =

Yes. Each custom order status has its own "Enable Email Send" option, subject line and message. When an order changes to that status the customer receives the email automatically at their billing email address.

= Can I change the status of many orders at once? =

Yes. Your custom statuses are added to the **Bulk actions** menu on the WooCommerce orders list, so you can update multiple orders in one step. This works on both the classic and the HPOS orders screen.

= Can I assign a color to each order status? =

Yes. Every status has a color picker and the color is used for the status label in the orders list.

= Will I lose my custom statuses if I deactivate the plugin? =

Your status definitions are stored in the database and remain if you deactivate. Orders already set to a custom status keep that status; the label just shows the raw slug until the plugin is reactivated.

= Where can I get help? =

Use the support forum on WordPress.org or email support@naziinfotech.com.

= Do you customize this plugin? =

Yes, we can customize this plugin as per your requirement.

== Screenshots ==

1. Order Status  List.
2. Add New Order Status.
3. Sales Analysis Dashboard (Today sales, this month sales, this year sales count and total)
4. Recent order list
5. Order status sales report
6. Payment gateway sales report pie chart
7. Bulk order status update
8. Order Status Report
9. Order status email setting



== Changelog ==

= 2.2.8 - 10-September-2026 =
* Fixed: Bulk "change order status" actions now work on the WooCommerce High-Performance Order Storage (HPOS) orders screen
* Fixed: Custom order status color labels now display on the HPOS orders screen
* Fixed: Dashboard "Yearly Sales" and "Top 5 Customers" reports returned no data when HPOS was enabled
* Fixed: Dashboard sales, order, order status and payment gateway counts and totals were limited to 10 records
* Fixed: Custom order status email now matches the configured status slug instead of the auto-generated permalink slug
* Security: Hardened the custom order status lookup with a prepared statement
* Improved: Order status and payment gateway reports now run a single query instead of one query per status or gateway
* Tested: WooCommerce HPOS and legacy (post-based) order storage

= 2.2.7 - 10-March-2026 =
* Tested: Compatible with WooCommerce 9.7
* Tested: Compatible with WordPress 6.9.1
* Improved: Plugin compatibility with latest WooCommerce order query system
* Fixed: Minor internal issue in order report query
* Updated: Plugin header compatibility information

= version 2.2.6 -15-October-2024 =
* Tested: Compatible With WooCommerce 9.3.3
* Tested: Compatible With WordPress 6.6.2

= version 2.2.5 -20-August-2024 =
* Tested: Compatible With WooCommerce 9.1.4
* Tested: Compatible With WordPress 6.6.1
* Tested: High-Performance Order Storage (HPOS)


= version 2.2.4 -31-May-2024 =
* Tested: Compatible With WooCommerce 8.9.1
* Tested: Compatible With WordPress 6.5.3


= version 2.2.3 -24-March-2024 =
* Fixed: Security issue
* Tested: Compatible With WooCommerce 8.7.0
* Tested: Compatible With WordPress 6.4.3



= version 2.2.2 -31-December-2023 =
* Tested: Compatible With WooCommerce 8.4.0
* Tested: Compatible With WordPress 6.4.2


= version 2.2.1 -23-November-2023 =
* Tested: Compatible With WooCommerce 8.3.1

= version 2.2.0 -19-November-2023 =
* Tested: Compatible With WooCommerce 8.3.0
* Tested: Compatible With WordPress 6.4.1
* Added: Make Compatible with High-Performance Order Storage

= version 2.1.0 -28-August-2023 =
* Tested: Compatible With WooCommerce 8.0.2
* Tested: Compatible With WordPress 6.3

= version 2.0.9 -01-May-2023 =
* Tested: Compatible With WooCommerce 7.6.1
* Tested: Compatible With WordPress 6.2


= version  2.0.8 -16-February-2023 =
* Tested: Compatible With WooCommerce 7.4.0
* Added: Added New Hook

= version  2.0.7 -31-January-2023 =
* Tested: Compatible With WooCommerce 7.3.0
* Tested: Compatible With WordPress 6.1.1

= version  2.0.6 -11-November-2022 =
* Tested: Compatible With WooCommerce 7.0.1
* Tested: Compatible With WordPress 6.1

= version  2.0.5 -05-September-2022 =
* Tested: Compatible With WooCommerce 6.8.2
* Tested: Compatible With WordPress 6.0.2

= version  2.0.4 -07-August-2022 =
* Tested: Compatible With WooCommerce 6.7.0
* Tested: Compatible With WordPress 6.0.1


= version  2.0.3 -28-May-2022 =
* Tested: Compatible With WooCommerce 6.5.1
* Tested: Compatible With WordPress 6.0

= version 2.0.2 -26-March-2022 =
* Tested: Compatible With WooCommerce  6.3.1
* Tested: Compatible With WordPress 5.9.2


= version 2.0.1 -28-January-2022 =
* Added: Send the custom order status email on custom order status changed.
* Tested: Compatible With WooCommerce 6.1.1
* Tested: Compatible With WordPress 5.9


= version 2.0.0 -17-November-2021 =
* Added: Added wordpress validation functions.
* BugFix: internal bugfix

= version 1.9.9 -14-November-2021 =
* Added: Added wordpress validation functions.
* BugFix: internal bugfix

= version 1.9.8 -06-November-2021 =
* Added: Added wordpress validation functions.
* BugFix: internal bugfix

= version 1.9.7 -24-October-2021 =
* Tested: Compatible With WooCommerce 5.8.0
* BugFix: internal bugfix


= version 1.9.6 -03-October-2021 =
* Tested: Compatible With WooCommerce 5.7.1
* Tested: Compatible With WordPress 5.8.1

= version 1.9.5 -17-Aug-2021 =
* Tested: Compatible With WooCommerce  5.5.2
* Tested: Compatible With WordPress 5.8


= version 1.9.4 -16-June-2021 =
* Tested: Compatible With WooCommerce 5.4.1
* Tested: Compatible With WordPress 5.7.2
* Added: Added custom order status report

= version 1.9.3 -13-March-2021 =
* Tested: Compatible With WooCommerce 5.1.0
* Tested: Compatible With WordPress 5.7

= version 1.9.2 -09-March-2021 =
* Added: Bulk order status update

= version 1.9.1 -23-February-2021 =
* Tested: Compatible With WooCommerce 5.0.0
* Tested: Compatible With WordPress  5.6.2

= version 1.9.0 -15-January-2021 =
* Tested: Compatible With WooCommerce 4.9.0
* Tested: Compatible With WordPress 5.6

= version 1.8.9 -18-October-2020 =
* Tested: Compatible With WooCommerce 4.6.0
* Tested: Compatible With WordPress 5.5.1

= version 1.8.8 -16-August-2020 =
* Tested: Compatible With WooCommerce 4.3.3
* Tested: Compatible With WordPress 5.5

= version 1.8.7 -18-July-2020 =
* Tested: Compatible With WooCommerce 4.3.0
* Tested: Compatible With WordPress 5.4.2

= version 1.8.6 -04-June-2020 =
* Tested: Compatible With WooCommerce  4.2.0
* Tested: Compatible With WordPress 5.4.1


= version 1.8.5 -10-May-2020 =
* Tested: Compatible With WooCommerce 4.1.0
* Added:  UI changes
* BugFix: Fixed slug length issue


= version 1.8.4 -05-May-2020 =
* Tested: Compatible With WooCommerce 4.0.1
* Tested: Compatible With WordPress  5.4.1

= version 1.8.3 -01-March-2020 =
* Tested: Compatible With WooCommerce 3.9.2

= version 1.8.2 -20-January-2020 =
* Tested: Compatible With WooCommerce 3.8.1
* Tested: Compatible With WordPress 5.3.2

= version 1.8.1 -15-November-2019 =
* Tested: Compatible With WordPress 5.3

= version 1.8.0 -26-September-2019 =
* Tested: Compatible With WooCommerce 3.7.0
* Tested: Compatible With WordPress 5.2.3


= version 1.7.9 -18-May-2019 =
* Tested: Compatible With WooCommerce 3.6.3
* Tested: Compatible With WordPress 5.2

= version 1.7.8-31-March-2019 =
* Tested: Compatible With WooCommerce 3.5.7
* Tested: Compatible With WordPress 5.1.1


= version 1.7.7 -01-December-2019 =
* Tested: Compatible With WooCommerce 3.5.3
* Tested: Compatible With WordPress 5.0.2

= version 1.7.6 -04-October-2018 =
* Tested: Compatible With WooCommerce 3.4.5
* Tested: Compatible With WordPress 4.9.8


= version 1.7.5 -15-July-2018 =
* Tested: Compatible With WooCommerce 3.4.3
* Tested: Compatible With WordPress 4.9.7

= version 1.7.4 - 06-May-2018 =
* Tested: Compatible With WordPress 4.9.5
* Tested: Compatible With WooCommerce  3.3.5


= version 1.7.3 - 16-February-2018 =
* Tested: Compatible With WordPress 4.9.4
* Tested: Compatible With WooCommerce  3.3.1

= version 1.7.2 - 12-November-2017 =
* Tested: Compatible With WordPress 4.8.3
* Tested: Compatible With WooCommerce  3.2.3

= version 1.7.1 - 19-June-2017 =
* Tested: Compatible With WooCommerce 3.0.8
* Tested: Compatible With WordPress 4.8

= version 1.7 - 06-April -2017 =
* Tested: Compatible With WordPress 4.7.3
* Tested: Compatible With Woocommerce  3.0.0

= version 1.6 - 12-February -2017 =
* Added:  Recent order list
* Added: Order status sales report
* Added: Payment gateway sales report pie chart

= version 1.5 - 01-February -2017 =
* Tested: Compatible With WordPress 4.7.2
* Tested: Compatible With Woocommerce  2.6.14

= version 1.4 - 16-January -2016 =
* Tested: Compatible With WordPress 4.7.1
* Tested: Compatible With Woocommerce  2.6.12

= version 1.3.5 - 26-November -2016 =
* Tested: Compatible With Woocommerce  2.6.8

= version 1.3.4 - 26-September -2016 =
* Tested: Compatible With WordPress 4.6.1
* Added:  Currency symbols in report


= version 1.3.3 - 30-July -2016 =
* Tested: Compatible With WordPress 4.5.3
* Tested: Compatible With Woocommerce 2.6.4
* Added:  WooCommerce status report
* BugFix: Internal bugFix

= version 1.3.2 - 12-April -2016 =
* Tested: Compatible With Woocommerce 2.5.5

= version 1.3.1 - 05-March -2016 =
* BugFix: Internal bugFix

= version 1.3 - 03-March -2016 =
* Added: Added complete action for custom order status in order list page
* Tested: Compatible With Woocommerce 2.5.3


= version 1.2 - 17-February -2016 =
* Tested: Compatible With WordPress 4.4.2
* Tested: Compatible With Woocommerce 2.5.2

= version 1.1 - 11-January-2016 =
* Added: Added description column
* Change: Change status color in order list circle to rectangular
* Tested: Compatible With WordPress 4.4.1
* Tested: Compatible With Woocommerce 2.4.13

= version 1.0 =
* Initial relese

== Upgrade Notice ==

= 2.2.8 =
Recommended update: fixes bulk status changes, status colors and dashboard reports on WooCommerce HPOS, corrects capped report totals, and hardens the status lookup query.

== Disclaimer ==

It is not responsible for any harm or wrong doing this Plugin may cause. Users are fully responsible for their own use. This Plugin is to be used WITHOUT warranty.
