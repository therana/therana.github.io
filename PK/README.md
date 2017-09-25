<p align="center">
  <a href="http://gulpjs.com">
    <img height="257" width="114" src="https://raw.githubusercontent.com/gulpjs/artwork/master/gulp-2x.png">
  </a>
  <h3 align="center">Gulp Starter</h3>
  <p align="center">Start building amazing Front End projects with Gulp Starter Framework.</p>
</p>


Gulp Starter is a Front End framework which is built with Twitter Bootstrap,Font-Awesome,SASS and powered by Gulp. It's clean and very easy to use on any Front End project.



Features | Tools Used
------ | -----
**CSS** | [Sass](http://sass-lang.com/) , Source Maps, Minified CSS, [Twitter Bootstrap](https://github.com/twbs/bootstrap) 
**JavaScript** | All JavaScript plugins and custom Scripts are minified to two different sexy files.
**Icons** | Font-Awesome Icones,Bootstrap Glyphicons
**Production Builds** | JS and CSS are [uglified](https://github.com/terinjokes/gulp-uglify) and [minified](http://cssnano.co/), SASS files are compiled to two CSS files at a time[Minified CSS and Non Minified].
**Deployment** | All resources will be loaded from assets folder.There is different folder for js,css,img and they are compiled to the relevant folder

## Usage
Make sure Node is installed.Follow the commands below.Start building your project With 'gulp server' command. It starts serving at http://localhost:8888 and watches all file changes immediately.

```bash
git clone https://github.com/therana/gulp-starter.git App && cd App
npm install
gulp server
```

## More Usage
You can check other custom gulp commands by checking `gulpfile.js` or follow below :

#### Compile SASS Files :
```bash
gulp compile-sass
```

#### Minify CSS Files :
```bash
gulp minify-css
```

#### Concat and Minify Jquery Plugins :
```bash
gulp concat-plugins
```

#### Concat and Minify Custom JavaScript files:
```bash
gulp concat-scripts
```


## Features

### SASS / CSS Stuff

- Watches for SASS changes on save
- Checks for SASS errors and outputs them without you having to rerun Gulp
- Compiles the SASS to a Minified and a Non-Minified CSS at a time.
- Autoprefixes for legacy browsers
- Combines all CSS into one big and sexy minified file
- Includes SASS Bootstrap
- Option to use the Non-Minified CSS and Minified CSS files just by calling any in HTML.
- Google Font is used as default font and change it in `assets/scss/_typography.scss` file as you wish.
- All other initial scss files are included to save your time.

### Javascript Stuff

- Automatically compiles all jQuery libraries into one big `plugins.min.js` file.
- Combines all custom scripts into one `scripts.min.js`

