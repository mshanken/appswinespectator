#Wine Spectator Apps site [WS APPS](http://mshanken.github.io/appswinespectator)

This is Wine spectator apps landing page/sale site

##How it works

This is a static page site build on harp. QA has harp installed so you can clone this project and do any updates as need it

Once you are done with your changes, you can preview the site by build the static site in the web folder by running this command ```harp compile _site web/``` then use your sandbox or by running harp server with this comman ```harp server``` you can also preview from your sanbox but adding a prot number the defult is 9000.

Ask [Edison Leon](mailto:eleon@mshanken.com) if run into problems

##Updating gh-pages
After you have merged and/or commited your changes to master checkout gh-pages to compile your new changes and replace previous version. First merge or pull master changes them run ```harp compile _site ./``` to update static pages, because of this compilation README.md and CNAME files will be remove, you'll need to get those back by doing ```git checkout CNAME``` and ```git checkout README.md``` now you can add the modified files into git so it's redy to commit and push to gh-pages branch. **WARNING** do not do any work, updates, changes or fixes from this branch (gh-pages branch), all of that will be done at your master brach or a new branch.

### TODO

* Newsletter
    - When a user submits, I need something better then a random page (http://lp.winespectator.com/apps/optin).
* Site Badge
* 404
    - Need Copy