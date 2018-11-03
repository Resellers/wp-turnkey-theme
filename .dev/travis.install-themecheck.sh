#!/bin/bash

set -e

export WP_CORE_DIR=/tmp/wordpress
mkdir -p $WP_CORE_DIR
cd $WP_CORE_DIR

php /tmp/wp-cli.phar core download --version=$WP_VERSION
php /tmp/wp-cli.phar config create \
	--dbname=wordpress \
	--dbuser=root \
	--dbpass="" \
	--skip-check

php /tmp/wp-cli.phar db create
php /tmp/wp-cli.phar core install \
	--url=http://test.dev \
	--title="WordPress Site" \
	--admin_user=admin \
	--admin_password=password \
	--admin_email=admin@tests.dev \
	--skip-email

php /tmp/wp-cli.phar package install anhskohbo/wp-cli-themecheck
php /tmp/wp-cli.phar plugin install theme-check --activate

export INSTALL_PATH=$WP_CORE_DIR/wp-content/themes/$WP_THEME
mkdir -p $INSTALL_PATH
rsync -av --exclude-from $TRAVIS_BUILD_DIR/.distignore --delete $TRAVIS_BUILD_DIR/ $INSTALL_PATH/
