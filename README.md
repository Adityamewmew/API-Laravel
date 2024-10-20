PRAKTIKUM

![Screenshot 2024-10-20 100801](https://github.com/user-attachments/assets/ed3dcd59-829d-4ee0-b393-6c7c71ffb04f)
![Screenshot 2024-10-20 100848](https://github.com/user-attachments/assets/146d2972-4b1f-4182-b4b3-3a735dc48968)

Buat migration dan model


![Screenshot 2024-10-20 101904](https://github.com/user-attachments/assets/fd02c5b7-6b92-4f53-8eef-3023047727f1)
![Screenshot 2024-10-20 102649](https://github.com/user-attachments/assets/83d0784c-acbf-44c1-9d0c-7859a75aff7a)
![Screenshot 2024-10-20 102656](https://github.com/user-attachments/assets/ce2a71df-0db8-40f0-ae73-f4fd77c04c73)
![Screenshot 2024-10-20 104136](https://github.com/user-attachments/assets/cd694fda-f759-47f7-83e1-4eb21709e4a5)
![Screenshot 2024-10-20 104258](https://github.com/user-attachments/assets/ce989cfe-2eba-483b-82c0-7445821c78de)
![Screenshot 2024-10-20 104820](https://github.com/user-attachments/assets/a66239eb-526a-4231-91fb-7fc36ca27203)
![Screenshot 2024-10-20 105125](https://github.com/user-attachments/assets/cbc4f9d7-c06e-4274-8913-1d93263e37f4)

Testing API
GET
![Screenshot 2024-10-20 123145](https://github.com/user-attachments/assets/3d0b6460-fc47-42ee-b8fc-6ef5c43980ca)
POST
![Screenshot 2024-10-20 123433](https://github.com/user-attachments/assets/a09cf7fa-0c7e-4a7d-97e2-05f73d1ac611)
DELETE
![Screenshot 2024-10-20 123748](https://github.com/user-attachments/assets/1f578cb6-d6ee-4736-b76b-1b11f11365fb)
PUT
![Screenshot 2024-10-20 123651](https://github.com/user-attachments/assets/f9d936d8-cbbf-4f59-977a-47705781e5c6)

Tugas

Menambahkan validasi ,nama buku tidak boleh kosong,harga min 1000
![image](https://github.com/user-attachments/assets/80adc8ef-22b0-469b-bd02-5a89abe4464d)

Membuat endpoint search

![Screenshot 2024-10-20 144728](https://github.com/user-attachments/assets/641c7011-ebfc-476b-9f9f-9c092cec6a3b)
Saat merancang endpoint pencarian buku, kita perlu memperhatikan beberapa hal. Pertama, untuk performa, penting untuk membuat indeks pada kolom yang sering dicari, seperti judul dan kategori_id, serta menambahkan pagination untuk menampilkan hasil, misalnya 10 buku per halaman. Dari sisi skalabilitas, pastikan query yang digunakan efisien agar server tetap responsif saat data bertambah. Untuk pengalaman pengguna, berikan umpan balik jika tidak ada buku yang ditemukan dan tambahkan opsi pencarian berdasarkan judul dan penulis. Dengan cara ini, kita dapat menciptakan sistem pencarian buku yang efektif dan user-friendly.

Menggunakan ngrok untuk akses 

![image](https://github.com/user-attachments/assets/c3d62143-9810-488d-a628-7e753814f055)
![Screenshot 2024-10-20 144451](https://github.com/user-attachments/assets/9f62fd0e-62f6-4ac3-a598-412af1e8c240)

https://2157-103-67-84-138.ngrok-free.app/api/bukus

