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



This extension is maintained by Markus Müllenborn-Pitzen and was created for 4you Promotion GmbH in Münchenreuther Str. 31, 95652 .
https://www.4you-werbeagentur.de/
