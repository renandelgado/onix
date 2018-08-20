'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var sourcemap = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');

//Declaração de variáveis

var scssFiles = 'sass/**/*.scss';

var cssDest = 'assets/css';

var scssForComp = {outputStyle: 'compressed'}

//Campo para Tasks css

gulp.task('sass', function(){
	return gulp.src(scssFiles)
	.pipe(sourcemap.init())
	.pipe(sass(scssForComp).on('error', sass.logError))
	.pipe(postcss([autoprefixer({browsers: ['last 2 versions']})]))
	.pipe(cssmin())
	.pipe(rename({suffix: '.min'}))
	.pipe(sourcemap.write('maps'))
	.pipe(gulp.dest(cssDest));
});

gulp.task('watch', function(){
	gulp.watch(scssFiles, ['sass']);
});

gulp.task('default', ['sass', 'watch']);