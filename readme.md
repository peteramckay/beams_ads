Beams Ads
========

This project is a jQuery plugin to implement display of interstitial ads in Web applications created with other modules of the Beams development framework. 

A simple mock-up version of the website's pages in HTML and CSS is also included here for the sake of demo and testing of how the scripts work. 

Features of the plugin:

- Built in jQuery 2.1.0.

- Displays an interstitial full-page ad upon initial site visit by a visitor to any page. 

- Employs Google Analytics to track ad views and ad click-throughs.

A quick how-to on creating Google Analytics event trackers... 

CODE SAMPLE:

<a href=”” onClick=”_gaq.push(['_trackEvent', 'External Link', 'Twitter Link', 'Follow Us - Words']);”>Follow Us</a>

Where the labels used correlate to the following breakdowns in Google Analytics:

Category (required), Action (Required), Label 1 (Optional), Label 2 (Optional, not included in example)

With all this in mind, here are a few sample tracking scripts that would work with the Beams Ads plugin...

An event to track clicks on the "close link" for the interstitial would look like this:

<a href=”tktktk” onClick=”_gaq.push(['_trackEvent', 'Sponsorships', 'Interstitial Closed', 'Sponsor1']);”>Follow Us</a>


An event to track a clickthrough on a sponsor link:

<a href=”tktktk” onClick=”_gaq.push(['_trackEvent', 'Sponsorships', 'Sponsor Link Clickthrough', 'Sponsor1']);”>Follow Us</a>

For a more detailed explainer about event tracking, I'd recommend the blog post at http://www.koozai.com/blog/analytics/how-to-track-clicks-on-a-link-in-google-analytics-7721/

Beams Ads is free to use under MIT license. This is a v0.1 alpha version of the software, which we plan to imrpove over time. Pull requests and feedback are also welcome, of course.

Peter McKay
Co-Founder/Chief Product Officer
Roscoe Labs

