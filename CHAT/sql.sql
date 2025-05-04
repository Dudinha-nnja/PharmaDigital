use chat_app;
create table chats 
(
    idChat int(10) not null AUTO_INCREMENT,
	nome varchar(100) ,
 	msg varchar(300),
 	dt date,
    PRIMARY key (idChat)

)
ENGINE = INNODB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET=utf8;