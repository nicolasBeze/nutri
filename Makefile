COMPOSE = docker-compose
NETWORK = nutri

.PHONY: configure deploy setup start
## Call targets << network >> << proxy >>
configure: network proxy

## Call targets << configure >> << containers >>
start: configure containers

.PHONY: network
## Create the docker network of the project
network:
	@if ! docker network ls -f 'name=$(NETWORK)' | grep -qw $(NETWORK); then \
		printf "\e[33mCreate network $(NETWORK)\e[0m\n"; \
		docker network create $(NETWORK) &> /dev/null; \
		sleep 3; \
	fi

.PHONY: proxy
## Create or start nginx-proxy and connect it to our docker network
proxy:
	@if [ -z $$(docker ps -aqf "name=traefik") ]; then \
		printf "\e[33mCreating proxy container traefik\e[0m\n"; \
		docker run -d \
		  -v /var/run/docker.sock:/var/run/docker.sock \
		  -p 80:80 \
		  -p 8080:8080 \
		  --name traefik \
		  traefik:latest \
		  --api --docker --logLevel=INFO; \
	elif ! docker ps -aqf "name=traefik" --format "{{.Status}}" | grep --quiet 'Up'; then \
		printf "\e[33mStarting proxy container traefik\e[0m\n"; \
		docker start $$(docker ps -aqf "name=traefik"); \
	else \
		printf "\e[33mProxy container traefik is already running\e[0m\n"; \
	fi
	@docker network connect ${NETWORK} traefik &> /dev/null || true
	@printf "\e[32mDon't forget to add project domain(s) in your /etc/hosts file\e[0m\n"

.PHONY: containers
## docker-compose up -d
containers:
	$(COMPOSE) up -d


.PHONY: nfs-mac
## Create a nfs partition for mac users to speed up Docker
nfs-mac:
	@if [ "$$(uname -s)" = "Darwin" ]; then \
		./docker/mac/init-override.sh; \
		./docker/mac/nfs-mac.sh; \
	fi
