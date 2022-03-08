CREATE TABLE users(
    users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    users_name TINYTEXT not null,
    users_email TINYTEXT not null,
    users_pwd LONGTEXT not null,
    users_bday DATE NOT NULL,
    users_created DATETIME not null
)

CREATE TABLE users(
    users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    users_name TINYTEXT not null,
    users_position TINYTEXT not null,
    users_office LONGTEXT not null,
    users_age DATE NOT NULL,
    users_start_date DATETIME not null
    
)
