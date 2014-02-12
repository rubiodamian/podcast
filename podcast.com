<VirtualHost *:80>
	DocumentRoot "/home/demian/NetBeansProjects/podcast/web"
	DirectoryIndex index.php
	ServerName podcast.com
	<Directory "/home/demian/NetBeansProjects/podcast/web">
		AllowOverride All
		Allow from All
	</Directory>
	Alias /sf /home/demian/NetBeansProjects/podcast/lib/vendor/symfony/data/web/sf
	<Directory "/home/demian/NetBeansProjects/podcast/lib/vendor/symfony/data/web/sf">
	  AllowOverride All
	  Allow from All
	</Directory>
</VirtualHost>
