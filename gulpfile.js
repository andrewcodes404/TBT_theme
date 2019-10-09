'use strict'

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel')

// Start browserSync server

//  ☠️ ☠️ ☠️ ☠️ ☠️ ☠️ ☠️
// change the proxy server to
// your MAMP PRO one
// 👇 👇 👇 👇 👇 👇 👇
gulp.task('browserSync', function() {
    browserSync.init({
        proxy: 'tbtruth:8888/',
    })

    gulp.watch('./style/scss/**/**/*.scss', gulp.parallel('sass'))
    gulp.watch('./*.php').on('change', browserSync.reload)
    gulp.watch('./js/main.js', gulp.parallel('scripts'))
})

gulp.task('sass', function() {
    return gulp
        .src('./style/scss/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(
            autoprefixer({
                // browsers: ['last 2 versions'],
                cascade: false,
            })
        )
        .pipe(gulp.dest('./style/css'))
        .pipe(cssnano())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./style/css'))
        .pipe(browserSync.stream())
})

// FOR YOUR JS
gulp.task('scripts', function() {
  return gulp
    .src('./js/main.js')
    .pipe(rename('main.min.js'))
    .pipe(babel({ presets: ['@babel/env'] }))
    .pipe(uglify())
    .pipe(gulp.dest('js/'))
    .pipe(browserSync.stream());
});

// Watchers
// gulp.task('watch', gulp.series('sass', 'browserSync'))
gulp.task('default', gulp.series('sass', 'browserSync'))

