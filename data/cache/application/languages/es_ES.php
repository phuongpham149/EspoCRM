<?php
return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activado',
      'Disabled' => 'Desactivado',
      'System' => 'Sistema',
      'Users' => 'Usuarios',
      'Email' => 'Correo electrónico',
      'Data' => 'Datos',
      'Customization' => 'Personalizar',
      'Available Fields' => 'Campos Disponibles',
      'Layout' => 'Diseño',
      'Entity Manager' => 'Administrador de Entidades	',
      'Add Panel' => 'Añadir Panel',
      'Add Field' => 'Añadir Campo',
      'Settings' => 'Opciones',
      'Scheduled Jobs' => 'Tareas Programadas',
      'Upgrade' => 'Actualizar',
      'Clear Cache' => 'Limpiar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Equipos',
      'Roles' => 'Roles',
      'Portal' => 'Portal',
      'Portals' => 'Portales',
      'Portal Roles' => 'Roles del Portal',
      'Outbound Emails' => 'Correos Salientes',
      'Group Email Accounts' => 'Grupo de Cuentas de Correo',
      'Personal Email Accounts' => 'Cuentas de correo electrónico personales',
      'Inbound Emails' => 'Correos Entrantes',
      'Email Templates' => 'Plantillas de Correo',
      'Import' => 'Importar',
      'Layout Manager' => 'Administrador de Diseño',
      'User Interface' => 'Interfaz de Usuario',
      'Auth Tokens' => 'Tokens Certificados',
      'Authentication' => 'Autenticación',
      'Currency' => 'Moneda',
      'Integrations' => 'Integración',
      'Extensions' => 'Extensiones',
      'Upload' => 'Subir',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Actualizando',
      'Upgraded successfully' => 'Actualización exitosa',
      'Installed successfully' => 'Instalado de forma exitosa',
      'Ready for upgrade' => 'Listo para actualizar',
      'Run Upgrade' => 'Ejecutar actualización',
      'Install' => 'Instalar',
      'Ready for installation' => 'Listo para instalación',
      'Uninstalling...' => 'Desinstalando',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Crear Entidad',
      'Edit Entity' => 'Editar Entidad',
      'Create Link' => 'Crear Enlace',
      'Edit Link' => 'Editar Enlace',
      'Notifications' => 'Notificaciones',
      'Jobs' => 'Trabajos',
      'Reset to Default' => 'Aplicar a valores por defecto',
      'Email Filters' => 'Filtros de Correo',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalle',
      'listSmall' => 'Lista (Pequeña)',
      'detailSmall' => 'Detalle (Pequeño)',
      'filters' => 'Filtros de Búsqueda',
      'massUpdate' => 'Actualización Masiva',
      'relationships' => 'Relaciones',
      'detailConvert' => 'Convertir Potencial',
      'listForAccount' => 'Listado (por Cuentas)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Dirección',
      'array' => 'Arreglo',
      'foreign' => 'Externo',
      'duration' => 'Duración',
      'password' => 'Contraseña',
      'parsonName' => 'Nombre',
      'autoincrement' => 'Auto incrementar',
      'bool' => 'Boolean',
      'currency' => 'Moneda',
      'date' => 'Fecha',
      'datetime' => 'Fecha/Hora',
      'datetimeOptional' => 'Fecha/FechaHora',
      'email' => 'Correo electrónico',
      'enum' => 'Lista',
      'enumInt' => 'Lista - Entero',
      'enumFloat' => 'Lista - Decimal',
      'float' => 'Decimal',
      'int' => 'Ent',
      'link' => 'Enlace',
      'linkMultiple' => 'Enlace Múltiple',
      'linkParent' => 'Enlace Padre',
      'multienim' => 'Lista Múltiple',
      'phone' => 'Teléfono',
      'text' => 'Texto',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Archivo',
      'image' => 'Imagen',
      'multiEnum' => 'Lista-Múltiple',
      'attachmentMultiple' => 'Multiples archivos adjuntos',
      'rangeInt' => 'Rango de Enteros',
      'rangeFloat' => 'Rango de Flotantes',
      'rangeCurrency' => 'Rango de Moneda',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mapa',
      'number' => 'Número',
    ),
    'fields' => 
    array (
      'type' => 'Tipo',
      'name' => 'Nombre',
      'label' => 'Etiqueta',
      'required' => 'Requerido',
      'default' => 'Por Defecto',
      'maxLength' => 'Longitud máxima',
      'options' => 'Opciones',
      'after' => 'Después (campo)',
      'before' => 'Antes (campo)',
      'link' => 'Enlace',
      'field' => 'Campo',
      'min' => 'Mínimo',
      'max' => 'Máximo',
      'translation' => 'Traducción',
      'previewSize' => 'Tamaño de vista previa',
      'noEmptyString' => 'No cadena vacía',
      'defaultType' => 'Tipo por defecto',
      'seeMoreDisabled' => 'Desactivar cortar texto',
      'entityList' => 'Lista de Entidades',
      'isSorted' => 'Esta ordenado (alfabeticamente)',
      'audited' => 'Auditada',
      'trim' => 'recortado',
      'height' => 'Altura (px)',
      'minHeight' => 'Altura mínima (px)',
      'provider' => 'Proveedor',
      'typeList' => 'Tipo de lista',
      'rows' => 'Número de filas del área de texto',
      'lengthOfCut' => 'Longitud de corte',
      'sourceList' => 'Lista de fuentes',
      'prefix' => 'Prefijo',
      'nextNumber' => 'Siguiente Número',
      'padLength' => 'Longitud del Relleno',
      'disableFormatting' => 'Desactivar Formateo',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Su EspoCRM será actualizado a la versión <strong>{version}</strong>. Esto Tomará algún tiempo.',
      'upgradeDone' => 'Su EspoCRM ha sido actualizado a la versión <strong>{version}</strong>. Refresque su ventana del navegador.',
      'upgradeBackup' => 'Le recomendamos que haga copias de seguridad de sus archivos y datos de EspoCRM antes de la actualización.',
      'thousandSeparatorEqualsDecimalMark' => 'El separador de miles no puede ser el mismo que la marca decimal',
      'userHasNoEmailAddress' => 'El usuario no tiene dirección de correo electrónico.',
      'selectEntityType' => 'Seleccione el tipo de entidad en el menú de la izquierda.',
      'selectUpgradePackage' => 'Seleccione Actualizar Paquete',
      'downloadUpgradePackage' => 'La descarga necesita paquete(s) actualizados de <a href="{url}">acá</a>.',
      'selectLayout' => 'Seleccione el diseño necesario en el menú de la izquierda y editelo.',
      'selectExtensionPackage' => 'Seleccionar extensión del paquete',
      'extensionInstalled' => 'La Extensión {name} {version} ha sido instalada',
      'installExtension' => 'La Extensión {name} {version} está lista para ser instalada.',
      'uninstallConfirmation' => '¿Realmente desea desinstalar la extensión?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Configuración del sistema de la aplicación.',
      'scheduledJob' => 'Trabajos que se ejecutan por cron.(cron Jobs)',
      'upgrade' => 'Actualiza EspoCRM.',
      'clearCache' => 'Limpiar la cache de la Administración.',
      'rebuild' => 'Reconstruir y limpiar la cache de la Administración.',
      'users' => 'Gestión de usuarios.',
      'teams' => 'Gestión de Equipos',
      'roles' => 'Gestión de Roles',
      'portals' => 'Gestión de portales.',
      'portalRoles' => 'Roles para el portal.',
      'outboundEmails' => 'Opciones SMTP para correo saliente.',
      'groupEmailAccounts' => 'Grupo de Cuentas Correo IMAP. Importación de Correo y Correo a Caso.',
      'personalEmailAccounts' => 'Cuentas de correo electrónico del usuario',
      'emailTemplates' => 'Plantillas para mensajes de correo electrónico salientes.',
      'import' => 'Importar datos desde CSV.',
      'layoutManager' => 'Personalizar diseños (listas, detalles, editar, buscar, actualización masiva).',
      'entityManager' => 'Crear entidades personalizadas, editar las existentes. Administrar campo y las relaciones.',
      'userInterface' => 'Configurar IU.',
      'authTokens' => 'Sesiones certificas activas. Direcciones IP y última fecha de acceso',
      'authentication' => 'Opciones de autentificación',
      'currency' => 'Opciones y tarifas de Moneda',
      'extensions' => 'Instalar o desinstalar extensiones',
      'integrations' => 'Integración con los servicios de terceros.',
      'notifications' => 'Ajustes de notificaciones In-app y de Correo',
      'inboundEmails' => 'Cuentas de correo Grupo IMAP . Importación-correo y dirección de correo electrónico a la sentencia.',
      'emailFilters' => 'Los mensajes de correo electrónico que coinciden con el filtro especificado no se importarán.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Muy Pequeño',
        'small' => 'Pequeño',
        'medium' => 'Mediano',
        'large' => 'Grande',
      ),
    ),
  ),
  'Attachment' => 
  array (
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Insertar documento',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Usuario',
      'ipAddress' => 'Dirección IP',
      'lastAccess' => 'Fecha del Último Acceso',
      'createdAt' => 'Creado el',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Título',
      'dateFrom' => 'Fecha desde',
      'dateTo' => 'Fecha hasta',
      'autorefreshInterval' => 'Actualizar cada:',
      'displayRecords' => 'Mostrar Registros',
      'isDoubleHeight' => 'Altitud 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'Qué mostrar',
      'users' => 'Usuarios',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Semana (orden del día)',
        'basicWeek' => 'Semana',
        'month' => 'Mes',
        'basicDay' => 'Día',
        'agendaDay' => 'Día (agenda)',
        'timeline' => 'Línea de tiempo',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Asunto',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateSent' => 'Enviado',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Responder a',
      'replyToString' => 'Responder a (String)',
      'isHtml' => 'Es Html',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'selectTemplate' => 'Seleccione una Plantilla',
      'fromEmailAddress' => 'De la dirección',
      'toEmailAddresses' => 'a la Dirección',
      'emailAddress' => 'Correo Electrónico',
      'deliveryDate' => 'Fecha Entrega',
      'account' => 'Cuenta',
      'users' => 'Usuarios',
      'replied' => 'Respondió',
      'replies' => 'Respuestas',
      'isRead' => 'Es leído',
      'isNotRead' => 'No se lee',
      'isImportant' => 'Es Importante',
      'isReplied' => 'Se contesta',
      'isNotReplied' => 'No se responde',
      'isUsers' => 'Es del Usuario',
      'inTrash' => 'En Papelera',
      'sentBy' => 'Enviado por (Usuario)',
      'folder' => 'Carpeta',
      'inboundEmails' => 'Cuentas de grupo',
      'emailAccounts' => 'Las cuentas personales',
    ),
    'links' => 
    array (
      'replied' => 'Respondió',
      'replies' => 'Respuestas',
      'inboundEmails' => 'Cuentas de grupo',
      'emailAccounts' => 'Las cuentas personales',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Borrador',
        'Sending' => 'Enviando',
        'Sent' => 'Enviado',
        'Archived' => 'Archivado',
        'Received' => 'Recibido',
        'Failed' => 'Falló',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archivar Correo',
      'Archive Email' => 'Archivar Correo',
      'Compose' => 'Nuevo',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a Todos',
      'Forward' => 'Reenviar',
      'Original message' => 'Mensaje Original',
      'Forwarded message' => 'Mensaje reenviado',
      'Email Accounts' => 'Cuentas de Correo Electrónico',
      'Inbound Emails' => 'Grupo de Cuentas de Correo',
      'Email Templates' => 'Plantillas de Correo',
      'Send Test Email' => 'Enviar correo electrónico de prueba',
      'Send' => 'Enviar',
      'Email Address' => 'Correo Electrónico',
      'Mark Read' => 'Marcar como Leído',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Guardar Borrador',
      'Mark all as read' => 'Marcar todos como leídos',
      'Show Plain Text' => 'Ver en texto plano',
      'Mark as Important' => 'Marcar como Importante',
      'Unmark Importance' => 'Marcar como No Importante',
      'Move to Trash' => 'Mover a la papelera',
      'Retrieve from Trash' => 'Recuperar de la Papelera',
      'Move to Folder' => 'Mover a la carpeta',
      'Filters' => 'filtros',
      'Folders' => 'Carpetas',
      'Create Lead' => 'Crear Potencial',
      'Create Contact' => 'Crear Contacto',
      'Create Task' => 'Crear Tarea',
      'Create Case' => 'Crear Caso',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Sin configuración SMTP. {link}.',
      'testEmailSent' => 'La prueba de correo electrónico ha sido enviada.',
      'emailSent' => 'El correo ha sido enviado',
      'savedAsDraft' => 'Guardado como borrador',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Enviado',
      'archived' => 'Archivado',
      'inbox' => 'Bandeja de Entrada',
      'drafts' => 'Borradores',
      'trash' => 'Papelera',
      'important' => 'Importante',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Marcar como leído',
      'markAsNotRead' => 'Marcar como No Leído',
      'markAsImportant' => 'Marcar como Importante',
      'markAsNotImportant' => 'Marcar como No Importante',
      'moveToTrash' => 'Mover a la Papelera',
      'moveToFolder' => 'Mover a la carpeta',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'host' => 'Host',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas supervisadas',
      'ssl' => 'SSL',
      'fetchSince' => 'Traer Desde',
      'emailAddress' => 'Correo Electrónico',
      'sentFolder' => 'Carpeta de Enviados',
      'storeSentEmails' => 'Almacenar Correos Enviados',
      'keepFetchedEmailsUnread' => 'Mantener los correos que se han obtenido sin leer',
      'emailFolder' => 'Poner en la carpeta',
      'useSmtp' => 'Utilizar SMTP',
      'smtpHost' => 'Host SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Autentificación SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpUsername' => 'Nombre de usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP',
    ),
    'links' => 
    array (
      'filters' => 'Filtros',
      'emails' => 'Correos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Crear Cuenta de Correo Electrónico',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Probar conexión',
      'Send Test Email' => 'Enviar correo electrónico de prueba',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'connectionIsOk' => 'Conexión correcta',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Usted puede agregar la carpeta \'Enviado\' para sincronizar los correos enviados desde el cliente externo.',
      'storeSentEmails' => 'Los mensajes enviados se almacenan en el servidor IMAP. La dirección de email debe coincidir con la dirección de un correo electrónico que se envía desde.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primario',
      'Opted Out' => 'optado por no',
      'Invalid' => 'Inválido',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'De',
      'to' => 'Para',
      'subject' => 'Asunto',
      'bodyContains' => 'Contenido del Cuerpo',
      'action' => 'Acción',
      'isGlobal' => 'Es global',
      'emailFolder' => 'Carpeta',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Crear un filtro de email',
      'Emails' => 'Correos',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorar',
        'Move to Folder' => 'Poner en la carpeta',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Sólo un nombre del filtro',
      'subject' => 'El uso de comodines *:

text* - comienza con el texto,
*text* - contiene el texto,
*text - termina con el texto.',
      'bodyContains' => 'El cuerpo del mensaje contiene cualquiera de las palabras o frases especificadas',
      'from' => 'Los correos enviados desde la dirección especificada. Dejar en blanco si no es necesario.',
      'to' => 'Los correos electrónicos que se envían a la dirección especificada. Dejar en blanco si no es necesario.',
      'isGlobal' => 'Se aplica este filtro a todos los mensajes entrantes al sistema.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Omitir Notificaciones',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Crear carpeta',
      'Manage Folders' => 'Administrar carpetas',
      'Emails' => 'Correos',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'isHtml' => 'Es Html',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'insertField' => 'Insertar Campo',
      'oneOff' => 'Único',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Crear Plantilla de Correo',
      'Info' => 'Información',
    ),
    'messages' => 
    array (
      'infoText' => 'Las variables disponibles:

{optOutUrl} &#8211; URL de un enlace de baja};

{optOutLink} &#8211; un enlace para anular.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Compruebe si usted va a utilizar esta plantilla sólo una vez. Por ejemplo: para Correo Masivo.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actuales',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Campos',
      'Relationships' => 'Relaciones',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'type' => 'Tipo',
      'labelSingular' => 'Etiqueta en Singular',
      'labelPlural' => 'Etiqueta en Plural',
      'stream' => 'Actividad',
      'label' => 'Etiqueta',
      'linkType' => 'Tipo de enlace',
      'entityForeign' => 'Entidad Foránea',
      'linkForeign' => 'Enlace Foráneo',
      'link' => 'Enlace',
      'labelForeign' => 'Etiqueta Foránea',
      'sortBy' => 'Orden por defecto (campo)',
      'sortDirection' => 'Orden por defecto (dirección)',
      'relationName' => 'Nombre de la Tabla Intermedia',
      'linkMultipleField' => 'Enlaza Múltiples Campos',
      'linkMultipleFieldForeign' => 'Enlaza Múltiples Campos foráneos',
      'disabled' => 'Deshabilitar',
      'textFilterFields' => 'Los campos de filtro de texto',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Ninguno',
        'Base' => 'Base',
        'Person' => 'Persona',
        'CategoryTree' => 'Árbol de Categorías',
        'Event' => 'Evento',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Mucho-a-Muchos',
        'oneToMany' => 'Uno-a-Muchos',
        'manyToOne' => 'Muchos-a-uno',
        'parentToChildren' => 'Padres-a-Hijos',
        'childrenToParent' => 'Hijos-a-Padres',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascendente',
        'desc' => 'Descendente',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'La entidad ha sido creada',
      'linkAlreadyExists' => 'Conflicto de nombres en el enlace.',
      'linkConflict' => 'Un enlace con el mismo nombra ya existe.',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'version' => 'Versión',
      'description' => 'Descripción',
      'isInstalled' => 'Instalado',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extensión {name} ha sido desinstalada',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Conectar',
      'Connected' => 'Conectado',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Correo electrónico',
      'User' => 'Usuario',
      'Team' => 'Equipo',
      'Role' => 'Rol',
      'EmailTemplate' => 'Plantilla de Correo',
      'EmailAccount' => 'Cuenta de Email',
      'EmailAccountScope' => 'Cuenta de Email',
      'OutboundEmail' => 'Correo Saliente',
      'ScheduledJob' => 'Tarea Programada',
      'ExternalAccount' => 'Cuenta Externa',
      'Extension' => 'Extensión',
      'Dashboard' => 'Panel de control',
      'InboundEmail' => 'Correo Entrante',
      'Stream' => 'Actividad',
      'Import' => 'Importar',
      'Template' => 'Plantilla',
      'Job' => 'Trabajo',
      'EmailFilter' => 'Filtro de correo',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol del Portal',
      'Attachment' => 'Archivo adjunto',
      'EmailFolder' => 'Carpeta de correo electrónico',
      'Account' => 'Cuenta',
      'Contact' => 'Contacto',
      'Lead' => 'Potencial',
      'Target' => 'Objetivo',
      'Opportunity' => 'Oportunidad',
      'Meeting' => 'Reunión',
      'Calendar' => 'Calendario',
      'Call' => 'Llamada',
      'Task' => 'Tarea',
      'Case' => 'Caso',
      'Document' => 'Documento',
      'DocumentFolder' => 'Carpeta de Documento',
      'Campaign' => 'Campaña',
      'TargetList' => 'Lista de Objetivos',
      'MassEmail' => 'Email Masivo',
      'EmailQueueItem' => 'Item en Cola de Correo',
      'CampaignTrackingUrl' => 'URL de seguimiento',
      'Activities' => 'Ocupaciones',
      'KnowledgeBaseArticle' => 'Artículos de base de conocimientos',
      'KnowledgeBaseCategory' => 'Categoría de base de conocimientos',
      'Project' => 'Project',
      'ProjectTask' => 'Project Task',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Correos',
      'User' => 'Usuarios',
      'Team' => 'Equipos',
      'Role' => 'Roles',
      'EmailTemplate' => 'Plantillas de Correo',
      'EmailAccount' => 'Cuentas de Correo Electrónico',
      'EmailAccountScope' => 'Cuentas de Correo Electrónico',
      'OutboundEmail' => 'Correos Salientes',
      'ScheduledJob' => 'Tareas Programadas',
      'ExternalAccount' => 'Cuentas Externas',
      'Extension' => 'Extensiones',
      'Dashboard' => 'Panel de control',
      'InboundEmail' => 'Grupo de Cuentas de Correo',
      'Stream' => 'Actividad',
      'Import' => 'Importar Resultados',
      'Template' => 'Plantillas',
      'Job' => 'Trabajos',
      'EmailFilter' => 'Filtros de Correo',
      'Portal' => 'Portales',
      'PortalRole' => 'Roles del portal',
      'Attachment' => 'Archivos adjuntos',
      'EmailFolder' => 'Las carpetas de correo electrónico',
      'Account' => 'Empresas',
      'Contact' => 'Contactos',
      'Lead' => 'Potenciales',
      'Target' => 'Objetivos',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniones',
      'Calendar' => 'Calendario',
      'Call' => 'Llamadas',
      'Task' => 'Tareas',
      'Case' => 'Casos',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Carpetas de Documentos',
      'Campaign' => 'Campañas',
      'TargetList' => 'Lista de Objetivos',
      'MassEmail' => 'Emails Masivos',
      'EmailQueueItem' => 'Items en Cola de Correo',
      'CampaignTrackingUrl' => 'URLs de Seguimiento',
      'Activities' => 'Ocupaciones',
      'KnowledgeBaseArticle' => 'Base de conocimiento',
      'KnowledgeBaseCategory' => 'Categoría de base de conocimientos',
      'Project' => 'Projects',
      'ProjectTask' => 'Project Tasks',
    ),
    'labels' => 
    array (
      'Misc' => 'Misceláneos',
      'Merge' => 'Unir',
      'None' => 'Ninguno',
      'Home' => 'Inicio',
      'by' => 'por',
      'Saved' => 'Guardado',
      'Error' => 'Error',
      'Select' => 'Seleccionar',
      'Not valid' => 'No válido',
      'Please wait...' => 'Por favor espere...',
      'Please wait' => 'Por favor espere',
      'Loading...' => 'Cargando...',
      'Uploading...' => 'Subiendo...',
      'Sending...' => 'Enviando...',
      'Merging...' => 'Fusionando...',
      'Merged' => 'Fusionado	',
      'Removed' => 'Eliminado',
      'Posted' => 'Publicado',
      'Linked' => 'Enlazado',
      'Unlinked' => 'Desenlazado',
      'Done' => 'Hecho',
      'Access denied' => 'Acceso denegado',
      'Not found' => 'No encontrado',
      'Access' => 'Acceso',
      'Are you sure?' => '¿Está seguro?',
      'Record has been removed' => 'Registro Eliminado',
      'Wrong username/password' => 'El nombre de usuario ó la contraseña son incorrectos',
      'Post cannot be empty' => 'La entrada no puede estar vacia',
      'Removing...' => 'Removiendo...',
      'Unlinking...' => 'Desenlazando...',
      'Posting...' => 'Publicando...',
      'Username can not be empty!' => '¡El nombre de usuario no puede estar vacío!',
      'Cache is not enabled' => 'La Cache no está habilitada',
      'Cache has been cleared' => 'La cache fue limpiada Correctamente',
      'Rebuild has been done' => 'Se ha reconstruido correctamente',
      'Saving...' => 'Guardando...',
      'Modified' => 'Modificado',
      'Created' => 'Creado',
      'Create' => 'Crear',
      'create' => 'crear',
      'Overview' => 'Vista',
      'Details' => 'Detalles',
      'Add Field' => 'Añadir Campo',
      'Add Dashlet' => 'Añadir Cuadro',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Editar el Panel de control',
      'Add' => 'Añadir',
      'Add Item' => 'Agregar item',
      'Reset' => 'Resetear',
      'Menu' => 'Menú',
      'More' => 'Más',
      'Search' => 'Buscar',
      'Only My' => 'Sólo míos',
      'Open' => 'Abiertos',
      'Admin' => 'Administrador',
      'About' => 'Acerca',
      'Refresh' => 'Refrescar',
      'Remove' => 'Remover',
      'Options' => 'Opciones',
      'Username' => 'Nombre de Usuario',
      'Password' => 'Contraseña',
      'Login' => 'Entrar',
      'Log Out' => 'Salir',
      'Preferences' => 'Preferencias',
      'State' => 'Estado/Distrito',
      'Street' => 'Calle',
      'Country' => 'País',
      'City' => 'Ciudad',
      'PostalCode' => 'Código Postal',
      'Followed' => 'Siguiendo',
      'Follow' => 'Seguir',
      'Followers' => 'Seguidores',
      'Clear Local Cache' => 'Borrar la cache local',
      'Actions' => 'Acciones',
      'Delete' => 'Borrar',
      'Update' => 'Guardar',
      'Save' => 'Guardar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Aplicar',
      'Unlink' => 'Desenlazar',
      'Mass Update' => 'Actualización Masiva',
      'Export' => 'Exportar',
      'No Data' => 'Sin Datos',
      'No Access' => 'Sin acceso',
      'All' => 'Todos',
      'Active' => 'Activo',
      'Inactive' => 'Inactivo',
      'Write your comment here' => 'Escriba su comentario aquí',
      'Post' => 'Entrada',
      'Stream' => 'Actividad',
      'Show more' => 'Mostrar mas',
      'Dashlet Options' => 'Opciones de Cuadros',
      'Full Form' => 'Formulario Completo',
      'Insert' => 'Insertar',
      'Person' => 'Persona',
      'First Name' => 'Primer Nombre',
      'Last Name' => 'Apellidos',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambiar',
      'Change' => 'Cambio',
      'Primary' => 'Primario',
      'Save Filter' => 'Guardar Filtro',
      'Administration' => 'Administración',
      'Run Import' => 'Ejecutar Importación',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificaciones',
      'Mark all read' => 'Marcar todos como leído',
      'See more' => 'Ver más',
      'Today' => 'Hoy',
      'Tomorrow' => 'Mañana',
      'Yesterday' => 'Ayer',
      'Submit' => 'Enviar',
      'Close' => 'Cerrar',
      'Yes' => 'Si',
      'No' => 'No',
      'Select All Result' => 'Seleccionar todos los resultados',
      'Value' => 'Valor',
      'Current version' => 'Version Actual',
      'List View' => 'Vista de Lista',
      'Tree View' => 'Vista de árbol',
      'Unlink All' => 'Desenlazar todo',
      'Total' => 'Total',
      'Print to PDF' => 'Imprimir PDF',
      'Default' => 'Por Defecto',
      'Number' => 'Número',
      'From' => 'De',
      'To' => 'Para',
      'Create Post' => 'Crear entrada',
      'Previous Entry' => 'Entrada anterior',
      'Next Entry' => 'Siguiente Entrada',
      'View List' => 'Ver lista Completa',
      'Attach File' => 'Adjuntar archivo',
      'Create InboundEmail' => 'Crear Correo Entrante',
      'Activities' => 'Actividades',
      'History' => 'Historia',
      'Attendees' => 'Los asistentes',
      'Schedule Meeting' => 'Reunión Programada',
      'Schedule Call' => 'Llamada Programada',
      'Compose Email' => 'Escribir Correo',
      'Log Meeting' => 'Log de Reunión',
      'Log Call' => 'Log de Llamada',
      'Archive Email' => 'Archivar Correo',
      'Create Task' => 'Crear Tarea',
      'Tasks' => 'Tareas',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Por favor espere...',
      'posting' => 'Publicando...',
      'confirmLeaveOutMessage' => '¿Seguro que quieres salir del formulario?',
      'notModified' => 'Usted no ha modificado el registro',
      'duplicate' => 'El registro que está creando parece ser un duplicado',
      'dropToAttach' => 'Caída de adjuntar',
      'fieldIsRequired' => '{field} es requerido',
      'fieldShouldBeEmail' => '{field} debe ser un correo electrónico válido',
      'fieldShouldBeFloat' => '{field} debe ser un decimal válido',
      'fieldShouldBeInt' => '{field} debe ser un entero válido',
      'fieldShouldBeDate' => '{field} debe ser una fecha válida',
      'fieldShouldBeDatetime' => '{field} debe ser una fecha válida fecha/hora',
      'fieldShouldAfter' => '{field} debe estar después de {otherField}',
      'fieldShouldBefore' => '{field} debe estar antes de {otherField}',
      'fieldShouldBeBetween' => '{field} debe estar entre {min} y {max}',
      'fieldShouldBeLess' => '{field} debe ser menor que {value}',
      'fieldShouldBeGreater' => '{field} debe ser mayor que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado de forma incorrecta',
      'resetPreferencesDone' => 'Preferencias se ha restablecido a los valores predeterminados',
      'confirmation' => '¿Está seguro?',
      'unlinkAllConfirmation' => '¿Seguro que deseas desvincular todos los registros relacionados?',
      'resetPreferencesConfirmation' => '¿Está seguro de que desea restablecer las preferencias a los valores predeterminados?',
      'removeRecordConfirmation' => '¿Está seguro que quiere eliminar los registros?',
      'unlinkRecordConfirmation' => '¿Está seguro que quiere desenlazar la relación?',
      'removeSelectedRecordsConfirmation' => '¿Está seguro que quiere eliminar los registros seleccionados?',
      'massUpdateResult' => '{count} los registros se han actualizado',
      'massUpdateResultSingle' => '{count} registro ha sido actualizado',
      'noRecordsUpdated' => 'No hay registros se actualizaron',
      'massRemoveResult' => '{count} los registros se han eliminado',
      'massRemoveResultSingle' => '{count} registro se ha eliminado',
      'noRecordsRemoved' => 'No hay registros se eliminaron',
      'clickToRefresh' => 'Clic aqui para actualizar',
      'streamPostInfo' => 'Tipo <strong>@username</strong> hablar de los usuarios en el post.

la sintaxis de rebajas disponibles:
`<code>code</code>`
**<strong>texto enérgico</strong>**
*<em>un texto con énfasis</em>*
~<del>el texto eliminado</del>~
> blockquote
(link name)[url]',
      'writeYourCommentHere' => 'Escriba su comentario aquí',
      'writeMessageToUser' => 'Escribir un mensaje a {user}',
      'writeMessageToSelf' => 'Escribir un mensaje a uno mismo',
      'typeAndPressEnter' => 'Escriba y presione enter',
      'checkForNewNotifications' => 'Comprobar si hay nuevas notificaciones',
      'checkForNewNotes' => 'Comprobar si hay actualizaciones de vapor',
      'internalPost' => 'El puesto será visto sólo por los usuarios internos',
      'done' => 'Hecho',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Sólo míos',
      'followed' => 'Siguiendo',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Siguiendo',
      'all' => 'Todos',
    ),
    'massActions' => 
    array (
      'remove' => 'Eliminar',
      'merge' => 'Unir',
      'massUpdate' => 'Actualización Masiva',
      'export' => 'Exportar',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'firstName' => 'Primer Nombre',
      'lastName' => 'Apellidos',
      'salutationName' => 'Saludo',
      'assignedUser' => 'Usuario Asignado',
      'assignedUsers' => 'Usuarios asignados',
      'emailAddress' => 'Correo electrónico',
      'assignedUserName' => 'Nombre de Usuario Asignado',
      'teams' => 'Equipos',
      'createdAt' => 'Creado en',
      'modifiedAt' => 'Modificado el',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'description' => 'Descripción',
      'address' => 'Dirección',
      'phoneNumber' => 'Teléfono',
      'phoneNumberMobile' => 'Teléfono (Móvil)',
      'phoneNumberHome' => 'Teléfono (Casa)',
      'phoneNumberFax' => 'Teléfono (Fax)',
      'phoneNumberOffice' => 'Teléfono (Oficina)',
      'phoneNumberOther' => 'Teléfono (Otro)',
      'order' => 'Orden',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'billingAddressCity' => 'Ciudad',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'Código Postal',
      'billingAddressState' => 'Estado/Distrito',
      'billingAddressStreet' => 'Calle',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Ciudad',
      'addressStreet' => 'Calle',
      'addressCountry' => 'País',
      'addressState' => 'Estado/Distrito',
      'addressPostalCode' => 'Código Postal',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Ciudad (Envío)',
      'shippingAddressStreet' => 'Calle (Envío)',
      'shippingAddressCountry' => 'País (Envío)',
      'shippingAddressState' => 'Estado (Envío)',
      'shippingAddressPostalCode' => 'Código Postal (Envío)',
      'shippingAddressMap' => 'Mapa (envío)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Usuario Asignado',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'team' => 'Equipo',
      'roles' => 'Roles',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Potenciales',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'accounts' => 'Empresas',
      'cases' => 'Casos',
      'documents' => 'Documentos',
      'account' => 'Cuenta',
      'opportunity' => 'Oportunidad',
      'contact' => 'Contacto',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Actividad',
      'Emails' => 'Mi bandeja de entrada',
      'Leads' => 'Mis Potenciales',
      'Opportunities' => 'Mis Opportunidades',
      'Tasks' => 'Mis Tareas',
      'Cases' => 'Mis Casos',
      'Calendar' => 'Calendario',
      'Calls' => 'Mis Llamadas',
      'Meetings' => 'Mis Reuniones',
      'OpportunitiesByStage' => 'Oportunidades por Etapa',
      'OpportunitiesByLeadSource' => 'Oportunidades de origen de cliente potencial',
      'SalesByMonth' => 'Ventas por Mes',
      'SalesPipeline' => 'Canalización de ventas',
      'Activities' => 'Mis actividades',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} ha sido asignado a usted',
      'emailReceived' => 'Correo recibido de {from}',
      'entityRemoved' => '{user} a eliminado el/la {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} a publicado en {entityType} {entity}',
      'attach' => '{user} a añadido un archivo adjunto en {entityType} {entity}',
      'status' => '{user} a actualizado {field} en {entityType} {entity}',
      'update' => '{user} a actualizado el {entityType} {entity}',
      'postTargetTeam' => '{user} publicó en equipo {target}',
      'postTargetTeams' => '{user} publicó en equipos {target}',
      'postTargetPortal' => '{user} publicado a portal {target}',
      'postTargetPortals' => '{user} publicado a portal {target}',
      'postTarget' => '{user} publicó en {target}',
      'postTargetYou' => '{user} publicado por usted',
      'postTargetYouAndOthers' => '{user} envió a {target} y a usted',
      'postTargetAll' => '{user} envió a todos',
      'postTargetSelf' => '{user} se envío a sí mismo',
      'postTargetSelfAndOthers' => '{user} publicado a {target} y a sí mismo',
      'mentionInPost' => '{user} mencionado {mentioned} en {entityType} {entity}',
      'mentionYouInPost' => '{user} te ha mencionado en {entityType} {entity}',
      'mentionInPostTarget' => '{user} mencionó a {mentioned} en el post',
      'mentionYouInPostTarget' => '{user} te ha mencionado en post para {target}',
      'mentionYouInPostTargetAll' => '{user} te ha mencionado en post para todos',
      'mentionYouInPostTargetNoTarget' => '{user} te menciona en el post',
      'create' => '{user} a creado el/la {entityType} {entity}',
      'createThis' => '{user} crear este {entityType}',
      'createAssignedThis' => '{user} crear este {entityType} asignado a {assignee}',
      'createAssigned' => '{user} a creado el/la {entityType} {entity} asignado a {assignee}',
      'createAssignedYou' => '{user} a creado {entityType} {entity} se le ha asignado',
      'assign' => '{user} a asignado el/la {entityType} {entity} a {assignee}',
      'assignThis' => '{user} asignar este {entityType} a {assignee}',
      'assignYou' => '{user} a asignado {entityType} {entity} para ti',
      'assignThisSelf' => '{user} auto-asignado este {entityType}',
      'assignSelf' => '{user} auto-asignado {entityType} {entity}',
      'postThis' => '{user} publicado',
      'attachThis' => '{user} adjunto',
      'statusThis' => '{user} actualizado {field}',
      'updateThis' => '{user} actualizado a este {entityType}',
      'createRelatedThis' => '{user} creado {relatedEntityType} {relatedEntity} enlazado a este {entityType}',
      'createRelated' => '{user} a creado el/la {relatedEntityType} {relatedEntity} enlazado a {entityType} {entity}',
      'relate' => '{user} vinculado {relatedEntityType} {relatedEntity} con {entityType} {entity}',
      'relateThis' => '{user} vinculado {relatedEntityType} {relatedEntity} con este {entityType}',
      'emailReceivedFromThis' => 'Correo recibido de {from}',
      'emailReceivedInitialFromThis' => 'Correo recibido de {from}, esta {entityType} creada',
      'emailReceivedThis' => 'correo electrónico recibido',
      'emailReceivedInitialThis' => 'Correo electrónico recibido, este {entityType} creado',
      'emailReceivedFrom' => 'Correo recibido de {from}, relacionado a {entityType} {entity}',
      'emailReceivedFromInitial' => 'Correo recibido de {from}, {entityType} {entity} creada',
      'emailReceived' => 'Correo electrónico recibido relacionado con {entityType} {entity}',
      'emailReceivedInitial' => 'Correo electrónico recibido: {entityType} {entity} creado',
      'emailReceivedInitialFrom' => 'Correo recibido de {from}, {entityType} {entity} creada',
      'emailSent' => '{by} envió un correo relacionado a {entityType} {entity}',
      'emailSentThis' => '{by} envió un correo',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} publicado a {target} y el propio',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} publicado a {target} y el propio',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Enero',
        1 => 'Febrero',
        2 => 'Marzo',
        3 => 'Abril',
        4 => 'Mayo',
        5 => 'Junio',
        6 => 'Julio',
        7 => 'Agosto',
        8 => 'Septiembre',
        9 => 'Octubre',
        10 => 'Noviembre',
        11 => 'Diciembre',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Ene',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dic',
      ),
      'dayNames' => 
      array (
        0 => 'Domingo',
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miércoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sábado',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Jue',
        5 => 'Vie',
        6 => 'Sab',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Ju',
        5 => 'Vi',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Sta.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikáans',
        'az_AZ' => 'Azerbaiyán',
        'be_BY' => 'Bielorruso',
        'bg_BG' => 'Bulgaro',
        'bn_IN' => 'Bengalí',
        'bs_BA' => 'Bosnio',
        'ca_ES' => 'Catalán',
        'cs_CZ' => 'Checo',
        'cy_GB' => 'Galés',
        'da_DK' => 'Danés',
        'de_DE' => 'Alemán',
        'el_GR' => 'Griego',
        'en_GB' => 'Inglés (UK)',
        'en_US' => 'Inglés (US)',
        'es_ES' => 'Español (Spain)',
        'et_EE' => 'Estonio',
        'eu_ES' => 'Vasco',
        'fa_IR' => 'Persa',
        'fi_FI' => 'Finlandés',
        'fo_FO' => 'Feroés',
        'fr_CA' => 'Francés (Canada)',
        'fr_FR' => 'Francés (Francia)',
        'ga_IE' => 'Irlandés',
        'gl_ES' => 'Gallego',
        'gn_PY' => 'Guaraní',
        'he_IL' => 'Hebreo',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croata',
        'hu_HU' => 'Hungaro',
        'hy_AM' => 'Armenio',
        'id_ID' => 'Indonesio',
        'is_IS' => 'Islandés',
        'it_IT' => 'Italiano',
        'ja_JP' => 'Japonés',
        'ka_GE' => 'Georgiano',
        'km_KH' => 'Camboyano',
        'ko_KR' => 'Coreano',
        'ku_TR' => 'Kurdo',
        'lt_LT' => 'Lituano',
        'lv_LV' => 'Latón',
        'mk_MK' => 'Macedonio',
        'ml_IN' => 'Malabar',
        'ms_MY' => 'Malayo',
        'nb_NO' => 'Noruego Bokmål',
        'nn_NO' => 'Noruego Nynorsk',
        'ne_NP' => 'Nepalí',
        'nl_NL' => 'Holandés',
        'pa_IN' => 'Punyabí',
        'pl_PL' => 'Polaco',
        'ps_AF' => 'Pastún',
        'pt_BR' => 'Portugués (Brasil)',
        'pt_PT' => 'Portugués (Portugal)',
        'ro_RO' => 'Rumano',
        'ru_RU' => 'Ruso',
        'sk_SK' => 'Eslovaco',
        'sl_SI' => 'Esloveno',
        'sq_AL' => 'Albanés',
        'sr_RS' => 'Serbio',
        'sv_SE' => 'Sueco',
        'sw_KE' => 'Suajili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Télugu',
        'th_TH' => 'Tailandés',
        'tl_PH' => 'Tagalo',
        'tr_TR' => 'Turco',
        'uk_UA' => 'Ucraniano',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamita',
        'zh_CN' => 'Chino Simplificado (China)',
        'zh_HK' => 'Chino Tradicional (Hong Kong)',
        'zh_TW' => 'Chino Traditional (Taiwán)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Está en',
        'notOn' => 'No está en',
        'after' => 'Después',
        'before' => 'Antes',
        'between' => 'Entre',
        'today' => 'Hoy',
        'past' => 'Pasado',
        'future' => 'Futuro',
        'currentMonth' => 'Mes Actual',
        'lastMonth' => 'Mes Pasado',
        'currentQuarter' => 'Trimestre Actual',
        'lastQuarter' => 'Trimestre Pasado',
        'currentYear' => 'Año Actual',
        'lastYear' => 'Año Pasado',
        'lastSevenDays' => 'Últimos 7 Días',
        'lastXDays' => 'Últimos X Días',
        'nextXDays' => 'Próximos X Días',
        'ever' => 'Nunca',
      ),
      'searchRanges' => 
      array (
        'is' => 'Es',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'isOneOf' => 'Es Uno De',
        'isFromTeams' => 'Es de equipo',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equivale',
        'like' => 'Es como (%)',
        'startsWith' => 'Comienza con',
        'endsWith' => 'Termina con',
        'contains' => 'Contiene',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Equivale',
        'notEquals' => 'Diferentes',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual que',
        'lessThanOrEquals' => 'Menor o igual que',
        'between' => 'Entre',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Ninguno',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Teléfono móvil',
        'Office' => 'Oficina',
        'Fax' => 'Fax',
        'Home' => 'Hogar',
        'Other' => 'Otro',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Ventana emergente',
        'Email' => 'Correo electrónico',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Usted puede encontrar aquí la traducción: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Negrita',
          'italic' => 'Itálico',
          'underline' => 'Subrayado',
          'strike' => 'Tachado',
          'clear' => 'Quitar Estilo de Fuente',
          'height' => 'Alto de línea',
          'name' => 'Familia de Fuente',
          'size' => 'Tamaño de Fuente',
        ),
        'image' => 
        array (
          'image' => 'Visualización',
          'insert' => 'Insertar Imagen',
          'resizeFull' => 'Cambiar el tamaño a completo',
          'resizeHalf' => 'Cambiar el tamaño a la mitad',
          'resizeQuarter' => 'Cambiar el tamaño a un cuarto',
          'floatLeft' => 'Flotar Izquierda',
          'floatRight' => 'Flotar Derecha',
          'floatNone' => 'Sin Flotar',
          'dragImageHere' => 'Arrastrar una imagen aquí',
          'selectFromFiles' => 'Seleccionar desde Archivo',
          'url' => 'Url de Imagen',
          'remove' => 'Remover Imagen',
        ),
        'link' => 
        array (
          'link' => 'Enlace',
          'insert' => 'Insertar Enlace',
          'unlink' => 'Desenlazar',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto a mostrar',
          'url' => '¿A que URL debería ir este enlace?',
          'openInNewWindow' => 'Abrir en nueva ventana',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Enlace al Video',
          'insert' => 'Insertar Video',
          'url' => '¿URL del Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabla',
        ),
        'hr' => 
        array (
          'insert' => 'Insertar regla horizontal',
        ),
        'style' => 
        array (
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Cita',
          'pre' => 'Código',
          'h1' => 'Cabecera 1',
          'h2' => 'Cabecera 2',
          'h3' => 'Cabecera 3',
          'h4' => 'Cabecera 4',
          'h5' => 'Cabecera 5',
          'h6' => 'Cabecera 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista sin Ordenar',
          'ordered' => 'Lista Ordenada',
        ),
        'options' => 
        array (
          'help' => 'Ayuda',
          'fullscreen' => 'Pantalla Completa',
          'codeview' => 'Ver Código',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Párrafo',
          'outdent' => 'Anular sangría',
          'indent' => 'Sangría',
          'left' => 'Alinear Izquierda',
          'center' => 'Alinear Centro',
          'right' => 'Alinear Derecha',
          'justify' => 'Justificado',
        ),
        'color' => 
        array (
          'recent' => 'Color Reciente',
          'more' => 'Mas Colores',
          'background' => 'Color de Fondo',
          'foreground' => 'Color de Fuente',
          'transparent' => 'Transparente',
          'setTransparent' => 'Establecer transparente',
          'reset' => 'Resetear',
          'resetToDefault' => 'Restablecer a (por defecto)',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Atajos de teclado',
          'close' => 'Cerrar',
          'textFormatting' => 'Formato de texto',
          'action' => 'Acción',
          'paragraphFormatting' => 'Formato de párrafo',
          'documentStyle' => 'Estilo de Documento',
        ),
        'history' => 
        array (
          'undo' => 'Deshacer',
          'redo' => 'Rehacer',
        ),
      ),
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo (Vertical)',
      'SakuraVertical' => 'Sakura (Vertical)',
      'Violet' => 'Violeta',
      'VioletVertical' => 'Violeta Vertical',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revertir Importación',
      'Return to Import' => 'Regreso a Importar',
      'Run Import' => 'Ejecutar Importación',
      'Back' => 'Anterior',
      'Field Mapping' => 'Mapeo de Campo',
      'Default Values' => 'Valores por Defecto',
      'Add Field' => 'Añadir Campo',
      'Created' => 'Creado',
      'Updated' => 'Actualizado',
      'Result' => 'Resultado',
      'Show records' => 'Mostrar registros',
      'Remove Duplicates' => 'Eliminar Duplicados	',
      'importedCount' => 'Importado (recuento)',
      'duplicateCount' => 'Duplicados (recuento)',
      'updatedCount' => 'Actualizado (recuento)',
      'Create Only' => 'Sólo crear',
      'Create and Update' => 'Crear y Actualizar',
      'Update Only' => 'Sólo actualizar',
      'Update by' => 'Actualizado por',
      'Set as Not Duplicate' => 'Establecer como No Duplicado',
      'File (CSV)' => 'Archivo (CSV)',
      'First Row Value' => 'En primer valor de la fila',
      'Skip' => 'Omitir',
      'Header Row Value' => 'Fila de encabezado Valor',
      'Field' => 'Campo',
      'What to Import?' => '¿Lo que hay que importar?',
      'Entity Type' => 'Tipo de entidad',
      'What to do?' => '¿Qué hacer?',
      'Properties' => 'Propiedades',
      'Header Row' => 'Fila de encabezado',
      'Person Name Format' => 'Formato del nombre de persona',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Delimitador de campo',
      'Date Format' => 'Formato de fecha',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Formato de tiempo',
      'Currency' => 'Moneda',
      'Preview' => 'Avance',
      'Next' => 'Siguiente',
      'Step 1' => 'Paso 1',
      'Step 2' => 'Paso 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Importado',
      'Duplicates' => 'Duplicados',
    ),
    'messages' => 
    array (
      'utf8' => 'Debe ser codificado en UTF-8',
      'duplicatesRemoved' => 'Duplicados removidos',
    ),
    'fields' => 
    array (
      'file' => 'Archivo',
      'entityType' => 'Tipo de Entidad',
      'imported' => 'Registros Importados',
      'duplicates' => 'registros Duplicados',
      'updated' => 'registros Actualizados',
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Asunto',
      'emailAddress' => 'Correo Electrónico',
      'team' => 'Equipo',
      'status' => 'Estado',
      'assignToUser' => 'Asignado a Usuario',
      'host' => 'Host',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas supervisadas',
      'trashFolder' => 'Carpeta Basura',
      'ssl' => 'SSL',
      'createCase' => 'Crear Caso',
      'reply' => 'Responder',
      'caseDistribution' => 'Caso Distribución',
      'replyEmailTemplate' => 'Plantilla Responder',
      'replyFromAddress' => 'Responder De Dirección',
      'replyToAddress' => 'Responder a Dirección',
      'replyFromName' => 'Responder De Nombre',
      'targetUserPosition' => 'Objetivo Posición Usuario',
      'fetchSince' => 'Traer Desde',
      'addAllTeamUsers' => 'Para todos los usuarios del equipo',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notificar al remitente que sus emails han sido recividos',
      'createCase' => 'Crear asunto de forma automática para correos recibidos',
      'replyToAddress' => 'Especificar esta dirección de correo electrónico para que las respuestas lleguen aquí',
      'caseDistribution' => 'Asignar directamente a los usuarios del equipo de que forma serán distribuidoslos asuntos.',
      'assignToUser' => 'Email usuario/asunto será asignado a.',
      'team' => 'Email Equipo/asunto estará relacionado con',
      'targetUserPosition' => 'Definir la posición de los usuarios que se distribuirán con los casos.',
      'addAllTeamUsers' => 'Los correos van a aparecer en la Bandeja de Entrada de todos los usuarios de un equipo específico.',
    ),
    'links' => 
    array (
      'filters' => 'Filtros',
      'emails' => 'Los correos electrónicos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
      'caseDistribution' => 
      array (
        '' => 'Ninguna',
        'Direct-Assignment' => 'Asignación-Directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Menos-Ocupado',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Crear Correo Entrante',
      'IMAP' => 'IMAP',
      'Actions' => 'Acciones',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Activado',
      'clientId' => 'ID Cliente',
      'clientSecret' => 'Cliente Secreto',
      'redirectUri' => 'Redireccionar URI',
      'apiKey' => 'Clave API',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Seleccionar una integración en menú',
      'noIntegrations' => 'No hay integraciones disponibles',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtener las credenciales de  OAuth 2.0 desde la Consola de Google Developers.</b></p><p>Visita <a href="https://console.developers.google.com/project">Consola Google Developers</a> para obtener las credenciales de  OAuth 2.0 tales como  ID Cliente y Secreto de Cliente que son conocidos por ambos Google y la aplicación EspoCRM.</p>',
      'GoogleMaps' => '<p>Obtener clave API <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">aquí</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Estado',
      'executeTime' => 'Ejecutar a',
      'attempts' => 'Intentos Izquierda',
      'failedAttempts' => 'Intentos Fallidos',
      'serviceName' => 'Servicio',
      'method' => 'Método',
      'scheduledJob' => 'Tarea Programada',
      'data' => 'Datos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pendiente',
        'Success' => 'Exitoso',
        'Running' => 'Corriendo',
        'Failed' => 'Falló',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Ancho (%)',
      'link' => 'Enlace',
      'notSortable' => 'No ordenable',
      'align' => 'Alinear',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Izquierda',
        'right' => 'Derecha',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Entrada',
      'attachments' => 'Adjuntos',
      'targetType' => 'Objetivo',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'portals' => 'Portales',
    ),
    'filters' => 
    array (
      'all' => 'Todos',
      'posts' => 'Entradas',
      'updates' => 'Actualizaciones',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'Para mí',
        'users' => 'Para determinado/s usuario/s',
        'teams' => 'Para determinado/s equipo/s',
        'all' => 'A todos los usuarios',
        'portals' => 'A los usuarios del portal',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Escriba su mensaje aquí',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'logo' => 'Logotipo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Está activo',
      'isDefault' => 'Por defecto',
      'tabList' => 'Lista de pestañas',
      'quickCreateList' => 'Crear lista rápida',
      'companyLogo' => 'Logotipo',
      'theme' => 'Plantilla',
      'language' => 'Idioma',
      'dashboardLayout' => 'Distribución del Panel de control',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer dia de la semana',
      'defaultCurrency' => 'Moneda predeterminada',
      'customUrl' => 'URL personalizada',
      'customId' => 'ID personalizado',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'portalRoles' => 'Roles',
      'notes' => 'Notas',
      'articles' => 'Artículos de base de conocimientos',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Los Roles del Portal especificados se aplicarán a todos los usuarios de este portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Crear un Portal',
      'User Interface' => 'Interfaz de usuario',
      'General' => 'General',
      'Settings' => 'Ajustes',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
    ),
    'tooltips' => 
    array (
    ),
    'labels' => 
    array (
      'Access' => 'Acceso',
      'Create PortalRole' => 'Crear Roles para el portal',
      'Scope Level' => 'Nivel alcance',
      'Field Level' => 'Nivel de campo',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por Defecto',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Idioma',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autenticar',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'smtpEmailAddress' => 'Correo Electrónico',
      'exportDelimiter' => 'Exportar Delimitador',
      'receiveAssignmentEmailNotifications' => 'Recevir Notificaciones por Correo Electrónico al ser Asignado',
      'receiveMentionEmailNotifications' => 'Notificaciones por correo electrónico acerca de menciones en los mensajes',
      'receiveStreamEmailNotifications' => 'notificaciones por correo electrónico sobre los mensajes y actualizaciones de estado',
      'autoFollowEntityTypeList' => 'Seguir automaticamente',
      'signature' => 'Firma de correo',
      'dashboardTabList' => 'Lista de Pestañas',
      'defaultReminders' => 'Recordatorios por defecto',
      'theme' => 'Tema',
      'useCustomTabList' => 'Lista de Pestañas Personalizadas',
      'tabList' => 'Lista de Pestañas',
      'emailReplyToAllByDefault' => 'Correo electrónico responder a todos por defecto',
      'dashboardLayout' => 'Distribución del Panel de control',
      'emailReplyForceHtml' => 'Responder correo electrónico en formato HTML',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domingo',
        1 => 'Lunes',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notificaciones',
      'User Interface' => 'Interfaz de Usuario',
      'SMTP' => 'SMTP',
      'Misc' => 'Misceláneos',
      'Locale' => 'Localización',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'El usuario seguirá automáticamente todos los nuevos registros de los tipos de entidades seleccionadas, verá la información en las actividades y recibirá notificaciones.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
      'assignmentPermission' => 'Asignación de permisos',
      'userPermission' => 'Permisos de Usuario',
      'portalPermission' => 'Permisos del portal',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'teams' => 'Equipos',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Permite restringir la capacidad de los usuarios para asignar registros a otros usuarios.

all - Sin restricción

team - puede asignar a los usuarios de equipos propios

no - puede asignar sólo a la libre',
      'userPermission' => 'Permite restringir la capacidad de los usuarios para ver las actividades, calendario y secuencia de otros usuarios.

all - puede ver todo

equipo - pueden ver las actividades de los compañeros de equipo sólo se

no - no puede ver',
      'portalPermission' => 'Define un portal de acceso a la información, la capacidad de convertir los contactos a los usuarios del portal y enviar mensajes a los usuarios del portal.',
    ),
    'labels' => 
    array (
      'Access' => 'Acceso',
      'Create Role' => 'Crear Rol',
      'Scope Level' => 'Nivel alcance',
      'Field Level' => 'Nivel de campo',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'sin establecer',
        'enabled' => 'activado',
        'disabled' => 'desactivado',
      ),
      'levelList' => 
      array (
        'all' => 'todos',
        'team' => 'equipo',
        'account' => 'cuenta',
        'contact' => 'contacto',
        'own' => 'propio',
        'no' => 'no',
        'yes' => 'si',
        'not-set' => 'sin establecer',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
      'stream' => 'Corriente',
      'create' => 'Crear',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Todos los cambios en el control de acceso serán aplicacados después de limpiar la caché',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'job' => 'Trabajo',
      'scheduling' => 'Programación (crontab anotación)',
    ),
    'links' => 
    array (
      'log' => 'Registro de Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Crear Tarea programado',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Limpiar',
        'CheckInboundEmails' => 'Comprobar Correos Entrantes',
        'CheckEmailAccounts' => 'Compruebe cuentas de correo personales',
        'SendEmailReminders' => 'Enviar Recordatorios por Email',
        'AuthTokenControl' => 'Control del Token de Autenticación',
        'SendEmailNotifications' => 'Enviar notificaciones por correo electrónico',
        'ProcessMassEmail' => 'Enviar Correo Masivo',
        'ControlKnowledgeBaseArticleStatus' => 'Control de artículos de base de conocimientos',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Añada esta línea al archivo crontab para ejecutar trabajos Espo programados:',
        'mac' => 'Nota: Añada esta línea al archivo crontab para ejecutar trabajos Espo programados:',
        'windows' => 'Nota: Crear un archivo por lotes con los siguientes comandos para ejecutar trabajos programados de Espo usando tareas programadas de Windows:',
        'default' => 'Nota: Agregar este comando a Cron Job (Tarea Programada):',
      ),
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Define cuándo y con qué frecuencia se ejecutará el trabajo

*/5 * * * * - cada 5 minutos

0 */2 * * * - cada 2 horas

30 1 * * * - a 01:30 una vez al día

0 0 1 * * - en el primer día del mes',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Estado',
      'executionTime' => 'Tiempo de Ejecución',
      'target' => 'Objetivo',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usar Caché',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por Defecto',
      'baseCurrency' => 'Moneda Base',
      'currencyRates' => 'Valores Tarifa',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Idioma',
      'companyLogo' => 'Logo Compañia',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autenticar',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'outboundEmailFromName' => 'De Nombre',
      'outboundEmailFromAddress' => 'De la dirección',
      'outboundEmailIsShared' => 'Es Compartido',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros Por Página (Pequeño)',
      'tabList' => 'Lista de Pestañas',
      'quickCreateList' => 'Crear Lista Rápida',
      'exportDelimiter' => 'Exportar Delimitador',
      'globalSearchEntityList' => 'Lista Búsqueda Global Entidad',
      'authenticationMethod' => 'Método de Autentificación',
      'ldapHost' => 'Host',
      'ldapPort' => 'Puerto',
      'ldapAuth' => 'Autenticar',
      'ldapUsername' => 'Nombre de Usuario',
      'ldapPassword' => 'Contraseña',
      'ldapBindRequiresDn' => 'Bind Necesita Nd (Nombre Dominio)',
      'ldapBaseDn' => 'ND Base',
      'ldapAccountCanonicalForm' => 'Forma Canónica de la Cuenta',
      'ldapAccountDomainName' => 'Nombre de Dominio de la Cuenta',
      'ldapTryUsernameSplit' => 'Intentar dividir el nombre de Usuario',
      'ldapCreateEspoUser' => 'Crear Usuario en EspoCRM',
      'ldapSecurity' => 'Seguridad',
      'ldapUserLoginFilter' => 'Usar Filtro en el Login',
      'ldapAccountDomainNameShort' => 'Nombre Dominio Corto para la Cuenta',
      'ldapOptReferrals' => 'Referencias Opt',
      'ldapUserNameAttribute' => 'Atributo de nombre de usuario',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'Atributo del usuario Título',
      'ldapUserFirstNameAttribute' => 'Nombre de usuario Atributo',
      'ldapUserLastNameAttribute' => 'Apellido de usuario Atributo',
      'ldapUserEmailAddressAttribute' => 'Dirección de correo electrónico del usuario Atributo',
      'ldapUserTeams' => 'Los equipos de los usuarios',
      'ldapUserDefaultTeam' => 'Equipo de usuario por defecto',
      'ldapUserPhoneNumberAttribute' => 'Número de teléfono del usuario Atributo',
      'exportDisabled' => 'Desactivar Exportar (Solo admin está permitido)',
      'assignmentNotificationsEntityList' => 'Las entidades notifican sobre la asignación',
      'assignmentEmailNotifications' => 'Enviar Correos Electrónicos de notificación sobre Asignación',
      'assignmentEmailNotificationsEntityList' => 'Entidades a Notificar',
      'streamEmailNotifications' => 'Las notificaciones sobre actualizaciones en Steam para los usuarios internos',
      'portalStreamEmailNotifications' => 'Las notificaciones sobre actualizaciones en Steam para los usuarios del portal',
      'streamEmailNotificationsEntityList' => 'Notificaciones por correo electrónico corriente ámbitos',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Deshabilitar Avatars',
      'followCreatedEntities' => 'Seguir Endidades Creadas',
      'displayListViewRecordCount' => 'Mostrar Contador Total (en la vista de lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Deshabilitar Temas de Usuarios',
      'emailMessageMaxSize' => 'Tamaño máximo del Correo (MB)',
      'massEmailMaxPerHourCount' => 'mäximo número de mensajes de correo enviado por hora',
      'personalEmailMaxPortionSize' => 'Máximo tamaño de la porción de correo  para recuperar de una cuenta personal',
      'inboundEmailMaxPortionSize' => 'Máximo tamaño de la porción de correo para recuperar de una cuenta de grupo',
      'maxEmailAccountCount' => 'Máximo número de cuentas de correo personal por usuario',
      'authTokenLifetime' => 'Vida del Token de Autenticación (horas)',
      'authTokenMaxIdleTime' => 'Máximo tiempo de inactividad del Token de Autenticación (horas)',
      'dashboardLayout' => 'Diseño del Panel de control (por defecto)',
      'siteUrl' => 'URL del sitio',
      'addressPreview' => 'Vista previa de dirección',
      'addressFormat' => 'Formato de dirección',
      'notificationSoundsDisabled' => 'Desactivar los sonidos de notificación',
      'applicationName' => 'Nombre de la aplicación',
      'calendarEntityList' => 'Lista de Entidades Calendario',
      'mentionEmailNotifications' => 'Enviar notificaciones por correo electrónico acerca de menciones en los mensajes',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domingo',
        1 => 'Lunes',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Número de registros inicialmente representada en las vistas de lista.',
      'recordsPerPageSmall' => 'Contador de registros en los paneles de relación',
      'outboundEmailIsShared' => 'Permitir a los usuarios enviar mensajes a través de esta SMTP.',
      'followCreatedEntities' => 'Los usuarios seguirán automáticamente los registros que ellos crearon.',
      'emailMessageMaxSize' => 'Todos los correos entrantes que superen un tamaño especificado se omitirán.',
      'authTokenLifetime' => 'Define cuanto tiempo de vida tienen los tokens.
0 - significa que no caduca.',
      'authTokenMaxIdleTime' => 'Define cuándo caduca el Token luego del último acceso.
0 - significa que no caduca.',
      'userThemesDisabled' => 'Si está marcado, entonces los usuarios no podrán seleccionar otro tema.',
      'ldapUsername' => 'El sistema de usuario DN completo que permite a los usuarios buscar otros. E.g. "CN=LDAP usuario del sistema,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'La contraseña para acceder al servidor LDAP.',
      'ldapAuth' => 'Credenciales de acceso para el servidor LDAP.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:<br>- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'La opción para formatear el nombre de usuario en el formulario de DN.',
      'ldapBaseDn' => 'La base DN predeterminado utilizado para la búsqueda de los usuarios. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'La opción de dividir un nombre de usuario con el dominio.',
      'ldapOptReferrals' => 'La opción de dividir un nombre de usuario con el dominio.',
      'ldapCreateEspoUser' => 'Esta opción permite EspoCRM para crear un usuario del LDAP.',
      'ldapUserFirstNameAttribute' => 'atributo LDAP que se utiliza para determinar el nombre de usuario primero. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Equipos de usuario creado. Para más información, véase el perfil de usuario.',
      'ldapUserDefaultTeam' => 'equipo predeterminado de usuario creado. Para más información, véase el perfil de usuario.',
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Localización',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuración',
      'In-app Notifications' => 'Notificaciones In-app',
      'Email Notifications' => 'Notificaciones de Email',
      'Currency Settings' => 'Configuración Moneda',
      'Currency Rates' => 'Tasas de conversion de Divisas',
      'Mass Email' => 'Email Masivo',
      'Test Connection' => 'Conexión de prueba',
      'Connecting' => 'Conexión',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'La conexión fue establecida con éxito.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
      'positionList' => 'Lista de Posiciones',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'notes' => 'Notas',
      'roles' => 'Roles',
    ),
    'tooltips' => 
    array (
      'roles' => 'Todos los usuarios de este equipo tendrán acceso a la configuración desde los roles seleccionados',
      'positionList' => 'Posiciones disponibles en este equipo. Por ejemplo Vendedor, Gerente.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Crear Equipo',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'body' => 'Cuerpo',
      'entityType' => 'Tipo de Entidad',
      'header' => 'Cabecera',
      'footer' => 'Pié',
      'leftMargin' => 'Margen Izquierdo',
      'topMargin' => 'Margen Superior',
      'rightMargin' => 'Margen Derecho',
      'bottomMargin' => 'Margen Inferior',
      'printFooter' => 'Imprimir Pié',
      'footerPosition' => 'Posición del Pié',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Crear Plantilla',
    ),
    'tooltips' => 
    array (
      'footer' => 'Use {pageNumber} para imprimir el número de página.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'userName' => 'Nombre Usuario',
      'title' => 'Título',
      'isAdmin' => 'Es Administrador',
      'defaultTeam' => 'Equipo por Defecto',
      'emailAddress' => 'Correo electrónico',
      'phoneNumber' => 'Teléfono',
      'roles' => 'Roles',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del portal',
      'teamRole' => 'Posición',
      'password' => 'Contraseña',
      'currentPassword' => 'Contraseña Actual',
      'passwordConfirm' => 'Confirmar Contraseña',
      'newPassword' => 'Nueva Contraseña',
      'newPasswordConfirm' => 'Confirmar Contraseña Nueva',
      'avatar' => 'Avatar',
      'isActive' => 'Está Activo',
      'isPortalUser' => 'Es un usuario del portal',
      'contact' => 'Contacto',
      'accounts' => 'Empresas',
      'account' => 'Cuenta (Primaria)',
      'sendAccessInfo' => 'Enviar correo electrónico con los accesos a la información del usuario',
      'portal' => 'Portal',
      'gender' => 'Género',
    ),
    'links' => 
    array (
      'teams' => 'Equipos',
      'roles' => 'Roles',
      'notes' => 'Notas',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del portal',
      'contact' => 'Contacto',
      'accounts' => 'Empresas',
      'account' => 'Cuenta (Primaria)',
      'targetLists' => 'Lista de Objetivos',
    ),
    'labels' => 
    array (
      'Create User' => 'Crear Usuario',
      'Generate' => 'Generar',
      'Access' => 'Acceso',
      'Preferences' => 'Preferencias',
      'Change Password' => 'Cambiar Contraseña',
      'Teams and Access Control' => 'Equipos y Control de Acceso',
      'Forgot Password?' => '¿Olvidó la Contraseña?',
      'Password Change Request' => 'Solicitar Cambio de Contraseña',
      'Email Address' => 'Correo Electrónico',
      'External Accounts' => 'Cuentas Externas',
      'Email Accounts' => 'Cuentas de Email',
      'Portal' => 'Portal',
      'Create Portal User' => 'Crear usuario del portal',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Todos los registros creados por este usuario serán relacionados a este equipo por defecto.',
      'userName' => 'Letras a-z, números 0-9 y guiones bajos están permitidos',
      'isAdmin' => 'El usuario administrador puede tener acceso a todo.',
      'isActive' => 'Si lo desmarca, el usuario no podrá iniciar sesión.',
      'teams' => 'Equipos a los que este usuario pertenece. Nivel de control de acceso se hereda de los roles de equipo.',
      'roles' => 'Roles de acceso adicionales. Úsalo si el usuario no pertenece a ningún equipo o si necesita ampliar el nivel de control de acceso sólo para este usuario.',
      'portalRoles' => 'Los roles del portal se utilizan para extender el nivel de control de acceso exclusivo para este usuario.',
      'portals' => 'El usuario tiene accesos a los siguientes portales.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'La Contraseña será enviada al correo electrónico del usuario',
      'accountInfoEmailSubject' => 'Información Cuenta',
      'accountInfoEmailBody' => 'Información de tu cuenta:

Nombre Usuario: {userName}
Contraseña: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Solicitud de Cambio de Contraseña',
      'passwordChangeLinkEmailBody' => 'Usted puede cambiar su contraseña a través este enlace {link}. Esta url única expirará pronto.',
      'passwordChanged' => 'La Contraseña ha sido cambiada',
      'userCantBeEmpty' => 'El nombre de usuario no puede estar vacío',
      'wrongUsernamePasword' => 'Nombre de usuario/contraseña incorrectos',
      'emailAddressCantBeEmpty' => 'La dirección de correo no puede estar vacía',
      'userNameEmailAddressNotFound' => 'Nombre de Usuario/Correo no encontrado',
      'forbidden' => 'Prohibido, por favor intente después',
      'uniqueLinkHasBeenSent' => 'El enlace único ha sido enviado a la dirección de correo electrónico especificada.',
      'passwordChangedByRequest' => 'La contraseña ha sido cambiada.',
      'setupSmtpBefore' => 'Es necesario establecer <a href="{url}">configuración SMTP</a> para que el sistema sea capaz de enviar la contraseña por correo electrónico. ',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'No definido',
        'Male' => 'Masculino',
        'Female' => 'Femenino',
        'Neutral' => 'Neutral',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Sólo mi equipo',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'activePortal' => 'Portal activo',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'website' => 'Sito Web',
      'phoneNumber' => 'Teléfono',
      'billingAddress' => 'Dirección de Facturación',
      'shippingAddress' => 'Dirección de Envío',
      'description' => 'Descripción',
      'sicCode' => 'Sic Code',
      'industry' => 'Industria',
      'type' => 'Tipo',
      'contactRole' => 'Título',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de Objetivos',
      'targetList' => 'Lista de Objetivos',
    ),
    'links' => 
    array (
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniones (ampliado)',
      'callsPrimary' => 'Llamadas (ampliado)',
      'tasksPrimary' => 'Tareas (ampliado)',
      'emailsPrimary' => 'Correos (ampliado)',
      'targetLists' => 'Lista de Objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'portalUsers' => 'Usuarios del portal',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Inversor',
        'Partner' => 'Socio',
        'Reseller' => 'Revendedor',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Publicidad',
        'Apparel & Accessories' => 'Ropa y Accesorios',
        'Automotive' => 'Automotriz',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnolodía',
        'Building Materials & Equipment' => 'Materiales de construcción y equipamiento',
        'Chemical' => 'Química',
        'Computer' => 'Computación',
        'Education' => 'Educación',
        'Electronics' => 'Electrónicos',
        'Energy' => 'Energía',
        'Entertainment & Leisure' => 'Entretenimiento y Ocio',
        'Finance' => 'Finanzas',
        'Food & Beverage' => 'Alimentación y bebidas',
        'Grocery' => 'Comestibles',
        'Healthcare' => 'Cuidado de la Salud',
        'Insurance' => 'Seguros',
        'Legal' => 'Jurídico',
        'Manufacturing' => 'Fabricación',
        'Publishing' => 'Publicaciones',
        'Real Estate' => 'Bienes Raices',
        'Service' => 'Servicio',
        'Sports' => 'Deportes',
        'Software' => 'Software',
        'Technology' => 'Tecnología',
        'Telecommunications' => 'Telecomunicaciones',
        'Television' => 'Televisión',
        'Transportation' => 'Transporte',
        'Venture Capital' => 'Capital de Riesgo',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Crear Cuenta',
      'Copy Billing' => 'Copia Facturación',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Clientes',
      'partners' => 'Socios',
      'recentlyCreated' => 'Creado recientemente',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mes',
      'week' => 'Semana',
      'day' => 'Día',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Día',
      'timeline' => 'Línea de tiempo',
    ),
    'labels' => 
    array (
      'Today' => 'Hoy',
      'Create' => 'Crear',
      'Shared' => 'Compartido',
      'Add User' => 'Agregar usuario',
      'current' => 'corriente',
      'time' => 'Tiempo',
      'User List' => 'Lista de usuarios',
      'Manage Users' => 'Administrar usuarios',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'direction' => 'Dirección',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Potenciales',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planeadas',
        'Held' => 'Celebradas',
        'Not Held' => 'Sin Celebrar',
      ),
      'direction' => 
      array (
        'Outbound' => 'Saliente',
        'Inbound' => 'Entrante',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Ninguno',
        'Accepted' => 'Aceptado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Marcar como Celebrada',
      'setNotHeld' => 'Marcar como No Celebrada',
    ),
    'labels' => 
    array (
      'Create Call' => 'Crear Llamada',
      'Set Held' => 'Marcar como Celebrada',
      'Set Not Held' => 'Marcar como No Celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planeadas',
      'held' => 'Celebradas',
      'todays' => 'De Hoy',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'description' => 'Descripción',
      'status' => 'Estado',
      'type' => 'Tipo',
      'startDate' => 'Fecha de Inicio',
      'endDate' => 'Fecha de Fin',
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'sentCount' => 'Enviado',
      'openedCount' => 'Abierto',
      'clickedCount' => 'Cliqueados',
      'optedOutCount' => 'optado por no',
      'bouncedCount' => 'Rebotados',
      'hardBouncedCount' => 'Rebotados Duro',
      'softBouncedCount' => 'Rebotado Suave',
      'leadCreatedCount' => 'Potenciales Creados',
      'revenue' => 'Ingresos',
      'revenueConverted' => 'ingresos (convertido)',
      'budget' => 'Presupuesto',
      'budgetConverted' => 'Presupuesto (convertido)',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Potenciales',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Registro de Log',
      'massEmails' => 'Emails Masivos',
      'trackingUrls' => 'URLs de Seguimiento',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Correo',
      ),
      'status' => 
      array (
        'Planning' => 'Planificación',
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
        'Complete' => 'Completada',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Crear Campaña',
      'Target Lists' => 'Lista de Objetivos',
      'Statistics' => 'Estadísticas',
      'hard' => 'duro',
      'soft' => 'suave',
      'Unsubscribe' => 'Desuscribirse',
      'Mass Emails' => 'Correos electrónicos masivos',
      'Email Templates' => 'Plantillas de correos',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Usted ha cancelado la suscripción a nuestra lista de correo.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Acción',
      'actionDate' => 'Fecha',
      'data' => 'Datos',
      'campaign' => 'Campaña',
      'parent' => 'Objetivo',
      'object' => 'Objeto',
      'application' => 'Aplicacion',
      'queueItem' => 'Item de Cola',
      'stringData' => 'Cadena de datos',
      'stringAdditionalData' => 'Cadena de datos adicional',
    ),
    'links' => 
    array (
      'queueItem' => 'Cola de artículos',
      'parent' => 'Padre',
      'object' => 'Objeto',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Enviado',
        'Opened' => 'Abierto',
        'Opted Out' => 'optado por no',
        'Bounced' => 'Rebotados',
        'Clicked' => 'Cliqueados',
        'Lead Created' => 'Potencial Creado',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Todos',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Enviado',
      'opened' => 'Abierto',
      'optedOut' => 'optado por no',
      'bounced' => 'Rebotados',
      'clicked' => 'Cliqueados',
      'leadCreated' => 'Potencial Creado',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Código para insertar en lugar de la URL',
      'campaign' => 'Campaña',
    ),
    'links' => 
    array (
      'campaign' => 'Campaña',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Crear URL de Seguimiento',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'number' => 'Número',
      'status' => 'Estado',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'contacts' => 'Contactos',
      'priority' => 'Prioridad',
      'type' => 'Tipo',
      'description' => 'Descripción',
      'inboundEmail' => 'Cuenta de Correo',
      'lead' => 'Dirigir',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Cuenta de Correo',
      'account' => 'Cuenta',
      'contact' => 'Contratos (Primaria)',
      'Contacts' => 'Contactos',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'articles' => 'Artículas de ayuda',
      'lead' => 'Dirigir',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'Pending' => 'Pendiente',
        'Closed' => 'Cerrados',
        'Rejected' => 'Rechazado',
        'Duplicate' => 'Duplicar',
      ),
      'priority' => 
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Pregunta',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Crear Caso',
      'Close' => 'Cerrar',
      'Reject' => 'Rechazar',
      'Closed' => 'Cerrados',
      'Rejected' => 'Rechazado',
    ),
    'presetFilters' => 
    array (
      'open' => 'Abiertos',
      'closed' => 'Cerrados',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'account' => 'Cuenta',
      'accounts' => 'Empresas',
      'phoneNumber' => 'Teléfono',
      'accountType' => 'Tipo de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'opportunityRole' => 'Rol de Oportunidad',
      'accountRole' => 'Título',
      'description' => 'Descripción',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de Objetivos',
      'targetList' => 'Lista de Objetivos',
      'portalUser' => 'Usuarios de portal',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
      'targetLists' => 'Lista de Objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'account' => 'Cuentas (Primaria)',
      'accounts' => 'Empresas',
      'casesPrimary' => 'Casos (Primaria)',
      'portalUser' => 'Usuarios de portal',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Crear Contacto',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Ninguno--',
        'Decision Maker' => 'Tomador de Desiciones',
        'Evaluator' => 'Evaluador',
        'Influencer' => 'Factor de Influencia',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Usuarios de Portal',
      'notPortalUsers' => 'Los usuarios no Portal',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Crear Documento',
      'Details' => 'Detalles',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'file' => 'Archivo',
      'type' => 'Tipo',
      'source' => 'Fuente',
      'publishDate' => 'Publicar Fecha',
      'expirationDate' => 'Fecha de Expiración',
      'description' => 'Descripción',
      'accounts' => 'Empresas',
      'folder' => 'Carpeta',
    ),
    'links' => 
    array (
      'accounts' => 'Empresas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Carpeta',
      'leads' => 'Leads',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Draft' => 'Borrador',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado',
      ),
      'type' => 
      array (
        '' => 'Ninguno',
        'Contract' => 'Contrato',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Contrato de licencia',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'draft' => 'Borrador',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Crear Carpeta de Documentos',
      'Manage Categories' => 'Administrar Carpetas',
      'Documents' => 'Documentos',
    ),
    'links' => 
    array (
      'documents' => 'Documentos',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'target' => 'Objetivo',
      'sentAt' => 'Enviado',
      'attemptCount' => 'Intentos',
      'emailAddress' => 'Correo Electrónico',
      'massEmail' => 'Email Masivo',
      'isTest' => 'Es una prueba',
    ),
    'links' => 
    array (
      'target' => 'Objetivo',
      'massEmail' => 'Email Masivo',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pendiente',
        'Sent' => 'Enviado',
        'Failed' => 'Falló',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pendiente',
      'sent' => 'Enviado',
      'failed' => 'Falló',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Crear artículo',
      'Any' => 'Alguna',
      'Send in Email' => 'Enviar por correo electrónico',
      'Move Up' => 'Ascender',
      'Move Down' => 'Mover hacia abajo',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'type' => 'Tipo',
      'attachments' => 'Archivos adjuntos',
      'publishDate' => 'Fecha de publicación',
      'expirationDate' => 'Fecha de caducidad',
      'description' => 'Descripción',
      'body' => 'Cuerpo',
      'categories' => 'Categorias',
      'language' => 'Idioma',
      'portals' => 'Portales',
    ),
    'links' => 
    array (
      'cases' => 'Casos',
      'opportunities' => 'Oportunidades',
      'categories' => 'Categorias',
      'portals' => 'Portales',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'En revisión',
        'Draft' => 'Borrador',
        'Archived' => 'Archivado',
        'Published' => 'Publicado',
      ),
      'type' => 
      array (
        'Article' => 'Artículo',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Si no está vacía, entonces este artículo estará disponible sólo en portales específicos. Si está vacío, entonces estará disponible en todos los portales.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publicado',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Crear categoría',
      'Manage Categories' => 'Administrar categorías',
      'Articles' => 'Artículos',
    ),
    'links' => 
    array (
      'articles' => 'Artículos',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertido a',
      'Create Lead' => 'Crear Potencial',
      'Convert' => 'Convertir',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sito Web',
      'phoneNumber' => 'Teléfono',
      'accountName' => 'Nombre de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'status' => 'Estado',
      'source' => 'Fuente',
      'opportunityAmount' => 'Costo de Oportunidad',
      'opportunityAmountConverted' => 'Costo de Oportunidad (convertido)',
      'description' => 'Descripción',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de Objetivos',
      'targetList' => 'Lista de Objetivos',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'cases' => 'Casos',
      'documents' => 'Documentos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En Proceso',
        'Converted' => 'Convertidos',
        'Recycled' => 'Reciclado',
        'Dead' => 'Muerto',
      ),
      'source' => 
      array (
        '' => 'Ninguno',
        'Call' => 'Llamada',
        'Email' => 'Correo electrónico',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Socio',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio Web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activo',
      'actual' => 'Actuales',
      'converted' => 'Convertidos',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'storeSentEmails' => 'Almacenar Correos Enviados',
      'startAt' => 'Fecha de Comienzo',
      'fromAddress' => 'De la dirección',
      'fromName' => 'De Nombre',
      'replyToAddress' => 'Responder a la dirección',
      'replyToName' => 'Responder al Nombre',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de Correo',
      'inboundEmail' => 'Cuenta de correo',
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'optOutEntirely' => 'Opt-Out Entirely',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Objetivos',
      'excludingTargetLists' => 'Lista de Objetivos Excluídos',
      'queueItems' => 'Items en cola',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de Correo',
      'inboundEmail' => 'Cuenta de correo',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Borrador',
        'Pending' => 'Pendiente',
        'In Process' => 'En Proceso',
        'Complete' => 'Completada',
        'Canceled' => 'Cancelado',
        'Failed' => 'Falló',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Crear correo masivo',
      'Send Test' => 'Enviar prueba',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Seleccione al menos un objetivo.',
      'testSent' => 'Se supone que el/los email/s de preuebas fueron enviados',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Direcciones de correo de los destinatarios que se desuscribieron serán marcados como optado por salir y no van a recibir ningún correo masivo.',
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Potenciales',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planeadas',
        'Held' => 'Celebradas',
        'Not Held' => 'Sin Celebrar',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Ninguno',
        'Accepted' => 'Aceptado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Marcar como Celebrada',
      'setNotHeld' => 'Marcar como No Celebrada',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Crear Reunión',
      'Set Held' => 'Marcar como Celebrada',
      'Set Not Held' => 'Marcar como No Celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
      'on time' => 'a tiempo',
      'before' => 'antes',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planeadas',
      'held' => 'Celebradas',
      'todays' => 'De Hoy',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'account' => 'Cuenta',
      'stage' => 'Etapa',
      'amount' => 'Cantidad',
      'probability' => 'Probabilidad, %',
      'leadSource' => 'Fuente Principal',
      'doNotCall' => 'No Llamar',
      'closeDate' => 'Fecha de cierre',
      'contacts' => 'Contactos',
      'description' => 'Descripción',
      'amountConverted' => 'Cantidad (convertido)',
      'amountWeightedConverted' => 'Cantidad Ponderada',
      'campaign' => 'Campaña',
    ),
    'links' => 
    array (
      'contacts' => 'Contactos',
      'documents' => 'Documentos',
      'campaign' => 'Campaña',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospección',
        'Qualification' => 'Calificación',
        'Needs Analysis' => 'Análisis de Necesidades',
        'Value Proposition' => 'Valor de la Propuesta',
        'Id. Decision Makers' => 'Id. Tomadores de Decisiones',
        'Perception Analysis' => 'Análisis de la Percepción',
        'Proposal/Price Quote' => 'Propuesta/precio Presupuesto',
        'Negotiation/Review' => 'Negociación/Revisión',
        'Closed Won' => 'Cerrado Ganado',
        'Closed Lost' => 'Cerrado Perdido',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Crear Oportunidad',
    ),
    'presetFilters' => 
    array (
      'open' => 'Abiertos',
      'won' => 'Ganados',
      'lost' => 'Perdido',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sito Web',
      'accountName' => 'Nombre de Cuenta',
      'phoneNumber' => 'Teléfono',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'description' => 'Descripción',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Crear Objetivo',
      'Convert to Lead' => 'Convertir en Lider',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'description' => 'Descripción',
      'entryCount' => 'Contador de entrada',
      'campaigns' => 'Campañas',
      'endDate' => 'Fecha de Fin',
      'targetLists' => 'Lista de Objetivos',
    ),
    'links' => 
    array (
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Potenciales',
      'campaigns' => 'Campañas',
      'massEmails' => 'Correos Masivos',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Boletín de noticias',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Crear un objetivo de lista',
      'Opted Out' => 'optado por no',
      'Cancel Opt-Out' => 'Cancelar Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de vencimiento',
      'dateStartDate' => 'Fecha de Inicio (todo el día)',
      'dateEndDate' => 'Fecha de fin (todo el día)',
      'priority' => 'Prioridad',
      'description' => 'Descripción',
      'isOverdue' => 'Atrasado',
      'account' => 'Cuenta',
      'dateCompleted' => 'Fecha de completado',
      'attachments' => 'Adjuntos',
    ),
    'links' => 
    array (
      'attachments' => 'Adjuntos',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Sin Empezar',
        'Started' => 'Comenzado',
        'Completed' => 'Completado',
        'Canceled' => 'Cancelado',
        'Deferred' => 'Diferido',
      ),
      'priority' => 
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Crear Tarea',
      'Complete' => 'Completada',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actuales',
      'completed' => 'Completado',
      'todays' => 'De Hoy',
      'overdue' => 'Atrazadas',
    ),
  ),
  'Project' => 
  array (
    'labels' => 
    array (
      'Create Project' => 'Create Project',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'account' => 'Account',
    ),
    'links' => 
    array (
      'projectTasks' => 'Project Tasks',
    ),
  ),
  'ProjectTask' => 
  array (
    'labels' => 
    array (
      'Create ProjectTask' => 'Create Project Task',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'project' => 'Project',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'estimatedEffort' => 'Estimated Effort (hrs)',
      'actualDuration' => 'Actual Duration (hrs)',
    ),
  ),
);
?>