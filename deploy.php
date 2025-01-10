<?php 



namespace Deployer;

require 'recipe/symfony.php';

// Config
set('use_relative_symlink', true);
set('repository', 'git@github.com:htmlshaman1/sideproject.git');
host('percent-increase.com')
    ->set('remote_user', 'zerocool')
    ->set('deploy_path', '/var/www/test')
    ->set('env', ['APP_ENV' => 'prod']);
    
set('composer_options', '--no-dev --optimize-autoloader --no-scripts');

set('shared_dirs', [
    'var/log',
    'vendor',
    'uploads',
    'public/media',
]);
set('writable_dirs', [
    'var',
    'var/cache',
    'var/log',
    'var/sessions',
    'uploads',
    'node_ms',
    'public/media',
]);

set('shared_files', ['.env.local']);



set('git_tty', false);

// Hosts



// Hooks

after('deploy:failed', 'deploy:unlock');




