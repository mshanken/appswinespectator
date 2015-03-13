#Wine Spectator Apps site [WS APPS](http://apps.winespectator.com/)

This is the Wine Spectator Apps site

##How it works

There's two ways to do this either in your desktop or in our QA server. To start you need the following installed (QA's already installed)

1. Node
2. NPM
3. Grunt
4. [Harpjs](http://harpjs.com/)

This is a static page site build with [Harpjs]. Once you have the requirements installed you can now clone this repo or pull to update, and do the following commands to start the project at terminal ```npm install``` to install grunt task dependencies. Once this is done you can start working on updating the pages, edit its content or just preview the site.

To preview your changes you can start the harp server with this command ```npm run server``` (open your browser with this location http://localhost:9000/), to turn off harp server just hit ```ctrl+c```.

Once you are done with your new changes, you might want to check the results of the compiled pages (the static version of the site). By running the following command ```npm run compile``` harp will compile the dymanic site, you can run  ```npm static``` to preview this compiled version in a separate server (http://localhost:8800/)

##gh-pages

You are done now, you have added, committed and pushed your changes to master. Lets create gh-pages if you are still in your master branch move to gh-pages branch, merge your master changes and them run again ```npm run compile``` becuase we're not moving any static site, after that just run```npm run gh-pages``` and you are done. gh-pages is just a copy of the compiled version moved to the root folder. Add, commit and push your changes and you have updated this site on the githup gh-pages site.
