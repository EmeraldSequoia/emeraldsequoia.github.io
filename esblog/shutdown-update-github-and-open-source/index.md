# Shutdown update: GitHub and Open Source
**2023-12-26**

---

**\[update 2024.09.04\] See** [here](https://emeraldsequoia.com/esblog/2024/09/04/new-contacts-for-emerald-sequoia-apps/) **for an update on support contacts, including how to express interest in helping out.**

First, thanks again for the many kind words about our apps. As we’ve noted several times here, this was always a labor of love for Bill & me and seeing your comments has been extremely gratifying.

Some tentatively good news: The code for most of our iOS apps is now on GitHub, at [https://github.com/EmeraldSequoia](https://github.com/EmeraldSequoia). A small number of volunteers has just started to organize, and we hope that they will be able to eventually resume an App Store presence for Emerald Timestamp, Emerald Observatory, and Emerald Chronometer. If you would like to be part of this process, please see [this post](https://emeraldsequoia.com/esblog/2024/09/04/new-contacts-for-emerald-sequoia-apps/) for instructions.

A copy of the Emerald Sequoia website (excepting only this blog) is also up on GitHub. You can view the website here: [https://emeraldsequoia.github.io/](https://emeraldsequoia.github.io/) (this might be a good candidate for a bookmark, as it should last as long as GitHub itself does).

Emerald Time and the WearOS version of Emerald Chronometer will not make it to open source:

- Emerald Time does not use our highly-optimized NTP code that we developed for later apps and there are many alternative apps available in the App Store by other developers.

- The WearOS apps use deprecated APIs that are no longer even documented (and may not work in upcoming OS versions). There are also far fewer WearOS customers (and thus far fewer people interested in taking over the code maintenance).

Thanks one more time for all of your support over the past 15+ years!

 - Steve & Bill

## Comments (frozen)

**CraigS 2024-01-05 22:19:47**

This is great to read. I'll be taking a look at the github repos, and I might get in touch to see if there's anything I can do to help keep that app and its dependencies running. I'm also glad to hear that you've made a copy of this website on github for posterity.

As I said in a comment on your first post about shutting down Emerald Sequoia, thank you for making such a beautiful and captivating app as Emerald Observatory. I've really enjoyed it for all these years.

---

**GrahamAsher 2024-04-17 12:51:28**

You mentioned that it was a problem for you that Apple are removing support for OpenGL. I also have a commercial project that uses OpenGL, specifically OpenGL ES 2.0, and I have been able to get round that problem by moving from GLKit to MetalAngle, an open source library that provides OpenGL and translates it to use Apple’s Metal system. It works perfectly. My product is the CartoType mapping library.

---
