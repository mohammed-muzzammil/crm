<?php
return [
  'Account' => [
    'afterRelate' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Account\\Contacts',
        'order' => 9
      ]
    ],
    'afterUnrelate' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Account\\Contacts',
        'order' => 9
      ]
    ]
  ],
  'Common' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\AssignmentEmailNotification',
        'order' => 9
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ],
      2 => [
        'className' => 'Espo\\Hooks\\Common\\Notifications',
        'order' => 10
      ],
      3 => [
        'className' => 'Espo\\Hooks\\Common\\StreamNotesAcl',
        'order' => 10
      ],
      4 => [
        'className' => 'Espo\\Hooks\\Common\\WebSocketSubmit',
        'order' => 20
      ],
      5 => [
        'className' => 'Espo\\Hooks\\Common\\Webhook',
        'order' => 101
      ]
    ],
    'beforeSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\CurrencyConverted',
        'order' => 1
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Common\\NextNumber',
        'order' => 9
      ],
      2 => [
        'className' => 'Espo\\Hooks\\Common\\Formula',
        'order' => 11
      ],
      3 => [
        'className' => 'Espo\\Hooks\\Common\\CurrencyDefault',
        'order' => 200
      ]
    ],
    'beforeRemove' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Notifications',
        'order' => 10
      ]
    ],
    'afterRemove' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Common\\Notifications',
        'order' => 10
      ],
      2 => [
        'className' => 'Espo\\Hooks\\Common\\Webhook',
        'order' => 101
      ]
    ],
    'afterRelate' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ]
    ],
    'afterUnrelate' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ]
    ]
  ],
  'Integration' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Integration\\GoogleMaps',
        'order' => 9
      ]
    ]
  ],
  'Note' => [
    'beforeSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Note\\Mentions',
        'order' => 9
      ]
    ],
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Note\\Notifications',
        'order' => 14
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Note\\WebSocketSubmit',
        'order' => 20
      ]
    ]
  ],
  'Notification' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Notification\\WebSocketSubmit',
        'order' => 20
      ]
    ]
  ]
];
