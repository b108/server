<?php $TRANSLATIONS = array(
"Deletion failed" => "Удаление не удалось",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Предупреждение:</b> Приложения user_ldap и user_webdavauth несовместимы. Вы можете столкнуться с неожиданным поведением системы. Пожалуйста, обратитесь к системному администратору для отключения одного из них.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Предупреждение:</b> Модуль PHP LDAP не установлен, бэкэнд не будет работать. Пожалуйста, обратитесь к Вашему системному администратору, чтобы установить его.",
"Host" => "Хост",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Вы можете пропустить протокол, если Вам не требуется SSL. Затем начните с ldaps://",
"Base DN" => "База DN",
"One Base DN per line" => "Одно базовое DN на линию",
"You can specify Base DN for users and groups in the Advanced tab" => "Вы можете задать Base DN для пользователей и групп во вкладке «Дополнительно»",
"User DN" => "DN пользователя",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN клиентского пользователя, с которого должна осуществляться привязка, например, uid=agent,dc=example,dc=com. Для анонимного доступа оставьте поля DN и Пароль пустыми.",
"Password" => "Пароль",
"For anonymous access, leave DN and Password empty." => "Для анонимного доступа оставьте поля DN и пароль пустыми.",
"User Login Filter" => "Фильтр имен пользователей",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Задает фильтр, применяемый при загрузке пользователя. %%uid заменяет имя пользователя при входе.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "используйте %%uid заполнитель, например, \"uid=%%uid\"",
"User List Filter" => "Фильтр списка пользователей",
"Defines the filter to apply, when retrieving users." => "Задает фильтр, применяемый при получении пользователей.",
"without any placeholder, e.g. \"objectClass=person\"." => "без каких-либо заполнителей, например, \"objectClass=person\".",
"Group Filter" => "Групповой фильтр",
"Defines the filter to apply, when retrieving groups." => "Задает фильтр, применяемый при получении групп.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "без каких-либо заполнителей, например, \"objectClass=posixGroup\".",
"Port" => "Порт",
"Base User Tree" => "Базовое дерево пользователей",
"One User Base DN per line" => "Одно пользовательское базовое DN на линию",
"Base Group Tree" => "Базовое дерево групп",
"One Group Base DN per line" => "Одно групповое базовое DN на линию",
"Group-Member association" => "Связь член-группа",
"Use TLS" => "Использовать TLS",
"Do not use it for SSL connections, it will fail." => "Не используйте это SSL-соединений, это не будет выполнено.",
"Case insensitve LDAP server (Windows)" => "Нечувствительный к регистру LDAP-сервер (Windows)",
"Turn off SSL certificate validation." => "Выключить проверку сертификата SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Если соединение работает только с этой опцией, импортируйте SSL-сертификат LDAP сервера в ваш ownCloud сервер.",
"Not recommended, use for testing only." => "Не рекомендовано, используйте только для тестирования.",
"User Display Name Field" => "Поле, отображаемое как имя пользователя",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Атрибут LDAP, используемый для создания имени пользователя в ownCloud.",
"Group Display Name Field" => "Поле, отображаемое как имя группы",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Атрибут LDAP, используемый для создания группового имени в ownCloud.",
"in bytes" => "в байтах",
"in seconds. A change empties the cache." => "в секундах. Изменение очищает кэш.",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Оставьте пустым под имя пользователя (по умолчанию). В противном случае задайте LDAP/AD атрибут.",
"Help" => "Помощь"
);
