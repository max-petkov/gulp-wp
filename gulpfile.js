const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("autoprefixer");
const postcss = require("gulp-postcss");
const cssnano = require("cssnano");
const imagemin = require("gulp-imagemin");
const browsersync = require('browser-sync').create();

// Creating PHP task
const php = {
  src: "src/*.php",
  build: "../custom_wordpress/wp-content/themes/mccclimatisation"
};
gulp.task("php", function () {
  return gulp
    .src(php.src)
    .pipe(gulp.dest(php.build));
});

// Creating CSS task
const css = {
  src: "src/assets/scss/main.scss",
  watch: "src/assets/scss/**/*",
  build: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/css"
};
gulp.task("css", function () {
  return gulp
    .src(css.src)
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest(css.build));
});

// Creating Font task
const fonts = {
  src: "src/assets/fonts/*.ttf",
  build: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/fonts"
};
gulp.task("fonts", function () {
  return gulp
    .src(fonts.src)
    .pipe(gulp.dest(fonts.build));
});

// Creating Image task
const images = {
  src: "src/assets/images/*",
  build: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/images"
};
gulp.task("images", function () {
  return gulp
    .src(images.src)
    .pipe(imagemin())
    .pipe(gulp.dest(images.build));
});

gulp.task("build", gulp.series('php', 'css', 'fonts', 'images'));

gulp.task("watch", function() {
  browsersync.init({
    proxy: 'localhost/custom_wordpress',
    files: "../custom_wordpress/wp-content/themes/mccclimatisation",
    open: false,
    notify: false,
    ghostMode: false,
    ui: {
      port: 8001
    }
  });

  gulp.watch(php.src, gulp.series("php")).on("change", browsersync.reload);
  gulp.watch(images.src, gulp.series("images"));
  gulp.watch(css.watch, gulp.series("css"));
})

gulp.task('default', gulp.series('build', 'watch'));