<?php
/*
* Copyright 2007-2017 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <https://pydio.com>.
*/
$mess=array(
"Main"      => "Opciones Principales",
"App Title" => "Título de la Aplicación",
"Your application title" => "Este título aparece como el título de la ventana, en la pantalla inicial.",
"Main container for core Pydio settings (application title, sharing, webdav server config, etc...)" => "Contenedor principal para la configuración del núcleo de Pydio (título de la aplicación, intercambio, configuración del servidor WebDAV, etc...)",
"Default Language" => "Lenguaje Predeterminado",
"Default language when a user does not have set his/her own." => "Lenguaje predeterminado cuando un usuario no ha configurado su lenguaje.",
"Sharing" => "Intercambio",
"Download Folder" => "Directorio de Descarga",
"Absolute path to the public folder where temporary download links will be created. Setting this empty will disable the sharing feature." => "Ruta absoluta al directorio público donde se crearán los enlaces de descarga temporales. Dejar este campo en blanco desactiva las opciones de intercambio de archivos.",
"Download URL" => "URL de Descarga",
"If not inferred directly from the current ajaxplorer URI plus the public download folder name, replace the public access URL here." => "Si no se infiere directamente del URI de Pydio y el directorio de descargas, reemplaza la URL pública de acceso aquí.",
"Existing users" => "Usuarios existentes",
"Allow the users to pick an existing user when sharing a folder" => "Permitir a los usuarios escoger un usuario existente cuando se comparte una carpeta.",
"Compression Features" => "Funciones de Compresión",
"Gzip Download" => "Descarga Gzip",
"Gzip files on-the-fly before downloading. Disabled by default, as it's generally useful only on small files, and decreases performances on big files. This has nothing to see with the Zip Creation feature, it's just a on-the-fly compression applied on a unique file at download." => "Comprime archivos en Gzip antes de descargar. Desactivado por defecto, generalmente sólo es útil para archivos pequeños y su rendimiento cae con archivos grandes. Esta opción no tiene relación con la generación de archivos Zip, es una compresión aplicada a un único archivo al descargar.",
"Gzip Limit" => "Límite Gzip",
"If activated, a default limit should be set above when files are no more compressed." => "Si está activado, se configura un límite por encima de cual no se comprimen los archivos.",
"Zip Creation" => "Compresión Zip",
"If you encounter problems with online zip creation or multiple files downloading, you can disable the feature." => "Si encuentras problemas con la creación de archivos zip online o con la descarga de multiples archivos, puedes desactivar esta función.",
"WebDAV Server" => "Servidor WebDAV",
"Enable WebDAV" => "Activar WebDAV",
"Enable the webDAV support. Please READ THE DOC to safely use this feature." => "Activar el soporte WebDAV. Por favor LEE LA DOCUMENTACIÓN para usar esta función de forma segura",
"Shares URI" => "URI de Intercambios",
"Common URI to access the shares. Please READ THE DOC to safely use this feature." => "URI común para acceder a los intercambios. Por favor LEE LA DOCUMENTACIÓN para usar esta función de forma segura.",
"Shares Host" => "Host de Intercambios",
"Host used in webDAV protocol. Should be detected by default. Please READ THE DOC to safely use this feature." => "El host usado en el protocolo WebDAV. Debería de ser detectado por defecto. Por favor LEE LA DOCUMENTACIÓN para usar esta función de forma segura",
"Digest Realm" => "Digest Realm",
"Default realm for authentication. Please READ THE DOC to safely use this feature." => "Ámbito de autenticación por defecto. Por favor LEE LA DOCUMENTACIÓN para usar esta función de forma segura.",
"Miscellaneous" => "Miscelánea",
"Command-line Active" => "Línea de Comandos",
"Use Pydio framework via the command line, allowing CRONTAB jobs or background actions." => "Usar Pydio a través de la línea de comandos, permitiendo trabajos CRONTAB o acciones en segundo plano.",
"Command-line PHP" => "Línea de Comando PHP",
"On specific hosts, you may have to use a specific path to access the php command line" => "En hosts específicos, puedes tener que configurar una ruta de acceso a la línea de comando de PHP",
"Filename length" => "Logitud de nombre de archivo",
"Maximum characters length of new files or folders" => "Número máximo de caracteres de archivos o carpetas nuevas",
"Temporary Folder" => "Directorio Temporal",
"This is necessary only if you have errors concerning the tmp dir access or writeability : most probably, they are due to PHP SAFE MODE (should disappear in php6) or various OPEN_BASEDIR restrictions. In that case, create and set writeable a tmp folder somewhere at the root of your hosting (but above the web/ or www/ or http/ if possible!!) and enter here the full path to this folder" => "Esto sólo es necesario si existen errores de acceso o escritura en el acceso al directorio temporal: probablemente, son debidos a PHP SAFE MODE (debería de desaparecer en php6) o a diferentes restricciones OPEN_BASEDIR. En ese caso, crear y configurar un directorio temporal en algún lugar de tu host (¡por encima de web/, www/ o http/ si es posible!) e introducir aquí la ruta completa",
"Admin email" => "Correo del administrador",
"Administrator email, not used for the moment" => "Correo del administrador, no se usa de momento",
"User Credentials" => "Credenciales de Usuario",
"User" => "Usuario",
"User name - Can be overriden on a per-user basis (see users 'Personal Data' tab)" => "Nombre del usuario - Puede ser sustituido por el usuario (ver pestaña 'Datos Personales')",
"Password" => "Contraseña",
"User password - Can be overriden on a per-user basis." => "Contraseña del usuario - Puede ser sustituido por el usuario.",
"Session credentials" => "Credenciales de la Sesión",
"Try to use the current Pydio user credentials for connecting. Warning, the AJXP_SESSION_SET_CREDENTIALS config must be set to true!" => "Comprueba los credenciales del usuario para conectarse a Pydio. Atención, ¡la variable AJXP_SESSION_SET_CREDENTIALS debe estar configurada como true!",
"User name" => "Nombre del usuario",
"User password" => "Contraseña del usuario",
"Repository Slug" => "Slug del Repositorio",
"Alias" => "Alias",
"Alias for replacing the generated unique id of the repository" => "Alias para remplazar el id único generado para el workspace",
"Template Options" => "Opciones de Plantilla",
"Allow to user" => "Permitir al usuario",
"Allow non-admin users to create a repository from this template." => "Permitir a usuarios no-administradores crear un workspace desde esta plantilla.",
"Default Label" => "Etiqueta Predeterminada",
"Prefilled label for the new repository, you can use the AJXP_USER keyworkd in it." => "Etiqueta pregenerada para el nuevo workspace, puedes usar AJXP_USER en este campo.",
"Small Icon" => "Icono Pequeño",
"16X16 Icon for representing the template" => "Icono 16X16 para representar a la plantilla",
"Big Icon" => "Icono Grande",
"Big Icon for representing the template" => "Icono grande para representar a la plantilla",
"Filesystem Commons" => "Sistemas de Archivos",
"Recycle Bin Folder" => "Carpeta Papelera de Reciclaje",
"Leave empty if you do not want to use a recycle bin." => "Dejar vacío si no quieres usar papelera de reciclaje.",
"Default Rights" => "Permisos Predeterminados",
"This right pattern (empty, r, or rw) will be applied at user creation for this repository." => "Este patrón de permisos (vacío, r o rw) será aplicado al crear un usuario para este workspace.",
"Character Encoding" => "Codificación de Caracteres",
"If your server does not set correctly its charset, it can be good to specify it here manually." => "Si tu servidor no configura correctamente la codificación, especificar aquí manualmente.",
"Pagination Threshold" => "Límite de Paginación",
"When a folder will contain more items than this number, display will switch to pagination mode, for better performances." => "Cuando una carpeta contiene más elementos que este límite, se cambia a modo paginación para un mejor rendimiento.",
"#Items per page" => "Elementos por página",
"Once in pagination mode, number of items to display per page." => "Número de elementos por página en modo paginación",
"Default Metasources" => "Metasources Predeterminados",
"Comma separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Lista de metastore y metaplugins separados por comas, se aplicará automáticamente a todos los workspaces creados con este controlador",
"Auth Driver Commons" => "Controladores de Autenticación",
"Transmit Clear Pass" => "Transmite Contraseña sin Cifrar",
"Whether the password will be transmitted clear or encoded between the client and the server" => "Transmitir la contraseña de forma cifrada o sin cifrar entre el cliente y el servidor",
"Auto Create User" => "Autogeneración de Usuario",
"When set to true, the user object is created automatically if the authentication succeed. Used by remote authentication systems." => "Si se configura como true, el usuario es creado automáticamente si la autenticación es satisfactoria. Usado por sistemas de autenticación remota.",
"Login Redirect" => "Redirección de Inicio",
"If set to a given URL, the login action will not trigger the display of login screen but redirect to this URL." => "Si se configura una URL, el inicio de usuario no muestra la pantalla de inicio de sesión y se redirecciona a esta URL.",
"Admin Login" => "Inicio de Administrador",
"For exotic auth drivers, an user ID that must be considered as admin by default." => "Para algunos controladores de autenticación, la ID de usuario que tiene que ser considerado como administrador por defecto.",
"Show hidden files" => "Mostrar archivos ocultos",
"Show files beginning with a ." => "Muestra archivos que comienzan con .",
"Hide recycle bin" => "Ocultar papelera de reciclaje",
"Whether to show the recycle bin folder. Unlike in the following options, the folder will be hidden but still writeable." => "Mostrar u ocultar la papelera de reciclaje. Sin depender de esta opción, la carpeta puede estar oculto pero permanece con permisos de escritura.",
"Hide extensions" => "Ocultar extensiones",
"Comma-separated list of extensions to hide. Extensions, files and folders that are hidden are also access forbidden." => "Lista de extensiones a ocultar separadas por comas. Las extensiones, archivos y carpetas ocultos tienen también el acceso restringido.",
"Hide folders" => "Ocultar carpetas",
"Comma-separated list of specific folders to hide" => "Lista de carpetas a ocultar separados por comas",
"Hide files" => "Ocultar archivos",
"Comma-separated list of specific files to hide" => "Lista de archivos a ocultar separados por comas",
"Metadata and indexation" => "Metadatos e indexación",
"Pydio Main Options" => "Opciones Principales de Pydio",
"Server URL" => "URL del Servidor",
"Server URL used to build share links and notifications. It will be detected if empty." => "URL del servidor usado para generar los enlaces de intercambios y las notificaciones. Será detectado si se deja el campo vacío.",
"Force Basic Auth" => "Forzar Autenticación Básica",
"This authentication mechanism is less secure, but will avoid the users having to re-enter a password in some case." => "Este mecanismo de autenticación es menos seguro, pero evita que los usuarios tengan que reintroducir la contraseña en algunos casos.",
"Browser Access" => "Acceso desde Navegador",
"Display the list of files and folder when accessing through the browser" => "Mostrar lista de archivos y carpetas cuando se accede desde el navegador.",
"Command Line" => "Línea de Comandos",
"Use COM class" => "Usar clase COM",
"On Windows running IIS, set this option to true if the COM extension is loaded, this may enable the use of the php command line." => "Corriendo IIS en Windows, configurar esta opción como true si la extensión COM está cargada, esto puede activar el uso de la línea de comandos php.",
"Disable Zip browsing" => "Desactivar explorarción de Zip",
"Disable Zip files inline browsing. This can be necessary if you always store huge zip archives: it can have some impact on performance." => "Desactivar la navecación de archivos Zip. Esto puede ser necesario si se almacenan archivos zip muy grandes: puede reducir el rendimiento.",
"Zip Encoding" => "Codificación Zip",
"Set up a specific encoding (try IBM850 or CP437) for filenames to fix characters problems during Zip creation. This may create OS-incompatible archives (Win/Mac)." => "Configurar codificación específica (probar con IBM850 o CP437) para archivos para arreglar problemas con los caractéres en la creación del Zip. Esto puede crear archivos incompatibles con algunos OS (Win/Mac). Si sigue teniendo problemas, puede añadir //TRANSLIT después de la codificación para forzar la transliteración de caractéres desconocidos (por ejemplo CP437//TRANSLIT).",
"Repository Commons" => "Repositorios",
"Description" => "Descripción",
"A user-defined description of the content of this workspace" => "Descripción definida por el usuario del contenido del workspace",
"Group Path" => "Ruta de Grupo",
"Set this repository group owner : only users of this group will see it" => "Configura el grupo propietario del repositorio: sólo los usuarios de este grupo lo verán",
"Disable WebDAV" => "Desactivar WebDAV",
"Explicitly disable WebDAV access for this repository." => "Desactivar explícitamente el acceso WebDAV para este repositorio.",
"Allow to group admins" => "Permitir al grupo de administradores",
"Allow group administrators to create a repository from this template." => "Permitir al grupo de administradores crear un repositorio a partir de esta plantilla.",
"Skip auto-update admin rights" => "Omitir actualización de permisos de administrador",
"If you have tons of workspaces (which is not recommanded), admin users login can take a long time while updating admin access to all repositories. Use this option to disable this step, admin will always have access to the Settings." => "Si tienes muchos workspaces (lo que no es recomendable), los usuarios administradores pueden tardar mucho en iniciar la sesión mientras que se actualiza la información de acceso a los repositorios. Desactivar este paso, el administrador tendrá siempre acceso a las Configuraciones.",
"Auto apply role" => "Aplicar rol automáticamente",
"For multiple authentication, apply this role to users authenticated via this driver" => "Para autenticación multiple, aplicar este rol a los usuarios autenticados mediante este controlador",
"DSN" => "DSN",
"Data Source Name" => "Nombre del Origen de Datos",
"Host" => "Host",
"Database server" => "Sevidor de Base de Datos",
"Database" => "Base de Datos",
"Database name" => "Nombre de la Base de Datos",
"File" => "Archivo",
"Database file" => "Archivo de la base de datos",
"Remote Sorting" => "Ordenación Remota",
"Force remote sorting when in paginated mode. Warning, this can impact the performances." => "Fuerza la ordenación remota cuando está en modo paginado. Atención, esta opción puede reducir el rendimineto.",
"Remote Sorting Default Field" => "Campo Predeterminado para Ordenación Remota",
"Default field to sort on" => "Campo predeterminado que se usa para ordenar",
"Remote Sorting Default Direction" => "Dirección Predeterminada de Ordenación Remota",
"Default sorting direction" => "Dirección predeterminada de la ordenación",
"Driver" => "Controlador",
"Driver type (do not touch)" => "Tipo de Controlador (no tocar)",
"Use PHP MySQLi extension" => "Usar la extensio PHP MySQLi",
"Use MySQLi" => "Usar MySQLi",
"Ascending" => "Ascendente",
"Descending" => "Descendente",
"Name" => "Nombre",
"Modification date" => "Fecha de modificación",
"File size" => "Tamaño",
"File Type" => "Tipo",
"Read Only" => "Sólo lectura",
"Read and Write" => "Lectura y Escritura",
"Write Only (upload)" => "Sólo escritura (subidas)",
"OAuth Commons" => "OAuth Commons",
"Client ID" => "ID del Cliente",
"Client SECRET" => "SECRET del Cliente",
"Scope" => "Ámbito",
"Auth URL" => "URL de Autenticación",
"Token URL" => "Token URL",
"Redirect URL" => "Redireccionar URL",
"API endpoint - Used to launch the window allowing the user to authenticate and accept the terms of the app" => "API endpoint - Usado para lanzar la ventana que permite a los usuarios autenticarse y aceptar los terminos de uso de la aplicación",
"API endpoint - Used to refresh or validate the token retrieved in the authentication part" => "API endpoint - Usado para regenerar o validar el token en la parte de la autenticación",
"API setting - Redirect URL for the OAuth Application" => "Configuración de la API - Redirecciona la URL para la Aplicación OAuth"
);
