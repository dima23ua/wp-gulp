import dartSass from 'dart-sass';
import gulpSass from 'gulp-sass';
import rename from 'gulp-rename';
import cleanCss from 'gulp-clean-css';
import webpcss from 'gulp-webpcss';
import autoprefixer from 'gulp-autoprefixer';
import groupCssMediaQueries from 'gulp-group-css-media-queries';

const sass = gulpSass(dartSass);

export const scss = () => {
   return app.gulp.src(app.path.src.scss, { sourcemaps: app.isDev })
      .pipe(app.plugins.plumber(
         app.plugins.notify.onError({
            title: "SCSS",
            message: "Error: <%= error.message %>"
         })
      ))
      .pipe(app.plugins.replace(/@img\//g, '../img/'))
      .pipe(sass({
         outputStyle: 'expanded' // Выходной стиль для исходного файла
      }))
      .pipe(
         autoprefixer({
            grid: true,
            overrideBrowserslist: ["last 3 versions"],
            cascade: true
         })
      )
      .pipe(app.gulp.dest(app.path.build.css)) // Создаем исходный CSS

      .pipe(
         sass({
            outputStyle: 'compressed' // Сжатый стиль для минифицированного файла
         })
      )
      .pipe(
         autoprefixer({
            grid: true,
            overrideBrowserslist: ["last 3 versions"],
            cascade: true
         })
      )
      .pipe(rename({
         extname: ".min.css"
      }))
      .pipe(app.gulp.dest(app.path.build.css)) // Создаем минифицированный CSS
      .pipe(app.plugins.browsersync.stream());
}