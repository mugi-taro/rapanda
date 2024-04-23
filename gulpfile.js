const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

const plumber = require('gulp-plumber');
const notify = require('gulp-notify');

const postcss = require('gulp-postcss')
const cssdeclsort = require('css-declaration-sorter' );
const autoprefixer = require("autoprefixer");

const cache = require('gulp-cache');

gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(plumber({
      errorHandler: notify.onError (
        "Error: <%= error.message %>"
    )}))
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(postcss([cssdeclsort({ order: 'smacss' }) ])) 
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('./dist/css'));
});


gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.task('sass'));
});



