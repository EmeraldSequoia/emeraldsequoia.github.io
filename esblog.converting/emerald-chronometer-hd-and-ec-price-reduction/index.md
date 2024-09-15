---
title: "Emerald Chronometer HD, and EC price reduction"
date: "2011-05-07"
categories: 
  - "new-releases"
  - "project-status"
---

We've gotten a lot of requests for this, and we've finally put it in the can: We've just hit the App Store with an iPad version of Emerald Chronometer, called "Emerald Chronometer HD". You can see the press release [here](http://emeraldsequoia.com/press/EmeraldChronometerHD.html), some images [here](http://emeraldsequoia.com/h/echd.html), and the App Store page [here](http://itunes.apple.com/us/app/emerald-chronometer-hd/id435033000?mt=8).

Once again this was more work than you might think, because of the way the app works with its OpenGL implementation. Something as simple as rotation, which is trivial on a simple app with standard UIKit views, becomes a lot more complicated when you have an OpenGL view and UIKit views and you want to animate it all smoothly during an orientation change. Watch carefully what happens when you rotate the device while grid mode is up; that represents a week of development effort. :-) We did get to make use of [the higher-resolution images we developed for the Retina display](http://emeraldsequoia.com/esblog/2010/11/08/retina-support-and-app-size/), however.

Anyway, we're pretty happy with the way it looks, in both portrait and landscape modes. And in grid mode with 2-4 watches, all of the watches are the same size as they are in Emerald Chronometer on the iPhone (or larger), so it's a nice way to see more than one watch at once and still be able to read each one.

The new app is priced at USD $5, the same price as Emerald Chronometer has been since it entered the store. At the same time, we are reducing the price of Emerald Chronometer to USD $2; this reflects both an overall downward trend in app pricing in the past three years and also the additional value (and development effort) associated with the iPad app.

We hope you like the new app!
