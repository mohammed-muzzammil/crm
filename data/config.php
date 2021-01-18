<?php
return [
  'cacheTimestamp' => 1610961417,
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => 'remotemysql.com',
    'port' => '3306',
    'charset' => 'utf8mb4',
    'dbname' => 'x9oKQJOBSJ',
    'user' => 'x9oKQJOBSJ',
    'password' => '4M9rZUEHWO'
  ],
  'useCache' => true,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 5,
  'applicationName' => 'TheScholars',
  'version' => '6.0.9',
  'timeZone' => 'Asia/Dili',
  'dateFormat' => 'DD.MM.YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 1,
  'thousandSeparator' => ',',
  'decimalMark' => '.',
  'exportDelimiter' => ',',
  'currencyList' => [
    0 => 'INR'
  ],
  'defaultCurrency' => 'INR',
  'baseCurrency' => 'INR',
  'currencyRates' => [],
  'outboundEmailIsShared' => true,
  'outboundEmailFromName' => 'muzzammilsilat56@gmail.com',
  'outboundEmailFromAddress' => 'muzzammilsilat56@gmail.com',
  'smtpServer' => '',
  'smtpPort' => 587,
  'smtpAuth' => false,
  'smtpSecurity' => 'TLS',
  'smtpUsername' => '',
  'smtpPassword' => '',
  'language' => 'en_US',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30
  ],
  'authenticationMethod' => 'Espo',
  'globalSearchEntityList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity'
  ],
  'tabList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'CounselorDashboard',
    3 => 'Lead',
    4 => 'Email',
    5 => 'Calendar',
    6 => 'Meeting',
    7 => 'Call',
    8 => 'Task',
    9 => 'Document',
    10 => 'Campaign',
    11 => 'KnowledgeBaseArticle',
    12 => 'Stream',
    13 => 'User'
  ],
  'quickCreateList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'CounselorDashboard',
    3 => 'Lead',
    4 => 'Opportunity',
    5 => 'Meeting',
    6 => 'Call',
    7 => 'Task',
    8 => 'Case',
    9 => 'Email'
  ],
  'exportDisabled' => false,
  'adminNotifications' => true,
  'adminNotificationsNewVersion' => true,
  'adminNotificationsCronIsNotConfigured' => true,
  'adminNotificationsNewExtensionVersion' => true,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => [
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case'
  ],
  'assignmentNotificationsEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task',
    3 => 'Email'
  ],
  'portalStreamEmailNotifications' => true,
  'streamEmailNotificationsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailNotificationsTypeList' => [
    0 => 'Post',
    1 => 'Status',
    2 => 'EmailReceived'
  ],
  'emailNotificationsDelay' => 30,
  'emailMessageMaxSize' => 10,
  'notificationsCheckInterval' => 10,
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => false,
  'b2cMode' => false,
  'restrictedMode' => false,
  'theme' => 'EspoVertical',
  'massEmailMaxPerHourCount' => 100,
  'massEmailVerp' => false,
  'personalEmailMaxPortionSize' => 50,
  'inboundEmailMaxPortionSize' => 50,
  'emailAddressLookupEntityTypeList' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'authTokenLifetime' => 0,
  'authTokenMaxIdleTime' => 120,
  'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
  'addressFormat' => 1,
  'displayListViewRecordCount' => true,
  'dashboardLayout' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'default-stream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 2,
          'width' => 2,
          'height' => 4
        ],
        1 => (object) [
          'id' => 'default-activities',
          'name' => 'Activities',
          'x' => 2,
          'y' => 0,
          'width' => 2,
          'height' => 4
        ],
        2 => (object) [
          'id' => 'd33701',
          'name' => 'SalesByMonth',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 2
        ]
      ]
    ]
  ],
  'calendarEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task'
  ],
  'activitiesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'historyEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'busyRangesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'cleanupJobPeriod' => '1 month',
  'cleanupActionHistoryPeriod' => '15 days',
  'cleanupAuthTokenPeriod' => '1 month',
  'currencyFormat' => 2,
  'currencyDecimalPlaces' => 2,
  'aclStrictMode' => true,
  'aclAllowDeleteCreated' => false,
  'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
  'inlineAttachmentUploadMaxSize' => 20,
  'textFilterUseContainsForVarchar' => false,
  'tabColorsDisabled' => false,
  'massPrintPdfMaxCount' => 50,
  'emailKeepParentTeamsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailWithContentEntityTypeList' => [
    0 => 'Case'
  ],
  'recordListMaxSizeLimit' => 200,
  'noteDeleteThresholdPeriod' => '1 month',
  'noteEditThresholdPeriod' => '7 days',
  'emailForceUseExternalClient' => false,
  'useWebSocket' => false,
  'auth2FAMethodList' => [
    0 => 'Totp'
  ],
  'personNameFormat' => 'firstLast',
  'newNotificationCountInTitle' => false,
  'isInstalled' => true,
  'microtime' => 1610961417.5883,
  'siteUrl' => 'http://localhost/EspoCRM-6.0.9',
  'passwordSalt' => 'd0cbced19fd8e2dc',
  'cryptKey' => '0d9a4e8d9d54fec62913bccc6fe844ed',
  'hashSecretKey' => '05c6246b4655c9d8f7a89e6f25f07530',
  'fullTextSearchMinLength' => 4,
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.17',
  'avatarsDisabled' => false,
  'scopeColorsDisabled' => false,
  'tabIconsDisabled' => false,
  'userThemesDisabled' => false,
  'dashletsOptions' => (object) [],
  'companyLogoId' => '6000215dc744048ed',
  'companyLogoName' => 'lodo.JPG'
];
