'use strict';

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var livereload = require('gulp-livereload');
var bower = require('gulp-bower');

var themeName = 'wordplate';

var config = {
  livereload: 'wp-content/themes/' + themeName + '/**/*.{css,js,html,png,jpg,gif,php}',
  scripts: {
    src: 'wp-content/themes/' + themeName + '/assets/scripts/**/*.js',
    dest: 'wp-content/themes/' + themeName + '/assets/'
  },
  styles: {
    src: 'wp-content/themes/' + themeName + '/assets/styles/**/*.{sass,scss}',
    dest: 'wp-content/themes/' + themeName + '/assets/',
    settings: {
      sourceComments: 'normal',
      errLogToConsole: true,
      imagePath: '/images',
      indentedSyntax: true
    }
  }
};

gulp.task('uglifyJs', function () {
  return gulp.src(config.scripts.src)
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
    .pipe(uglify())
    .pipe(gulp.dest(config.scripts.dest))
    .pipe(livereload());
});

gulp.task('styles', function () {
  return gulp.src(config.styles.src)
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
    .pipe(sass(config.styles.settings))
    .pipe(autoprefixer({browsers: ['last 2 version']}))
    .pipe(minifyCSS())
    .pipe(gulp.dest(config.styles.dest))
    .pipe(livereload());
});

gulp.task('bower', function () {
  return bower({cmd: 'update'});
});

gulp.task('build', ['uglifyJs', 'styles']);

gulp.task('watch', ['uglifyJs', 'styles'], function (callback) {
  livereload.listen();
  gulp.watch(config.scripts.src, ['uglifyJs']);
  gulp.watch(config.styles.src, ['styles']);
  gulp.watch('bower.json', ['bower']);
  gulp.watch([config.livereload]).on('change', livereload.changed);
});
