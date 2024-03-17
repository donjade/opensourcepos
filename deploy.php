<?php
namespace Deployer;

require 'recipe/codeigniter.php';

// Config

set('repository', 'git@github.com:jadezdon/opensourcepos.git');

set('bin/php', function () {
    return '/usr/bin/php7.4';
});

set('bin/composer', function () {
    return '/usr/bin/php7.4 /usr/local/bin/composer';
});

set('branch', 'feature/sales-items-grid');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('185.124.109.101')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/opensourcepos');

desc('Build assets');
task('deploy:build_assets', function () {
    cd('{{release_or_current_path}}');
    run('npm install');
    run('{{bin/php}} bin/install.php translations develop');
});

desc('Deploys your project');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'deploy:build_assets',
    'deploy:publish',
]);

// Hooks

after('deploy:failed', 'deploy:unlock');
