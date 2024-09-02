import browserSync from 'browser-sync';

const startServer = browserSync.create(); // Создаём экземпляр browser-sync

export const server = (done) => {
    startServer.init({
        proxy: 'http://YOUR-DIR-NAME/', // Укажите URL вашего локального сервера
        port: 8000, // Порт, на котором будет работать сервер
        open: true, // Автоматически открывать браузер
        notify: false, // Отключаем уведомления в браузере
    });

    done();
};