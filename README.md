# SPStats
A simple PHP archive page for STEMPlace and Pxls-based servers. NOTE: this project is not yet 100% production-ready, use at your own risk!

## Instructions
Setting up SPStats is easy, especially if you've already configured an NGINX or Apache server to serve PHP. If you haven't already, install NGINX or Apache (NGINX is recommended for production) and configure it to run PHP through whatever port you'd like.

You have two options for using SPStats:
  - Running it as the root folder
  - Running it within your existing server
 
 Either works, but scalability will likely be better if you decide to house SPStats within a director in the root web server directory. The process of using SPStats is nearly identical, but setting up the web server itself will be slightly different.
 
 Once you have PHP working on your web server, make a copy of "config-example.php" and rename it as "config.php". The server will not function until you do this and will attempt to assign undefined variables when used. In production, never use the default password in the config file as the default password is publicly available.
 
 Set the name of your site in the config file to something short to prevent it from screwing up the browser experience.
 
 When setting the site URL, use the format "http(s)://[site url]". DO NOT use trailing slashes!
 
 When setting the path of the archives, do not use relative paths in relation to your server's working directory, start with the root path and begin with a leading slash. For example, your archive file may be at "/extra/archives.php", always use the path to the public page and NOT the submission handler script.
 
 You may notice that there is an image file referenced, this is an image of the canvas that is intended to be updated regularly. You can do this through various methods, but we've found success in using a Rust script by flyingsixtysix that you can automate with Cron. We're hoping to just integrate this into the project itself so that you don't need to install it. Be aware that currently, you have to manually change the image in the archive page to the latest image file. There is also a bit of text below the title to indicate the last time that the most current canvas image has been generated.
 
 The Archive Utility is a form that will automatically generate an archive post at the top of the page. The tool cannot be used to edit existing posts (we're working on it) but it can be used to generate new ones. We recommend having a dedicated administrator whose job is to archive every canvas to prevent confusion. Even though there is password protection for every submission, it's more of a barrier than anything. We hope to add authentication through the session tokens on your Pxls server in the near future.
 
## Tips
  As we mentioned before, use this script https://github.com/FlyingSixtySix/pxls-board-getter-rust for retrieving canvas images from your server. You can even have it format the file's name so that it matches the canvas number, which is helpful when you update your canvas because you don't need to change the script's configuration. Use Cron to run the script at regular intervals, we've also made it so that browsers probably won't cache your updated images which means that your users can see the most recent canvas image.
  
  You can easily format your inputs in the Archive Utility using HTML. To prevent any odd formatting, refrain from using it on anything but the description as this area is pretty clear of formatting.
  
  Contribute to the project! Even just a small bug fix is greatly appreciated and we're always happy to get feedback about our code! On top of that, you can add features that we might not even think of, which is a huge plus for users and yourself.
