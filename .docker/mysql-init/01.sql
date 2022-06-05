# create databases
CREATE DATABASE IF NOT EXISTS homestead CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
CREATE DATABASE IF NOT EXISTS homestead_testing CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

# create user
CREATE USER 'homestead'@'%' IDENTIFIED BY 'secret';

GRANT ALL PRIVILEGES ON homestead.* TO 'homestead'@'%';
GRANT ALL PRIVILEGES ON homestead_testing.* TO 'homestead'@'%';
