Yii2 project template


## My nginx configuration
```php
  server {

	set $root_path  /var/www/Template;
    root         $root_path;

	index index.php index.html;

	server_name template.localhost;

    location ~ \.php$ {
		try_files  $uri $root_path/admin/web$uri =404;
		include  /etc/nginx/fastcgi_params;
		fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;
		fastcgi_pass 127.0.0.1:9000;
	}


    location /admin {
	        alias  $root_path/admin/web;
	        try_files  $uri /admin/web/index.php$is_args$args;
	}

	location ~ ^/api {
		root $root_path/api/web;

		try_files $uri /api/web/index.php$is_args$args;
	}

		location / {
		root  $root_path/public;

		try_files $uri /index.html;
	}
}
```
