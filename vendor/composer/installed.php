<?php return array(
    'root' => array(
        'name' => 'amrita/ocis-dav-client',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'amrita/dav' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => 'authbearer',
            'type' => 'library',
            'install_path' => __DIR__ . '/../amrita/dav',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'amrita/ocis-dav-client' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
