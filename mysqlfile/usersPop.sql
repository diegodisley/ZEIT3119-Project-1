/*
username: john.doe@example.com 				password:john
username: jane.doe@example.com 				password:jane
username: jim.doe@example.com 				password:jim
username: sarah.doe@example.com 			password:sarah
username: mike.doe@example.com 				password:mike
*/
INSERT INTO Users (email, password, first_name, last_name, DoB) VALUES 
('john.doe@example.com', '$2y$10$6x/FtOU8ooOObucIoVBXQuGLlcO3UrW7ig7ioPSemgv2TblevRX4e', 'John', 'Doe', '1990-05-20'),
('jane.doe@example.com', '$2y$10$Fev5NRo4jUQwJycHMHnce.GQlpN0khv0vbN3WPGuQzu5xm0bfGMIm', 'Jane', 'Doe', '1985-12-03'),
('jim.smith@example.com', '$2y$10$2aaY1C22wBb54nNUyOO3YeFkzTzdk3.AEf/DprtPWKKYHj6daTcvq', 'Jim', 'Smith', '1995-02-15'),
('sarah.jones@example.com', '$2y$10$OZhW1x4T6pOLJxXj4jW6aeomzpQSl.Dv/cI2rI1309utrkyr4QXJC', 'Sarah', 'Jones', '1988-08-07'),
('mike.jackson@example.com', '$2y$10$tW9tPa2V8iz7tEUbgpEBFuWNxsGnQUER0AxLEuovHCRGX.xuGnPue', 'Mike', 'Jackson', '1992-11-29');

