#make start (symfony)
start:
	symfony server:start --no-tls

#make watch (npm)
watch:
	npm run watch

#make live
live:
	npm run dev-server

#make clean
clean:
	bin/console cache:clear

