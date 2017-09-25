"use strict";

var gulp = require('gulp'),
   gutil = require('gulp-util'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
   sass  = require('gulp-sass'),
  rename = require('gulp-rename'),
    maps = require('gulp-sourcemaps'),
  cssmin = require('gulp-cssmin'),
  serve  = require('gulp-live-server'),
prefixer = require('gulp-autoprefixer');



// Start Watching: Run "gulp"
gulp.task('default', ['watch']);

// Run "gulp server"
gulp.task('server', ['serve', 'watch']);


// Compile all SASS files to styles.css file
gulp.task("compile-sass", function(){
        return gulp.src('assets/scss/styles.scss')
        .pipe(maps.init())
        .pipe(sass())
        .pipe(prefixer({
            browsers: [
                    '> 1%',
                    'last 2 versions',
                    'firefox >= 4',
                    'safari 7',
                    'safari 8',
                    'IE 8',
                    'IE 9',
                    'IE 10',
                    'IE 11'
                ],
            cascade: false
        }))
        .pipe(maps.write('./'))
        .pipe(gulp.dest('assets/css'));

});

// Minify SASS files to styles.css file if you want the minified version
gulp.task("minify-css", function(){
        return gulp.src('assets/scss/styles.scss')
        .pipe(maps.init())
        .pipe(sass())
        .pipe(prefixer({
            browsers: [
                    '> 1%',
                    'last 2 versions',
                    'firefox >= 4',
                    'safari 7',
                    'safari 8',
                    'IE 8',
                    'IE 9',
                    'IE 10',
                    'IE 11'
                ],
            cascade: false
        }))
        .pipe(cssmin())
        .pipe(rename('styles.min.css'))
        .pipe(gulp.dest('assets/css'));

});

// Concat All Jquery Plugins to plugins.min.js
gulp.task('concat-plugins', function() {
        return gulp.src('assets/js/libs/**/*.js')
        .pipe(uglify({
                output: {
                        'ascii_only': true
                }
        }))
        .pipe(concat('plugins.min.js'))
        .pipe(gulp.dest('assets/js'));
})

// Concat All custom Javascript files to scripts.min.js
gulp.task('concat-scripts', function() {
        return gulp.src('assets/js/custom/*.js')
        .pipe(uglify({
                output: {
                        'ascii_only': true
                }
        }))
        .pipe(concat('scripts.min.js'))
        .pipe(gulp.dest('assets/js'));
})
// Default task
gulp.task('watch', function () {
    gulp.watch('assets/scss/**/*.scss', ['compile-sass']);
    gulp.watch('assets/scss/**/*.scss', ['minify-css']);
    gulp.watch('assets/js/libs/*.js', ['concat-plugins']);
    gulp.watch('assets/js/custom/*.js', ['concat-scripts']);});

// Folder "/" serving at http://localhost:8888
gulp.task('serve', function () {
    var server = serve.static('/', 8888);
    server.start();
    gulp.watch(['build/*'], function (file) {
        server.notify.apply(server, [file]);
    });
});