# php-web
php-web

/var/www/html/ 디렉토리 내에 존재하던 php기반 웹페이지 소스 코드들입니다.
http://도메인으로 접속하면 게시판 리스트 페이지로 접속할 수 있고, https://도메인으로 접속하면 ssl적용되어 https통신을 할 수 있습니다.

헤더 적용을 하지 못했던 iframe기능은 이 list페이지 아래부분에 있습니다. 
로그인없이 사용할 수 있고, url을 입력하면 해당 페이지를 보여줍니다.

/etc/apache2/ 디렉토리 내에 있던 서버 설정파일 apache2.conf파일을 첨부했습니다. 
x-frame-options "deny" 헤더를 적용하기 위해 해당파일 155번째 줄을 추가했습니다.
