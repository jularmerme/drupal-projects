<?php

  /**
   * @file
   * Install, update and uninstall functions for the rsvp module.
   */

   function rsvplist_schema() {
    /**  Create a database table called 'rsvplist' with the following columns:
    * 1. id [serial]
    * 2. uid [int]
    * 3. nid [int]
    * 4. mail [varchar]
    * 5. created [int]
    */ 

    $schema['rsvplist'] = [
      'description' => 'Stores email, timestamp, nid and uid for an RSVP.',
      'fields' => [
        'id' => [
          'description' => 'The primary identifier for the record',
          'type' => 'serial',
          'size' => 'small',
          'unsigned' => TRUE,
          'not null' => TRUE,
        ],
        'uid' => [
          'description' => 'The {users}.uid that added this RSVP',
          'type' => 'int',
          'not null' => TRUE,
          'default' => 0,
         ],
         'nid' => [
          'description' => 'The {node}.nid for this RSVP.',
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 0,
         ],
         'mail' => [
          'description' => 'User\'s email address',
          'type' => 'varchar',
          'length' => 64,
          'not null' => FALSE,
          'default' => '',
         ],
         'created' => [
          'description' => 'Timestamp for when RSVP was created',
          'type' => 'int',
          'not null' => TRUE,
          'default' => 0,
         ],
         'primary key' => ['id'],
         'indexes' => [
          'node' => ['nid'],
          'node_user' => ['nid', 'uid'],
         ],
      ],
    ];

    // Create a database table named 'rsvplist_enabled' with the following fields:
    // 1. nid [int]

    $schema['rsvplist_enabled'] = [
      'description' => 'Tracks wheter RSVP is enabled or not for a node.',
      'fields' => [
        'nid' => [
          'description' => 'The {node}.nid that has RSVPlist enabled.',
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 0,
        ],
      ],
      'primary key' => ['nid'],
    ];

    return $schema;
 
   }