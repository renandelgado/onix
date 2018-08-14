var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function(){
	return gulp.src('sass/**/*.scss').pipe(sass());
});