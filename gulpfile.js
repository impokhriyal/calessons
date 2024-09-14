'use strict';

var gulp          = require('gulp');
var sass          = require('gulp-sass')(require('sass'));
var uglify        = require('gulp-uglify');
var concat        = require('gulp-concat');
var browserSync   = require('browser-sync').create();
var sourcemaps    = require('gulp-sourcemaps');
var autoprefixer  = require('gulp-autoprefixer');
var rename        = require('gulp-rename');
var rtlcss        = require('gulp-rtlcss');
var gulpif        = require('gulp-if');
var lineec        = require('gulp-line-ending-corrector');

var enableRTL     = false; // TODO: RTL CSS will be only generated if this is TRUE

// Paths
var paths = {
    root: './',
    dist: {
        css: 'assets/css/',
        js: 'assets/js/',
        imgs: 'assets/img/'
    },
    src: {
        scss: 'src/scss/**/*.scss',
        css: 'src/css/',
        js: 'src/js/',
        vendor: 'src/vendor/',
        imgs: 'src/img/**/*'
    }
};

var vendorCSS = [
    paths.src.vendor + 'font-awesome/css/all.min.css',
    paths.src.vendor + 'animate/animate.css',
    paths.src.vendor + 'tiny-slider/tiny-slider.css',
    paths.src.vendor + 'glightbox/css/glightbox.css'
];

var jsSRC = [
    paths.src.js + 'wowjs/wow.min.js',
    paths.src.js + 'lazyload/lazysizes.js',
    paths.src.js + 'functions.js',
    paths.src.js + 'custom.js'
];

var vendorJS = [
    paths.src.js + 'tiny-slider/tiny-slider.js',
    paths.src.js + 'jarallax/jarallax.js',
    paths.src.js + 'jarallax/jarallax-video.js',
    // paths.src.js + 'nicescroll/jquery.nicescroll.min.js',
    paths.src.js + 'glightbox/glightbox.min.js'
];

// Compile sass into CSS
gulp.task('sass', function() {
    return gulp.src(paths.src.scss)
      .pipe(sourcemaps.init())
      .pipe(sass.sync({
          outputStyle: 'compressed'
      }).on('error', sass.logError)) 
      .pipe(autoprefixer({
          overrideBrowserslist: ['last 2 versions']
      }))
      .pipe(gulp.dest(paths.src.css))
      .pipe(gulpif(enableRTL, rtlcss()))
      .pipe(gulpif(enableRTL, rename({ suffix: '-rtl' })))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(paths.dist.css))
      .pipe(lineec())
      .pipe(browserSync.stream());
});

gulp.task('vendorcss', function() {
    return gulp.src(vendorCSS)
      .pipe(concat('social-emotional-learning.css'))
      .pipe(sourcemaps.init())
      .pipe(gulp.dest(paths.src.css))
      .pipe(sass.sync({
        //   outputStyle: 'expanded',
          outputStyle: 'compressed',
      }).on('error', sass.logError)) 
      .pipe(autoprefixer({
          overrideBrowserslist: ['last 2 versions']
      }))
      .pipe(gulp.dest(paths.dist.css))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(paths.dist.css))
      .pipe(browserSync.stream());
});

gulp.task('js', function() {
  return gulp.src(jsSRC)
  .pipe(concat('social-skills.js'))
  .pipe(sourcemaps.init())
  .pipe(uglify())
  .pipe(lineec())
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(paths.dist.js));
});

gulp.task('vendorjs', function() {
  return gulp.src(vendorJS)
  .pipe(concat('social-emotional-learning.js'))
  .pipe(sourcemaps.init())
  .pipe(uglify())
  .pipe(lineec())
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(paths.dist.js));
});

// Static Server
gulp.task('serve', function(done) {
    browserSync.init({
        // server: paths.root,
        open: 'external',
        proxy: 'http://localhost/52worksheets.com/',
        port: 8080,
    });
    done();
});

// watching scss/html files
gulp.task('watch', function(done) {
    gulp.watch(paths.src.scss, gulp.series('sass'));
    gulp.watch(paths.src.scss).on('change', browserSync.reload);
    gulp.watch(paths.src.js, gulp.series('js'));
    gulp.watch(paths.src.js).on('change', browserSync.reload);
    gulp.watch(paths.src.vendor, gulp.series('vendorcss'));
    gulp.watch(paths.src.vendor, gulp.series('vendorjs'));
    gulp.watch(paths.src.vendor).on('change', browserSync.reload);
    done();
});

gulp.task('default', gulp.series('sass', 'vendorcss', 'js', 'vendorjs', 'serve', 'watch'));