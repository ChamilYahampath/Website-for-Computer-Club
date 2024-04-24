
--create database 
create database ComputerClub;

--goto database
use ComputerClub;

--create login table
CREATE TABLE login(
  username varchar(50) NOT NULL PRIMARY KEY,
  password varchar(20) NOT NULL
);

--insert values to database
INSERT INTO login VALUES
('user1@gmail.com', 'user1');

select * from login;
