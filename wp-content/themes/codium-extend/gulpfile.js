	var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var prefix = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var path = require('path');

gulp.task('less', function() {
	return gulp.src('./less/style.less')  // only compile the entry file
		.pipe(less({
		  paths: ['.']
		}))
		.pipe(plumber())
		.pipe(prefix("last 9 version", "> 1%", "ie 9"), {cascade:true})
		.pipe(gulp.dest('./css'))
});
// gulp.task('less-twbs', function() {
// 	return gulp.src('./less/style.less')  // only compile the entry file
// 		.pipe(plumber())
// 		.pipe(less({
// 		  paths: ['.']
// 		}))
// 		.pipe(prefix("last 9 version", "> 1%", "ie 9"), {cascade:true})
// 		.pipe(gulp.dest('./css'))
// });
gulp.task('watch', function() {
	gulp.watch('./less/**/*.less', ['less']);  // Watch all the .less files, then run the less task
	// gulp.watch('./less/bootstrap/**/*.less', ['less-twbs']);  // Watch all the .less files, then run the less task
});

gulp.task('default', ['watch']); // Default will run the 'entry' watch task