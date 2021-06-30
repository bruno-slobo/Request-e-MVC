create database Bruno;
use Bruno;

create table User( 
	id int primary key auto_increment, 
	email varchar(50) not null,
	senha varchar(255) not null
)engine=innodb; 	

INSERT INTO User(id, email, senha) Values 
				 (1, "Bruno@gmail.com" , ("111"));
                 
select * from User;
                 
/*drop database Bruno;*/