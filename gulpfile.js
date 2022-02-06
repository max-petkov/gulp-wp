const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("autoprefixer");
const postcss = require("gulp-postcss");
const cssnano = require("cssnano");
const purgecss = require("gulp-purgecss");
const concatCss = require("gulp-concat-css");
const imagemin = require("gulp-imagemin");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const mergeStream = require("merge-stream");
const browsersync = require("browser-sync").create();

// Creating PHP task
const php = {
  src: "src/*.php",
  build: "../custom_wordpress/wp-content/themes/mccclimatisation",
};
gulp.task("php", function () {
  return gulp.src(php.src).pipe(gulp.dest(php.build));
});

// Creating CSS task
const css = {
  src: "src/assets/scss/main.scss",
  watch: "src/assets/scss/**/*",
  dist: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/css",
  splide: "src/assets/libs/splidejs/splide.min.css",
};
gulp.task("css", function () {
  const scssMain = gulp
    .src(css.src)
    .pipe(sass())
    .pipe(
      purgecss({
        content: ["src/*.php"],
        safelist: [
          "nav-m-opened",
          "a",
          "li",
          "img",
          "li:last-child",
          "sub-menu",
          "fonts-loaded",
          "splide__pagination",
          "h4",
        ],
      })
    );
  const cssSplide = gulp.src(css.splide);

  return mergeStream(scssMain, cssSplide)
    .pipe(concatCss("main.bundle.css"))
    .pipe(postcss([autoprefixer(), cssnano()]))

    .pipe(gulp.dest(css.dist));
});

// Creating Font task
const fonts = {
  src: "src/assets/fonts/*.ttf",
  dist: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/fonts",
};
gulp.task("fonts", function () {
  return gulp.src(fonts.src).pipe(gulp.dest(fonts.dist));
});

// Creating Image task
const images = {
  src: "src/assets/images/*",
  dist: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/images",
};
gulp.task("images", function () {
  return gulp.src(images.src).pipe(imagemin()).pipe(gulp.dest(images.dist));
});

// Creating JS task
const js = {
  src: "src/assets/js/*.js",
  dist: "../custom_wordpress/wp-content/themes/mccclimatisation/assets/js",
  splide: "src/assets/libs/splidejs/splide.min.js",
};
gulp.task("js", function () {
  const jsMain = gulp.src(js.src);

  const jsSplide = gulp.src(js.splide);
  return mergeStream(jsMain, jsSplide)
    .pipe(concat("main.bundle.js"))
    .pipe(uglify())
    .pipe(gulp.dest(js.dist));
});

gulp.task("build", gulp.series("php", "css", "fonts", "images", "js"));

// Creating Watch task + Browserync
gulp.task("watch", function () {
  browsersync.init({
    proxy: "localhost/custom_wordpress",
    files: "../custom_wordpress/wp-content/themes/mccclimatisation",
    open: false,
    notify: false,
    ghostMode: false,
    ui: {
      port: 8001,
    },
  });

  gulp.watch(php.src, gulp.series("php")).on("change", browsersync.reload);
  gulp.watch(images.src, gulp.series("images"));
  gulp.watch(js.src, gulp.series("js"));
  gulp.watch(css.watch, gulp.series("css"));
});

gulp.task("default", gulp.series("build", "watch"));
