CREATE TABLE sikayet (
    id INT PRIMARY KEY,
    isim VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    konu VARCHAR(255) NOT NULL,
    mesaj TEXT NOT NULL,
    tarih TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);