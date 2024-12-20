.PHONY: tests

PHP_BIN=php
MYSQL_BIN=mysql
COMPOSER_PHAR=composer
current_dir=$(notdir $(mkfile_dir))

TESTS_DIR=./tests
VENDOR_DIR=./vendor
COVERAGE_DIR=$(TESTS_DIR)/reports/coverage
SQL_DIR=sql
REPORTS_DIR=./tools/reports

CP_BIN=/bin/cp
PHPUNIT_BIN=$(VENDOR_DIR)/bin/phpunit
PHPCS_BIN=$(VENDOR_DIR)/bin/phpcs
PHPMD_BIN=$(VENDOR_DIR)/bin/phpmd
PHPCBF_BIN=$(VENDOR_DIR)/bin/phpcbf
PSALM_BIN=$(VENDOR_DIR)/bin/psalm
PHPSTAN_BIN=$(VENDOR_DIR)/bin/phpstan
PHPMETRICS_BIN=$(VENDOR_DIR)/bin/phpmetrics

PHPCS_RULESET=vendor/flyeralarm/php-code-validator/ruleset.xml
PHPCS_RULESET=phpcs.xml
PHPCS_OPTIONS=--runtime-set ignore_warnings_on_exit true --encoding=UTF-8 --extensions=php -p
PHPCS_IGNORE="(staging.config.php|production.config.php)"

list: 			# Display this list
	@cat Makefile \
		| grep "^[a-z0-9_]\+:" \
		| sed -r "s/:[^#]*?#?(.*)?/\r\t\t\t\t-\1/" \
		| sed "s/^/ • make /" \
		| sort

composer: install

install:
	@$(COMPOSER_PHAR) install 2>&1

update:
	@$(COMPOSER_PHAR) update

autoloader:
	@$(COMPOSER_PHAR) dump-autoload

sniff:
	@$(PHPCS_BIN) $(PHPCS_OPTIONS) --standard=$(PHPCS_RULESET) src public/ --ignore=$(PHPCS_IGNORE)
	@$(PHPCS_BIN) $(PHPCS_OPTIONS) --standard=$(PHPCS_RULESET) tests/

beautify:
	@$(PHPCBF_BIN) $(PHPCS_OPTIONS) --standard=$(PHPCS_RULESET) src public/ --ignore=$(PHPCS_IGNORE)
	@$(PHPCBF_BIN) $(PHPCS_OPTIONS) --standard=$(PHPCS_RULESET) tests/

php-stan-analyse:
	@$(PHPSTAN_BIN) analyse -c tools/phpstan.neon

report-html:
	@$(PHPMETRICS_BIN) --report-html=$(REPORTS_DIR)/phpmetrics_$(shell date +%Y-%m-%d_%H-%M-%S) ./

################### Composer ###################

COMPOSE_FILE = docker-compose.yml

ci:			# composer install dev|stg
	CMD=install docker compose -f $(COMPOSE_FILE) up composer
	@echo "$(GREEN)Done starting for $(COMPOSE_FILE) composer install$(END_COLORING)"

cu:			# composer  update dev|stg
	CMD=update docker compose -f $(COMPOSE_FILE) up composer
	@echo "$(GREEN)Done starting for $(COMPOSE_FILE) composer update$(END_COLORING)"

ca:			# composer dump-autoload dev|stg
	CMD=dump-autoload docker compose -f $(COMPOSE_FILE) up composer
	@echo "$(GREEN)Done starting for $(COMPOSE_FILE) composer dump-autoload$(END_COLORING)"