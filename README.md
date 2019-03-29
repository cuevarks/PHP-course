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

