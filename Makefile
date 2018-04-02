#=== Nanou Kata Helper ===

# Styles
YELLOW=$(shell echo "\033[00;33m")
RED=$(shell echo "\033[00;31m")
RESTORE=$(shell echo "\033[0m")

CURRENT_DIR := $(shell pwd)

check_var = $(if $(strip $(shell echo "$2")),,$(error "$1" is not defined))

.DEFAULT_GOAL := help

.PHONY: help
help:
	@echo ""
	@echo "Nanou available targets:"
	@echo ""
	@echo "$(YELLOW)install$(RESTORE) $(RED) > install your vendors"
	@echo "$(YELLOW)update(RESTORE) $(RED) > update your vendors"

.PHONY: install
install:
	@docker-compose run fpm composer install

.PHONY: update
update:
	@docker-compose run fpm composer update

.PHONY: enter
enter:
	@docker-compose run fpm bash

.PHONY: phpspec-describe
phpspec-describe:
	@docker-compose run fpm vendor/bin/phpspec describe ${CLASS}

.PHONY: phpspec-run-test
phpspec-run-test:
	@docker-compose run fpm vendor/bin/phpspec run test/Unit/${CLASS} -vvv

.PHONY: phpstan
phpstan:
	@docker-compose run fpm vendor/bin/phpstan analyse src/ --level=7
