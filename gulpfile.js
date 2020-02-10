let gulp = require('gulp');
let browserSync = require('browser-sync').create();

gulp.task('default', function () {
    browserSync.init({
        startPath: 'index.html',
        server: {
            baseDir: "./dist/",
            directory: true
        }
    });
    gulp.watch('**/*.{html,css,js}').on('change', browserSync.reload);
});
