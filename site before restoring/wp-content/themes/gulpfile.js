'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
 
gulp.task('sass', function () {
  return gulp.src('jo/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
		browsers: [  "Android 2.3",
		"Android >= 6",
		"Chrome >= 20",
		"Firefox >= 24",
		"Explorer >= 8",
		"iOS >= 7",
		"Opera >= 12",
		"Safari >= 11"],
		cascade: false
	}))
    .pipe(gulp.dest('jo/'));
});
 
gulp.task('watch', function () {
  gulp.watch('jo/sass/style.scss', ['sass']);
});