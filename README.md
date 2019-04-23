# PHP-course
## Learning PHP

### Database Query

```sql
create schema mytodo collate utf8mb4_general_ci;

create table todos
(
	id int auto_increment
		primary key,
	description text not null,
	completed tinyint(1) null
);
```


[Tutorial for installing PHP using HomeBrew](https://medium.com/@romaninsh/install-php-7-2-on-macos-high-sierra-with-homebrew-bdc4d1b04ea6)

[Tutorial for installing mySQL using HomeBrew](https://medium.com/@at0dd/install-mysql-5-7-on-mac-os-mojave-cd07ec936034)



### Useful Commands:


To start mySQL server:
> mysqld


To start PHP server for testing:
> php -S localhost:8888


Managing mySQL:
> mysql -u /username/ -p /password/
