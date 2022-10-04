.PHONY: queue-php
queue-php:
	docker build -t algorithm-queue-php queue/php/.
	clear
	docker run algorithm-queue-php

.PHONY: queue-go
queue-go:
	docker build -t algorithm-queue-go queue/go/.
	clear
	docker run algorithm-queue-go

.PHONY: stack-php
stack-php:
	docker build -t algorithm-stack-php stack/php/.
	clear
	docker run algorithm-stack-php

.PHONY: stack-go
stack-go:
	docker build -t algorithm-stack-go stack/go/.
	clear
	docker run algorithm-stack-go