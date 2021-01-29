var gulp = require('gulp'),
    php = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    reload  = browserSync.reload,
    babel = require('gulp-babel'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    cssnext = require('postcss-cssnext'),
    useref = require('gulp-useref'),
    uglify = require('gulp-uglify'),
    gulpIf = require('gulp-if'),
    cssnano = require('gulp-cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache'),
    del = require('del'),
    runSequence = require('run-sequence');

// Php
gulp.task('php', function() {
  php.server({
    base: 'app',
    port: 3000,
    stdio: 'ignore'
  });
});

// Browser sinc
gulp.task('browserSync', ['php'], function() {
  browserSync({
    proxy: '127.0.0.1:3000',
    port: 3000,
    open: true,
    notify: false
  });
});

// Babel (optional)
gulp.task('babel', function() {
    gulp.src('app/scripts/**/*.js')
        .pipe(babel())
        .on('error', console.error.bind(console))
        .pipe(gulp.dest('app/js/'))
});

// Sass & Postcss: Cssnext
gulp.task('sass', function() {
  var plugins = [
    cssnext({browsers: ['IE >= 9', 'last 3 versions']}),
  ];

  return gulp.src('app/scss/**/*.scss')
      	.pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(plugins))
        .pipe(sourcemaps.write(''))
        .pipe(gulp.dest('app/css'))
});

// Watch sass, php & js
gulp.task('watch', ['browserSync'], function () {
  gulp.watch('app/scss/**/*.scss', ['sass', reload]);
  gulp.watch(['app/*.php'], ['', reload]);
  gulp.watch('app/js/**/*.js', ['', reload]);
  // Other watchers
})

// Minified css & js
gulp.task('useref', function(){
  return gulp.src('app/*.php')
        .pipe(useref())
        // Minifies only if it's a JavaScript file
        .pipe(gulpIf('*.js', uglify()))
        .pipe(gulp.dest('dist'))
        // Minifies only if it's a CSS file
        .pipe(gulpIf('*.css', cssnano()))
        .pipe(gulp.dest('dist'))
});

// Optimizing images
gulp.task('images', function(){
  return gulp.src('app/assets/img/**/*.+(png|jpg|jpeg|gif|svg|ico)')
         // Caching images that ran through imagemin
        .pipe(cache(imagemin({
            interlaced: true
          })))
        .pipe(gulp.dest('dist/assets/img'))
});

//Manifests to dist
gulp.task('manifest', function() {
  return gulp.src('app/manifest.+(json|webapp)')
  .pipe(gulp.dest('dist'))
});

// Assets to dist
gulp.task('assets', function() {
  return gulp.src('app/assets/**')
  .pipe(gulp.dest('dist/assets'))
});

// Map to dist
gulp.task('sourcemaps', function() {
  return gulp.src('app/css/*.css.map')
  .pipe(gulp.dest('dist/css'))
});

// Cleaning up generated files automatically
gulp.task('clean:dist', function() {
  return del.sync('dist');
});

// Combining Gulp tasks for building
gulp.task('build', function (callback) {
  runSequence(
    'clean:dist',
    'assets',
    'sass',
    'useref',
    'images',
    'sourcemaps',
    'manifest',
    callback
  )
});

// Combining Gulp tasks for development
gulp.task('serve', function (callback) {
  runSequence(
    'watch',
    callback
  )
})
