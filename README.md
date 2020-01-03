# Test task for company Fly Now Pay Later

## Installation instructions
1) Git clone
2) Install Docker and docker-compose
3) Run ``docker-compose up -d``
4) Open in browser ``http://localhost:8000/`` (if port is used then change it in docker-compose.yml)
5) Run tests: ``docker exec -it rs-test-app php vendor/bin/codecept run``
