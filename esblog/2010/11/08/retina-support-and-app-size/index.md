# Retina support and app size
**2010-11-08**

---

The new iPhone 4 support that Bill [just posted about](http://emeraldsequoia.com/esblog/2010/11/05/iphone-4-support/) required a whole new set of artwork, which is why it took so long for us to get this support out. Most simple apps simply use built-in widgets and graphic routines to render their displays, and those apps got Retina support simply by recompiling. (Our own apps Emerald Time and Emerald Timestamp fall into that category, and we supported the Retina display in those apps when the iPhone 4 came out). But the displays you see in Emerald Chronometer are rendered using a "parts list" of display objects that is generated with a custom external tool.

For example, here's a parts list (this is really an OpenGL texture atlas, for the technically inclined) from Geneva's front side, at the old resolution: [![Old display 'parts list' or texture atlas](images/front-atlas-Z0.png "front-atlas-Z0")](http://emeraldsequoia.com/esblog/wp-content/uploads/2010/11/front-atlas-Z0.png)

That image, and many more like it, are included with every copy of the app we ship.

The only way to get higher resolution imagery with this scheme is to provide a higher resolution image of parts; because the Retina display has 4x the pixels of the older displays, that means these artwork images need to be about 4 times the size of the old ones, which turns out to be a pretty large number (40 MB of images). Here's just a portion of the same artwork image at the higher resolution for comparison:

[![](images/front-atlas-Z1-crop.png "front-atlas-Z1 crop")](http://emeraldsequoia.com/esblog/wp-content/uploads/2010/11/front-atlas-Z1-crop.png)

We sympathize with those of you with older phones and slower connections who have to download all of the bytes of the new app with no appreciable benefit. For what it's worth, we considered a couple of different options before settling on this one:

1) Creating a separate app with the high-resolution artwork in it, and leaving the existing app as is. This would have removed any impact on owners of 3GS and earlier devices. But we didn't think this was fair to our existing iPhone 4 customers, since they would have to pay full price for the new app for a relatively minor feature upgrade, and we didn't see any other app developers do this.

2) Making an in-app purchase option for $1 to get the higher resolution artwork. At first this seemed like a good idea (especially since it would bring in a small amount of revenue for our not inconsiderable effort generating the new artwork), and we spent a little time developing some store infrastructure to support it. But this would mean that users would have to download the additional 35 megabytes or so of Retina-specific imagery while running the app. This maybe wouldn't be so bad, but the artwork typically changes in minor ways every time we release a new version, so it would mean that going forward as more and more people had iPhone4-class devices, we'd all be forced to do this extra step every time a new version was released.

We finally decided that the right long-term architecture was to just support the Retina display as part of the normal app. Anyway we hope those of you with Retina displays like it.

## Comments (frozen)

**timl2k11 2011-10-21 21:51:37**

Love it, love it, beautiful!

---
