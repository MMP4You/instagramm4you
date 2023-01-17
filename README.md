# instagramm4you
Typo3 Extension for Integration of Instagram Feeds

Installation guide.
Download the Extension as zip file.
Install the extension via the extension manager.
Activate the extension.
Add the plugin to a page.
Create a new folder and add Insta Feed as a record.
Enter the access token for your Instagram profile.
Add the extension in the advanced site template.

Connect to FTP and edit the inst.js file in the Resources/Public/JavaScript/ directory.

Add at the position  

$.getJSON('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username&access_token=

your valid token.


The frontend is also built from the inst.js file.

In the part 
            $("#instacont").append( '<div class="fentryinst col col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2"><div class="fimg"><a href="'+element.permalink+'" target="_blank"><img src='+element.media_url+' alt="'+element.caption.substring(0,100)+'..."></a></div></div>' );

you can modify your frontend.

The default is the Bootstrap framework in a 6 columns setup.
For Boostrap 4 please visit https://getbootstrap.com/docs/4.6/getting-started/introduction/

The return JSON from the API https://graph.instagram.com/
is logged in the console.

For more needed parameters you can expand the API questions at the place where you enter the API key.

This extension is maintained by Markus Müllenborn-Pitzen and was created for 4you Promotion GmbH in Münchenreuther Str. 31, 95652 .
https://www.4you-werbeagentur.de/
