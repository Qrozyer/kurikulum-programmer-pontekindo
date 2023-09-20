# application klinik

### description 
we build this app with php v8.2 mysql apache2 on linux mint 22.2

## create database
buat database dalam dbmsmu masing-masing misal di mysql dengan nama sesuai yang diinginkan

## import the sql file
impor rs.sql ke dalam database tersebut

## change the configuration
ubah nama user, password, dan nama database dalam file config yang berada dalam app

### cara agar htaccess berjalan di server apache2
pergi ke apache2.conf yang ada di folder /etc/apache2
cari di baris allowOverride pada directory /var/www jadikan sebagai All (ubah None menjadi All)

lalu jalankan perintah sudo a2enmod rewrite di terminal

lalu restart server apache2nya menjalankan sudo service apache2 restart