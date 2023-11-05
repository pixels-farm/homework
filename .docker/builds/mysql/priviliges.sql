CREATE USER 'dirigent'@'%' IDENTIFIED WITH caching_sha2_password BY 'd!r1g3nT';
GRANT ALL PRIVILEGES ON *.* TO 'dirigent'@'%';
FLUSH PRIVILEGES;