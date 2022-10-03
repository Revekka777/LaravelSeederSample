Инструкция:

1) в консоли прописываем
    #docker-compose build
    #docker-compose up -d
2) после того, как контейнеры docker'а запустятся, заходим в контейнер php  и прописываем:
    #php artisan migrate (создание таблиц БД)
    #php artisan db:seed (засеивание таблиц БД)
3) при условии работающего контейнера nginx в докере переходим по ссылке localhost/post
