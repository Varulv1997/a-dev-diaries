Lightbox
========

Lightbox and gallery based on the lightbox script by Lokesh Dhakar.

Lightbox
--------

Add a lightbox with the following steps.

1) Upload an image and insert it.

2) Add a link to the image with the attributes "data-lightbox" and "data-title":

`<a href="" data-lightbox="" data-title=""><img src="[path to the image]"</a>`

3) Copy the link of the image and add it as value of the attribute "href", add a unique name for the image as value to the attribute "data-lightbox" and some text as value to the attribute "data-title", if you want to show a caption:

`<a href="[path to the image]/image-1.jpg" data-lightbox="image-1"><img src="[path to the image]/image-1.jpg"></a>`

Examples:

`<a href="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-1.jpg" data-lightbox="image-1" data-title="My caption">
<img src="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-1.jpg"></a>`

or

`<a href="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-1.jpg" data-lightbox="image-1" data-title="My caption"><img src="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-1.jpg"></a>`

Important: The link to the image must contain the path to the directory, where it is stored, either absolute (https://mydomain.com/bl-content/uploads/pages/[ID of the page]/) or relative (/bl-content/uploads/pages/[ID of the page]/).

Gallery
-------

To show a group of images as gallery use the same value for the attribute "data-lightbox" for all images.

Examples:

```
<a href="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-2.jpg" data-lightbox="gallery"><img src="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-2.jpg"></a>

<a href="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-3.jpg" data-lightbox="gallery"><img src="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-3.jpg"></a>

<a href="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-4.jpg" data-lightbox="gallery"><img src="https://mydomain.com/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-4.jpg"></a>
````

or

```
<a href="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-2.jpg" data-lightbox="gallery"><img src="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-2.jpg"></a>

<a href="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-3.jpg" data-lightbox="gallery"><img src="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-3.jpg"></a>

<a href="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-4.jpg" data-lightbox="gallery"><img src="/bl-content/uploads/pages/6face7d58b0bcc241c7e881cecabb25d/image-4.jpg"></a>
```

Important: The link to the image must contain the path to the directory, where it is stored, either absolute (https://mydomain.com/bl-content/uploads/pages/[ID of the page]/) or relative (/bl-content/uploads/pages/[ID of the page]/).

Website
-------

Website of the script with more information:

http://lokeshdhakar.com/projects/lightbox2/

Versions
--------

1.5, August 4, 2020
- Update lightbox script from v2.8.2 to v2.11.3.

1.4, July 30, 2020
- Pathes to lightbox.css and lightbox.js are no longer dependent from the version.

1.3, June 28, 2020
- Bugfix

1.2, February 25, 2019
- Path to JavaScript fixed.
- Language fixed.
- Rewriting README.md and liesmicht.txt. 

1.1, January 31, 2019
- Addition of Dutch language file.

1.0, February 21, 2018
- Compatibility with Bludit v2.
- Some minor code changes.
- German language files and liesmich.txt.

0.2, August 23, 2016
- Fixed "Lightbox script end tag missing" at line 28.

0.1, July 30, 2016
- Release.
