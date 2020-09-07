<?php

namespace App\Locale;

final class Russian implements LangInterface
{
	public static function code()
	{
		return 'ru';
	}

	public static function get_locale()
	{
		$locale = [
			'USERNAME' => 'логин',
			'PASSWORD' => 'пароль',
			'ENTER' => 'Enter',
			'CANCEL' => 'Отмена',
			'SIGN_IN' => 'Вход',
			'CLOSE' => 'Закрыть',
			'SETTINGS' => 'Параметры',
			'SEARCH' => 'Search ...',
			'MORE' => 'More',

			'USERS' => 'Пользователи',
			'SHARING' => 'Поделиться',
			'CHANGE_LOGIN' => 'Изменить логин',
			'CHANGE_SORTING' => 'Порядок сортировки',
			'SET_DROPBOX' => 'Подключить Dropbox',
			'ABOUT_LYCHEE' => 'О Lychee',
			'DIAGNOSTICS' => 'Диагностика',
			'DIAGNOSTICS_GET_SIZE' => 'Request space usage',
			'LOGS' => 'Логи',
			'SIGN_OUT' => 'Выход',
			'UPDATE_AVAILABLE' => 'Доступно обновление!',
			'MIGRATION_AVAILABLE' => 'Migration available!',
			'DEFAULT_LICENSE' => 'Лицензия для новых загрузок:',
			'SET_LICENSE' => 'Установить лицензию',
			'SET_OVERLAY_TYPE' => 'Установить оверлей',
			'SET_MAP_PROVIDER' => 'Set OpenStreetMap tiles provider',

			'SMART_ALBUMS' => 'Метаальбомы',
			'SHARED_ALBUMS' => 'Общие альбомы',
			'ALBUMS' => 'Альбомы',
			'PHOTOS' => 'Фотографии',
			'SEARCH_RESULTS' => 'Search results',

			'RENAME' => 'Переименовать',
			'RENAME_ALL' => 'Переименовать все',
			'MERGE' => 'Объединить',
			'MERGE_ALL' => 'Объединить все',
			'MAKE_PUBLIC' => 'Сделать публичным',
			'SHARE_ALBUM' => 'Поделиться альбомом',
			'SHARE_PHOTO' => 'Поделиться фото',
			'VISIBILITY_ALBUM' => 'Album Visibility',
			'VISIBILITY_PHOTO' => 'Photo Visibility',
			'DOWNLOAD_ALBUM' => 'Скачать альбом',
			'ABOUT_ALBUM' => 'Об альбоме',
			'DELETE_ALBUM' => 'Удалить альбом',
			'MOVE_ALBUM' => 'Move Album',
			'FULLSCREEN_ENTER' => 'Полный экран',
			'FULLSCREEN_EXIT' => 'Оконный режим',

			'DELETE_ALBUM_QUESTION' => 'Удалить альбом и все фото',
			'KEEP_ALBUM' => 'Сохранить альбом',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Вы точно хотите удалить альбом',
			'DELETE_ALBUM_CONFIRMATION_2' => 'со всеми фотографиями? Это действие необратимо!',

			'DELETE_ALBUMS_QUESTION' => 'Удалить альбом и фотографии',
			'KEEP_ALBUMS' => 'Сохранить альбомы',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Вы точно хотите удалить альбомы',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'со всеми фотографиями? Это действие необратимо!',

			'DELETE_UNSORTED_CONFIRM' => 'Вы точно хотите удалить все фото из \'Unsorted\'?<br>Это действие необратимо!',
			'CLEAR_UNSORTED' => 'Очистить Unsorted',
			'KEEP_UNSORTED' => 'Сохранить Unsorted',

			'EDIT_SHARING' => 'Доступ',
			'MAKE_PRIVATE' => 'Сделать личным',

			'CLOSE_ALBUM' => 'Закрыть альбом',
			'CLOSE_PHOTO' => 'Закрыть фото',
			'CLOSE_MAP' => 'Close Map',

			'ADD' => 'Добавить',
			'MOVE' => 'Переместить',
			'MOVE_ALL' => 'Переместить все',
			'DUPLICATE' => 'Скопировать',
			'DUPLICATE_ALL' => 'Скопировать все',
			'COPY_TO' => 'Скопировать в...',
			'COPY_ALL_TO' => 'Скопировать все в...',
			'DELETE' => 'Удалить',
			'DELETE_ALL' => 'Удалить все',
			'DOWNLOAD' => 'Скачать',
			'DOWNLOAD_ALL' => 'Download Selected',
			'UPLOAD_PHOTO' => 'Загрузить фото',
			'IMPORT_LINK' => 'Загрузить по ссылке',
			'IMPORT_DROPBOX' => 'Импортировать из Dropbox',
			'IMPORT_SERVER' => 'Импортировать с сервера',
			'NEW_ALBUM' => 'Создать альбом',
			'NEW_TAG_ALBUM' => 'New Tag Album',

			'TITLE_NEW_ALBUM' => 'Название нового альбома:',
			'UNTITLED' => 'Безымянный',
			'UNSORTED' => 'Не отсортированные',
			'STARRED' => 'Отмеченные',
			'RECENT' => 'Последние',
			'PUBLIC' => 'Общие',
			'NUM_PHOTOS' => 'фотографий',

			'CREATE_ALBUM' => 'Создать альбом',
			'CREATE_TAG_ALBUM' => 'Create Tag Album',

			'STAR_PHOTO' => 'Отметить фото',
			'STAR' => 'Отметить',
			'STAR_ALL' => 'Отметить все',
			'TAGS' => 'Теги',
			'TAGS_ALL' => 'теги для всех',
			'UNSTAR_PHOTO' => 'Снять отметку',

			'FULL_PHOTO' => 'Полный размер',
			'ABOUT_PHOTO' => 'О фотографии',
			'DISPLAY_FULL_MAP' => 'Map',
			'DIRECT_LINK' => 'Прямая ссылка',
			'DIRECT_LINKS' => 'Direct Links',

			'ALBUM_ABOUT' => 'Об альбоме',
			'ALBUM_BASICS' => 'Основное',
			'ALBUM_TITLE' => 'Заголовок',
			'ALBUM_NEW_TITLE' => 'Новый заголовок альбома:',
			'ALBUMS_NEW_TITLE_1' => 'Введите заголовок для всех',
			'ALBUMS_NEW_TITLE_2' => 'выбранных альбомов:',
			'ALBUM_SET_TITLE' => 'Сохранить заголовок',
			'ALBUM_DESCRIPTION' => 'Описание',
			'ALBUM_SHOW_TAGS' => 'Tags to show',
			'ALBUM_NEW_DESCRIPTION' => 'Введите описание этого альбома:',
			'ALBUM_SET_DESCRIPTION' => 'Сохранить описание',
			'ALBUM_NEW_SHOWTAGS' => 'Enter tags of photos that will be visible in this album:',
			'ALBUM_SET_SHOWTAGS' => 'Set tags to show',
			'ALBUM_ALBUM' => 'Альбом',
			'ALBUM_CREATED' => 'Создано',
			'ALBUM_IMAGES' => 'Фотографий',
			'ALBUM_VIDEOS' => 'Videos',
			'ALBUM_SUBALBUMS' => 'Subalbums',
			'ALBUM_SHARING' => 'Общее',
			'ALBUM_SHR_YES' => 'Да',
			'ALBUM_SHR_NO' => 'Нет',
			'ALBUM_PUBLIC' => 'Доступ',
			'ALBUM_PUBLIC_EXPL' => 'Album can be viewed by others, subject to the restrictions below.',
			'ALBUM_FULL' => 'Original',
			'ALBUM_FULL_EXPL' => 'Full-resolution pictures are available.',
			'ALBUM_HIDDEN' => 'Скрытый',
			'ALBUM_HIDDEN_EXPL' => 'Альбом доступен только по прямой ссылке.',
			'ALBUM_DOWNLOADABLE' => 'Скачивание разрешено',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Гости фотогалереи могут скачать этот альбом.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Display social media sharing links.',
			'ALBUM_PASSWORD' => 'Пароль',
			'ALBUM_PASSWORD_PROT' => 'Защищено паролем',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Альбом защищён паролем.',
			'ALBUM_PASSWORD_REQUIRED' => 'Этот альбом защищён паролем. Введите пароль для его просмотра:',
			'ALBUM_MERGE_1' => 'Вы точно хотите объединить альбом',
			'ALBUM_MERGE_2' => 'с альбомом',
			'ALBUMS_MERGE' => 'Вы точно хотите объединить все выбранные альбомы в альбом',
			'MERGE_ALBUM' => 'Объединить альбомы',
			'DONT_MERGE' => 'Не объединять',
			'ALBUM_MOVE_1' => 'Вы точно хотите переместить альбом',
			'ALBUM_MOVE_2' => 'в альбом',
			'ALBUMS_MOVE' => 'Вы точно хотите объединить все выбранные альбомы в альбом',
			'MOVE_ALBUMS' => 'Переместить альбомы',
			'NOT_MOVE_ALBUMS' => 'Не перемещать',
			'ROOT' => 'Root',
			'ALBUM_REUSE' => 'Авторские права',
			'ALBUM_LICENSE' => 'Лицензия',
			'ALBUM_SET_LICENSE' => 'Установить лицензию',
			'ALBUM_LICENSE_HELP' => 'Помочь выбрать?',
			'ALBUM_LICENSE_NONE' => 'Нет',
			'ALBUM_RESERVED' => 'Все права защищены',

			'PHOTO_ABOUT' => 'Описание',
			'PHOTO_BASICS' => 'Основное',
			'PHOTO_TITLE' => 'Заголовок',
			'PHOTO_NEW_TITLE' => 'Введите новый заголовок для этого фото:',
			'PHOTO_SET_TITLE' => 'Сохранить заголовок',
			'PHOTO_UPLOADED' => 'Загружено',
			'PHOTO_DESCRIPTION' => 'Описание',
			'PHOTO_NEW_DESCRIPTION' => 'Введите описание для этого фото:',
			'PHOTO_SET_DESCRIPTION' => 'Сохранить описание',
			'PHOTO_NEW_LICENSE' => 'Добавить лицензию',
			'PHOTO_SET_LICENSE' => 'Сохранить лицензию',
			'PHOTO_LICENSE' => 'Лицензия',
			'PHOTO_REUSE' => 'Авторские права',
			'PHOTO_LICENSE_NONE' => 'Нет',
			'PHOTO_RESERVED' => 'Все права защищены',
			'PHOTO_LATITUDE' => 'Latitude',
			'PHOTO_LONGITUDE' => 'Longitude',
			'PHOTO_ALTITUDE' => 'Altitude',
			'PHOTO_IMGDIRECTION' => 'Direction',
			'PHOTO_LOCATION' => 'Location',
			'PHOTO_IMAGE' => 'Изображение',
			'PHOTO_VIDEO' => 'Video',
			'PHOTO_SIZE' => 'Размер',
			'PHOTO_FORMAT' => 'Формат',
			'PHOTO_RESOLUTION' => 'Разрешение',
			'PHOTO_DURATION' => 'Duration',
			'PHOTO_FPS' => 'Frame rate',
			'PHOTO_TAGS' => 'Теги',
			'PHOTO_NOTAGS' => 'Тегов нет',
			'PHOTO_NEW_TAGS' => 'Укажите теги для этого фото. Можно добавить несколько тегов, разделяя их запятыми:',
			'PHOTO_NEW_TAGS_1' => 'Введите теги для всех',
			'PHOTO_NEW_TAGS_2' => 'выбранных фотографий. Имеющиеся теги будут перезаписаны. Вы можете добавить несколько тегов, разделяя их запятыми:',
			'PHOTO_SET_TAGS' => 'Сохранить теги',
			'PHOTO_CAMERA' => 'Камера',
			'PHOTO_CAPTURED' => 'Дата съёмки',
			'PHOTO_MAKE' => 'Производитель',
			'PHOTO_TYPE' => 'Тип/Модель',
			'PHOTO_LENS' => 'Оптика',
			'PHOTO_SHUTTER' => 'Скорость затвора',
			'PHOTO_APERTURE' => 'Диафрагма',
			'PHOTO_FOCAL' => 'Фокусное расстояние',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Доступность',
			'PHOTO_SHR_PLUBLIC' => 'Публичный',
			'PHOTO_SHR_ALB' => 'Да (альбом)',
			'PHOTO_SHR_PHT' => 'Да (фото)',
			'PHOTO_SHR_NO' => 'Нет',
			'PHOTO_DELETE' => 'Удалить фото',
			'PHOTO_KEEP' => 'Сохранить фото',
			'PHOTO_DELETE_1' => 'Вы точно хотите удалить фото',
			'PHOTO_DELETE_2' => '? Это действие необратимо!',
			'PHOTO_DELETE_ALL_1' => 'Вы точно хотите удалить все',
			'PHOTO_DELETE_ALL_2' => 'выбранные фото? Это действие необратимо!',
			'PHOTOS_NEW_TITLE_1' => 'Введите заголовок для всех',
			'PHOTOS_NEW_TITLE_2' => 'выбранных фото:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Это фото находится в публичном альбоме. Чтобы сделать его личным или общедоступным, измените параметры альбома.',
			'PHOTO_SHOW_ALBUM' => 'Перейти к альбому',
			'PHOTO_PUBLIC' => 'Public',
			'PHOTO_PUBLIC_EXPL' => 'Photo can be viewed by others, subject to the restrictions below.',
			'PHOTO_FULL' => 'Original',
			'PHOTO_FULL_EXPL' => 'Full-resolution picture is available.',
			'PHOTO_HIDDEN' => 'Hidden',
			'PHOTO_HIDDEN_EXPL' => 'Only people with the direct link can view this photo.',
			'PHOTO_DOWNLOADABLE' => 'Downloadable',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Visitors of your gallery can download this photo.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Display social media sharing links.',
			'PHOTO_PASSWORD_PROT' => 'Password protected',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Photo only accessible with a valid password.',
			'PHOTO_EDIT_SHARING_TEXT' => 'The sharing properties of this photo will be changed to the following:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Because this photo is located in a public album, it inherits that album\'s visibility settings.  Its current visibility is shown below for informational purposes only.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'The visibility of this photo can be fine-tuned using global Lychee settings. Its current visibility is shown below for informational purposes only.',
			'PHOTO_SHARING_CONFIRM' => 'Save',

			'LOADING' => 'Загрузка',
			'ERROR' => 'Ошибка',
			'ERROR_TEXT' => 'Ой, что-то пошло не так... Пожалуйста, обновите страницу и попробуйте повторить.',
			'ERROR_DB_1' => 'Не могу подключиться к базе данных: доступ запрещён. Перепроверьте хост, логин и пароль и убедитесь, что корректно настроили доступ для хоста и пользователя фотогалереи.',
			'ERROR_DB_2' => 'Не удаётся создать базу данных. Перепроверьте хост, логин и пароль и убедитесь, что указанный пользователь имеет права на модификацию и добавление данных в БД.',
			'ERROR_CONFIG_FILE' => "Не удаётся сохранить конфигурацию. Доступ к <b>'data/'</b> запрещён. Пожалуйста, задайте для <b>'data/'</b> и <b>'uploads/'</b> права на чтение, запись и выполнение файлов. За подробной информацией обратитесь к readme.",
			'ERROR_UNKNOWN' => 'Произошло нечто неожиданное... Пожалуйста, повторите и проверьте папку установки и параметры сервера. За подробной информацией обратитесь к readme.',
			'ERROR_LOGIN' => 'Не могу сохранить регистрационные данные. Попробуйте использовать другие логин и пароль.',
			'ERROR_MAP_DEACTIVATED' => 'Map functionality has been deactivated under settings.',
			'ERROR_SEARCH_DEACTIVATED' => 'Search functionality has been deactivated under settings.',
			'SUCCESS' => 'Ок',
			'RETRY' => 'Повторить',

			'SETTINGS_SUCCESS_LOGIN' => 'Учётные данные обновлены.',
			'SETTINGS_SUCCESS_SORT' => 'Порядок сортировки обновлён.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Ключ Dropbox обновлён.',
			'SETTINGS_SUCCESS_LANG' => 'Язык изменён',
			'SETTINGS_SUCCESS_LAYOUT' => 'Компоновка обновлена',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Данные наложения обновлены',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Public search updated',
			'SETTINGS_SUCCESS_LICENSE' => 'Лицензия по умолчанию установлена',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Map display settings updated',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Map display settings for public albums updated',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Map provider settings updated',

			'DB_INFO_TITLE' => 'Укажите данные для подключения к базе данных:',
			'DB_INFO_HOST' => 'Сервер баз данных (не обязательно)',
			'DB_INFO_USER' => 'Логин в БД',
			'DB_INFO_PASSWORD' => 'Пароль в БД',
			'DB_INFO_TEXT' => 'Lychee создаст базу данных. Если требуется, Вы можете указать существующую БД:',
			'DB_NAME' => 'Имя БД (не обязательно)',
			'DB_PREFIX' => 'Префикс таблиц (не обязательно)',
			'DB_CONNECT' => 'Подключиться',

			'LOGIN_TITLE' => 'Введите логин и пароль для входа:',
			'LOGIN_USERNAME' => 'Новый логин',
			'LOGIN_PASSWORD' => 'Новый пароль',
			'LOGIN_PASSWORD_CONFIRM' => 'Повторите пароль',
			'LOGIN_CREATE' => 'Создать',

			'PASSWORD_TITLE' => 'Введите текущий пароль:',
			'USERNAME_CURRENT' => 'Текущий логин',
			'PASSWORD_CURRENT' => 'Текущий пароль',
			'PASSWORD_TEXT' => 'Ваши логин и пароль будут изменены на следующие:',
			'PASSWORD_CHANGE' => 'Изменить данные',

			'EDIT_SHARING_TITLE' => 'Параметры доступа',
			'EDIT_SHARING_TEXT' => 'Параметры доступа к выбранному альбому будут изменены на следующие:',
			'SHARE_ALBUM_TEXT' => 'Этот альбом будет доступен со следующими условиями:',
			'ALBUM_SHARING_CONFIRM' => 'Save',

			'SORT_ALBUM_BY_1' => 'Сортировать альбомы',
			'SORT_ALBUM_BY_2' => 'в порядке',
			'SORT_ALBUM_BY_3' => '.',

			'SORT_ALBUM_SELECT_1' => 'даты создания',
			'SORT_ALBUM_SELECT_2' => 'заголовка',
			'SORT_ALBUM_SELECT_3' => 'описания',
			'SORT_ALBUM_SELECT_4' => 'доступности',
			'SORT_ALBUM_SELECT_5' => 'свежайшего фото',
			'SORT_ALBUM_SELECT_6' => 'старейшего фото',

			'SORT_PHOTO_BY_1' => 'Сортировать фотографии',
			'SORT_PHOTO_BY_2' => 'в порядке',
			'SORT_PHOTO_BY_3' => '.',

			'SORT_PHOTO_SELECT_1' => 'загрузки',
			'SORT_PHOTO_SELECT_2' => 'съёмки',
			'SORT_PHOTO_SELECT_3' => 'заголовка',
			'SORT_PHOTO_SELECT_4' => 'описания',
			'SORT_PHOTO_SELECT_5' => 'доступности',
			'SORT_PHOTO_SELECT_6' => 'отметки',
			'SORT_PHOTO_SELECT_7' => 'формата',

			'SORT_ASCENDING' => 'По возрастанию',
			'SORT_DESCENDING' => 'По убыванию',
			'SORT_CHANGE' => 'Сменить сортировку',

			'DROPBOX_TITLE' => 'Задать ключ Dropbox',
			'DROPBOX_TEXT' => "Для загрузки фото из Dropbox Вам нужен ключ, который можно получить на <a href='https://www.dropbox.com/developers/apps/create'>специальной странице</a>. Создайте личный ключ и вставьте здесь:",

			'LANG_TEXT' => 'Change Lychee language to:',
			'LANG_TITLE' => 'Change Language',
			'PUBLIC_SEARCH_TEXT' => 'Разрешить публичный поиск:',
			'IMAGE_OVERLAY_TEXT' => 'Данные для наложения по умолчанию:',
			'OVERLAY_TYPE' => 'Данные для наложения:',
			'OVERLAY_EXIF' => 'EXIF данные',
			'OVERLAY_DESCRIPTION' => 'Описание фото',
			'OVERLAY_DATE' => 'Дата съёмки',
			'MAP_DISPLAY_TEXT' => 'Enable maps (provided by OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Enable maps for public albums (provided by OpenStreetMap):',
			'LOCATION_DECODING' => 'Decode GPS data into location name',
			'LOCATION_SHOW' => 'Show location name',
			'LOCATION_SHOW_PUBLIC' => 'Show location name for public mode',
			'MAP_PROVIDER' => 'Provider of OpenStreetMap tiles:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (no HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (no HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (no HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University of Erlangen, Germany (only HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Include photos of subalbums on map:',

			'LAYOUT_TYPE' => 'Компоновка фото:',
			'LAYOUT_SQUARES' => 'Квадратные превью',
			'LAYOUT_JUSTIFIED' => 'По формату, выровнять',
			'LAYOUT_UNJUSTIFIED' => 'По формату, не выравнивать',
			'SET_LAYOUT' => 'Изменить компоновку',

			'VIEW_NO_RESULT' => 'Не найдено',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Нет публичных альбомов',
			'VIEW_NO_CONFIGURATION' => 'Не настроено',
			'VIEW_PHOTO_NOT_FOUND' => 'Фото не найдено',

			'NO_TAGS' => 'Тегов нет',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Теперь вы можете управлять новыми фото.',
			'UPLOAD_COMPLETE' => 'Загрузка завершена',
			'UPLOAD_COMPLETE_FAILED' => 'Ошибка загрузки одного или более фото.',
			'UPLOAD_IMPORTING' => 'Импорт',
			'UPLOAD_IMPORTING_URL' => 'импорт по URL',
			'UPLOAD_UPLOADING' => 'Выгрузка',
			'UPLOAD_FINISHED' => 'Завершено',
			'UPLOAD_PROCESSING' => 'Выполняется',
			'UPLOAD_FAILED' => 'Ошибка',
			'UPLOAD_FAILED_ERROR' => 'Загрузка не удалась: сервер вернул ошибку.',
			'UPLOAD_FAILED_WARNING' => 'Загрузка не удалась, сервер вернул предупреждение.',
			'UPLOAD_SKIPPED' => 'Пропущено',
			'UPLOAD_ERROR_CONSOLE' => 'Подробности смотрите в консоли браузера.',
			'UPLOAD_UNKNOWN' => 'Сервер вернул непонятный ответ. Проверьте консоль браузера.',
			'UPLOAD_ERROR_UNKNOWN' => 'Загрузка не удалась: сервер вернул что-то непонятное!',
			'UPLOAD_IN_PROGRESS' => 'Lychee выполняет выгрузку.',
			'UPLOAD_IMPORT_WARN_ERR' => 'Импорт был завершён, но обнаружены ошибки или предупреждения. Пожалуйста, проверьте лог (Settings -> Логи).',
			'UPLOAD_IMPORT_COMPLETE' => 'Импорт завершён',
			'UPLOAD_IMPORT_INSTR' => 'Укажите прямую ссылку на фото для импорта:',
			'UPLOAD_IMPORT' => 'Импорт',
			'UPLOAD_IMPORT_SERVER' => 'Загрузка с сервера',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Каталог пуст или не содержит файлов, которые можно обработать. Пожалуйста, проверьте лог (Settings -> Логи).',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Будет выполнен импорт всех изображений из указанного каталога и всех его подкаталогов, после чего <b>исходные файлы будут удалены</b>, если это возможно.',
			'UPLOAD_ABSOLUTE_PATH' => 'Полный путь к каталогу',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Не могу импортировать: указанный каталог пуст!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Delete originals',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Original files will be deleted after the import when possible.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Low memory condition!',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'The import process on the server is approaching the memory limit and may end up being terminated prematurely.',
			'UPLOAD_WARNING' => 'Warning',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'The given path is not a readable directory!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'The given path is a reserved path of Lychee!',
			'UPLOAD_IMPORT_UNREADABLE' => 'Could not read the file!',
			'UPLOAD_IMPORT_FAILED' => 'Could not import the file!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Unsupported file type!',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Could not create the album!',

			'ABOUT_SUBTITLE' => 'Self-hosted photo-management done right',
			'ABOUT_DESCRIPTION' => "- это бесплатный фотоменеджер для Вашего сервера или хостинга. Установка занимает считанные секунды. Загружайте, редактируйте и делитесь фотографиями как в любимом приложении! Lychee обеспечит Вас всем необходимым, включая безопасность хранения Ваших фотографий! <br />На русский язык перевёл Евгений Лебедев. Пожалуйста, <a href='mailto://k-t-c(at)ya.ru'>дайте мне знать</a>, если заметите неточности.",
			'FOOTER_COPYRIGHT' => 'All images on this website are subject to Copyright by ',
			'HOSTED_WITH_LYCHEE' => 'Hosted with Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Copy to clipboard',
			'URL_COPIED_TO_CLIPBOARD' => 'Copied URL to clipboard!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Direct links to image files:',
			'PHOTO_MEDIUM' => 'Medium',
			'PHOTO_MEDIUM_HIDPI' => 'Medium HiDPI',
			'PHOTO_SMALL' => 'Thumb',
			'PHOTO_SMALL_HIDPI' => 'Thumb HiDPI',
			'PHOTO_THUMB' => 'Square thumb',
			'PHOTO_THUMB_HIDPI' => 'Square thumb HiDPI',
			'PHOTO_LIVE_VIDEO' => 'Video part of live-photo',
			'PHOTO_VIEW' => 'Lychee Photo View:',

			'PHOTO_EDIT_ROTATECWISE' => 'Rotate clockwise',
			'PHOTO_EDIT_ROTATECCWISE' => 'Rotate counter-clockwise',
		];

		return $locale;
	}
}
