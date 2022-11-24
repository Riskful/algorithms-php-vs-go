.PHONY:
queue-php:
	docker build -t algorithm-queue-php queue/php/.
	clear
	docker run algorithm-queue-php

queue-go:
	docker build -t algorithm-queue-go queue/go/.
	clear
	docker run algorithm-queue-go

stack-php:
	docker build -t algorithm-stack-php stack/php/.
	clear
	docker run algorithm-stack-php

stack-go:
	docker build -t algorithm-stack-go stack/go/.
	clear
	docker run algorithm-stack-go

linked-list-php:
	docker build -t algorithm-linked-list-php linked-list/php/.
	clear
	docker run algorithm-linked-list-php