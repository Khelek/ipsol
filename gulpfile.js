var gulp = require('gulp'),
	csso = require('gulp-csso'), // Минификация CSS
    imagemin = require('gulp-imagemin'), // Минификация изображений
    uglify = require('gulp-uglify'), // Минификация JS
    concat = require('gulp-concat'); // Склейка файлов
    var sass = require('gulp-sass');

gulp.task('js', function() {
    gulp.src(['app/assets/js/**/*.js'])
        .pipe(concat('application.js'))
        .pipe(gulp.dest('public/assets/js'));
});

gulp.task('images', function() {
    gulp.src('app/assets/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/assets/images'));
});

gulp.task('sass', function () {
    gulp.src('app/assets/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/assets/css'));
});
gulp.task('watch', function() {
  gulp.watch('app/assets/scss/**', ['sass']);
});
