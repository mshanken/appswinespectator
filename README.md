# Wine Spectator Apps site [WS APPS](http://apps.winespectator.com/)

The Wine Spectator Apps site is built using harp-js for rapid static HTML generation

# Harpjs Boilerplate Tool

1. clone the repo locally ```git clone git@github.com:mshanken/appswinespectator.git```

2. cd into the project.

3. Create a folder in the css folder and name it _vendor ```mkdir _site/public/css/_vendor```

4. Create a folder in the ja folder and name it vendor ```mkdir _site/public/js/vendor```


## Avialable commands.

```docker-compose up -d``` builds the project in a docker container. Once that's done. Type this URL [http://localhost:9000](http://localhost:9000/) in your browser to check web site.

```docker-compose exec web npm run browsersync``` starts browser-sync [http://localhost:3000/](http://localhost:3000/) hit ```Ctrl + P and Ctrl + Q``` to detach.

```docker-compose exec web npm run compile``` compiles served site into static HTML in a folder "www"

```docker-compose exec web npm run gh-pages```  what this command does is compiled (if not compiled) then drops compiled files into root folder<br>
**Note:** this comand should be used in gh-pages branch only.

Run ```docker-compose exec web /bin/bash``` to access docker machine from terminal an run other grunt/npm comands.

```docker-compose stop``` to turn off the docker container.

```docker-compose down``` to remove this container, Always use this command after you are done with this repo.

Read more in [here](https://github.com/mshanken/harp-boilerplate/#readme)

---

## Deprecated version
## How it works.
1. ```git clone git@github.com:mshanken/mshanken```
2. ```npm install```<br>
**Note:** Because harp-js uses Ruby for sass and other features under the hood, you might see error logs in your screen, if that's the case, just run this ```npm install grunt-harp``` with sudo before the next command)
3. ```grunt server```

Check [http://localhost:9000](http://localhost:9000) in your browser. That's all, start working in your project now.

## list of commads
This is a list of commads at your dispose to create a simple static web-site. Enjoy it!

### ```grunt server```
Runs harp server from your harpjs working directory ```_site/```, after you run this command open your browser with this location http://localhost:9000 to preview it. Type ```ctrl+c``` to turn off the server.

### ```grunt compile```
Runs harp compile to generate the static HTML of your dinamic website.

### ```grunt static```
Like ```grunt server``` it runs another server but this one serves the generated HTML (compiled), this can help to review the generated HTML site. Open your browser with this url http://localhost:8800.

### ```grunt gh-pages```
This command will copy the generated HTML (compiled) version of your site at rooted level so it can be render at github gh-pages.

**NOTE:** this command should run once you are in the **_gh-pages_** branch only.

Site was built using harp-boilerplate, [check repo](https://github.com/mshanken/harp-boilerplate) for how to use this tool info.