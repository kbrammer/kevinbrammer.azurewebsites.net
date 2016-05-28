'use strict';

var babel = require("gulp-babel");
var concat = require('gulp-concat');
var del = require('del');
var gulp = require('gulp');
var jshint = require('gulp-jshint');
var less = require('gulp-less');
var path = require('path');
var watch = require('gulp-watch');

/**
 * Copy the primary files from the bower dependencies to assets folder (incomplete - may still require copying some files manually)
 * @return {Stream}
 */
gulp.task('js:update-lib', function () {
    return gulp.src(mainBowerFiles())
        .pipe(gulp.dest('./assets/js/lib'))
});

/**
 * Bundle the game's JavaScript
 * @return {Stream}
 */
gulp.task('js:compile', ['js:clean', 'js:lint'], function () {
    // include angular 'module' files before other js files
    return gulp.src(['./src/**/*module*.js', './src/**/*.js'])
      .pipe(babel())
      .pipe(concat('game.js'))
      .pipe(gulp.dest('./assets/js'));
});

/**
 * Remove previous JavaScript files
 * @return {Stream}
 */
gulp.task('js:clean', function (cb) {
    return del('./assets/js/game.js', cb);
});

/**
 * Lint the code
 * @return {Stream}
 */
gulp.task('js:lint', function () {
    return gulp.src('./src/**/*.js')
      .pipe(jshint({ esnext: false }))
      .pipe(jshint.reporter('default'));
});

/**
 * Bundle the CSS
 * @return {Stream}
 */
gulp.task('css:compile', ['css:clean'], function () {
    return gulp.src('./less/stylesheet.less')
      .pipe(less({ paths: [path.join(__dirname, 'less', 'includes')] }))
      .pipe(gulp.dest('./assets/css'));
});

/**
 * Remove previous CSS files
 * @return {Stream}
 */
gulp.task('css:clean', function (cb) {
    return del('./assets/css/stylesheet.css', cb);
});

/**
 * Watch js files and build
 */
gulp.task('js:watch', ['js:compile'], function () {
    gulp.watch(['./src/**/*.js'], { debounceDelay: 2000 }, ['js:compile']);
});

/**
 * Watch css files and build
 */
gulp.task('css:watch', ['css:compile'], function () {
    gulp.watch('./less/**/*.less', { debounceDelay: 2000 }, ['css:compile']);
});