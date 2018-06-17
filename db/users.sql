mysql -uroot -p
CREATE USER 'FitnessUser'@'localhost' IDENTIFIED BY '1234';
GRANT ALL ON FitnessDatabase.* TO 'FitnessUser'@'localhost';