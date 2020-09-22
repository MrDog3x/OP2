CREATE TABLE employees(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(250) NOT NULL, 
  tin CHAR(10) NOT NULL, 
  ssn CHAR(9) NOT NULL, 
  
  CONSTRAINT PK_employees PRIMARY KEY(id), 
  CONSTRAINT UQ_employees_tin UNIQUE(tin),
  CONSTRAINT UQ_employees_ssn UNIQUE(ssn)
);