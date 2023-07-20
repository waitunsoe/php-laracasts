# php-laracasts

simple &amp; short php lessons from laracasts

## 20. SQL Injection Vulnerabilities Explained

never write sql DIRECTLY like this!

```
$sql = 'SELECT * FROM posts WHERE id = 1';
```

always use PREPARE statement instead!

```
$sql = 'SELECT * FROM posts WHERE id = ?';
```

OR

```
$sql = 'SELECT * FROM posts WHERE id = :id';
```
