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