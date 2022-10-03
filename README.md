<ul>Инструкция:

<li>в консоли прописываем
    <p># docker-compose build</p>
    <p># docker-compose up -d</p>
</li>
<li>после того, как контейнеры docker'а запустятся, заходим в контейнер php  и прописываем:
    <p># php artisan migrate (создание таблиц БД)</p>
    <p># php artisan db:seed (засеивание таблиц БД)</p>
</li>
<li> при условии работающего контейнера nginx в докере переходим по ссылке localhost/post</li>
</ul>
