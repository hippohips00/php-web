# php-web
php-web

/var/www/html/ 디렉토리 내에 존재하던 php기반 웹페이지 소스 코드들입니다.
http://도메인/index.php으로 접속하면 기본 페이지로 접속할 수 있고, https://도메인/index.php로 접속하면 ssl적용되어 접속 할 수 있습니다.

/etc/apache2/ 디렉토리 내에 있던 서버 설정파일 apache2.conf파일을 첨부했습니다. 
x-frame-options "deny" 헤더를 적용하기 위해 해당파일 155번째 줄을 추가했습니다.
