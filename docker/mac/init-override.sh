#!/usr/bin/env bash

OS=`uname -s`
PARENT_PATH=$( cd "$(dirname "${BASH_SOURCE[0]}")" ; pwd -P )
PROJECT_PATH=`pwd`

if [[ "$OS" != "Darwin" ]]; then
    exit 0;
fi

if [[ -f ${PARENT_PATH}/../../docker-compose.override.yml ]]; then
	echo "You already have a docker-compose.override.yml file. Exiting..."
    exit 0
fi

read -p "What is your docker project workdir ? [/var/www/html]: " workdir
workdir=${workdir:-/var/www/html}

read -p "What is your main PHP service name in your docker-compose.yml ? [app]: " container
container=${container:-app}

cp ${PARENT_PATH}/docker-compose.override.yml docker-compose.override.yml
sed -i '' "s#__PROJECT_DIR__#${PROJECT_PATH}#g" docker-compose.override.yml
sed -i '' "s#__WORKDIR__#${workdir}#g" docker-compose.override.yml
sed -i '' "s#__PHP_CONTAINER__#${container}#g" docker-compose.override.yml
