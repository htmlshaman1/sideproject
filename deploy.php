<?php
namespace Deployer;

require 'recipe/symfony.php';

host('percent-increase.com')
    ->set('remote_user', 'zerocool')
    ->set('deploy_path', '/var/www/test');

set('repository', 'file://home/zerocool/Desktop/sideproject/');
add('shared_files', ['.env']);
add('shared_dirs', ['var/log', 'var/sessions']);
add('writable_dirs', ['var']);

after('deploy:failed', 'deploy:unlock');
