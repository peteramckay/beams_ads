#Beams Ads (v0.1.0)

This is a simple plugin to implement display of interstitial ads in websites and applications built with the Beams development framework. 

Beams also includes a responsive front-end module and a server module. Along with the ad plugin, these modules are designed to constitute a full-stack development solution for media-rich projects like news sites, video-heavy web apps, blogs, and so on. 

All the Beams modules were created by me on behalf of Roscoe Labs. They're free to use under MIT license. 

For a fuller introduction to Beams, visit http://roscoelabs.com/products/beams or http://github.com/roscoelabs

Please note, we do consider this version of the ad plugin to be an alpha release. We're eager to develop a community around the software to keep improving it from here. In that spirit, we welcome contributions of all kinds via GitHub, including forks, pull requests, bug reports, feature suggestions, and so on.

There's also a Beams Working Group email list that anyone can join at https://groups.google.com/forum/#!forum/beams-working-group

Now, on to some specifics about the ad plugin...


###Features

- Built in jQuery v2.1.0.

- Displays a responsive interstitial full-page ad upon initial site visit by a visitor to any page, then sets a cookie so as not to bug the user further.

- Includes boilerplate Google Analytics code that can be customized to track ad views, ad click-throughs, and other events for ads on your site.


###A quick tutorial on creating Google Analytics event trackers 

Most media-rich, content-heavy sites monetize through advertising. That's why we thought it was important to include some sort of analytics integration in the Beams Ads plugin. 

Specifically, Google Analytics was the obvious candidate to start with considering how popular it is aroudn the web. This code snippet illustrates how the platform allow you to set up custom event trackers for ad clicks or similar events... 

	<a href=”” onClick=”_gaq.push(['_trackEvent', 'External Link', 'Twitter Link', 'Follow Us - Words']);”>Follow Us</a>

Where the labels used correlate to the following breakdowns in Google Analytics:

- Category (required), Action (Required), Label 1 (Optional), Label 2 (Optional, not included in example)

- With all this in mind, here are a few sample tracking scripts that would work with the Beams Ads plugin...

An event to track clicks on the "close link" for the interstitial would look like this:

	<a href=”tktktk” onClick=”_gaq.push(['_trackEvent', 'Sponsorships', 'Interstitial Closed', 'Sponsor1']);”>Follow Us</a>

An event to track a clickthrough on a sponsor link:

	<a href=”tktktk” onClick=”_gaq.push(['_trackEvent', 'Sponsorships', 'Sponsor Link Clickthrough', 'Sponsor1']);”>Follow Us</a>

You'll see sample trackers on the demo html pages we've included in Beams Ads. For a more detailed explainer about event tracking, I'd recommend the blog post at http://www.koozai.com/blog/analytics/how-to-track-clicks-on-a-link-in-google-analytics-7721/

###A few other pointers

- Main function of the included CSS file is to make ad display responsive across different-sized screens. But it's very minimal otherwise, leaving a lot of flexibility to customize ads for your sponsors' particular needs.

- Structure of folders here is similar to the Beams Front End module, so you can just drop the ad-related files in there as needed, if you're using Beams Front End for your UX.

Finally, I must tip my hat to Brett DeWoody (http://github.com/brettdewoody) and Klaus Hartl (https://github.com/carhartl), whose previous open-source work on interstitials and cookies respective provided much of the foundation for the alpha version of this plugin. Essentially, I mashed up those two guys' projects, then added in responsive design and Google tracking.

Peter McKay   
Co-Founder/Chief Product Officer   
Roscoe Labs   
April 2, 2014   

