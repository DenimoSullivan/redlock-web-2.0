CREATE TABLE users(
    ID INT PRIMARY KEY,
    Nama VARCHAR(100) NOT NULL,
    Alamat VARCHAR(100) NOT NULL,
    Jabatan VARCHAR(50) NOT NULL
);

INSERT INTO users (ID, Nama, Alamat, Jabatan)
VALUES
  (1, 'Alice Brown', '521 Pine St', 'Manager'),
  (2, 'Jane Smith', '456 Elm St', 'Supervisor'),
  (3, 'Mike Johnson', '789 Oak St', 'Coordinator'),
  (4, 'Ella Watson', '77 St.Elmo St', 'Executive'),
  (5, 'Alex Johanson', '901 Roco St', 'Team Leader');
