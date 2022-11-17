all: 
	@docker-compose -f ./srcs/docker-compose.yml up -d
down:
	@docker-compose -f ./srcs/docker-compose.yml down
ps:
	@docker-compose -f ./srcs/docker-compose.yml ps
re:
	@docker-compose -f srcs/docker-compose.yml up --build
