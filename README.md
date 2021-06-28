<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


### Hướng dẫn setup project
 -  Vào thư mục project, tìm đến file .env và sửa `DB_HOST=mariadb`  thành `DB_HOST=127.0.0.1` nếu dùng MySQL, còn nếu dùng MariaDB thì giữ nguyên.
  -  Vào phpMyAdmin, thêm database tên `db_role`
  - Chạy lệnh `composer install`
  - Tạo các bảng có sẵn bằng lệnh `php artisan migrate`
  - Chạy DatabaseSeeder bằng lệnh `php artisan db:seed`
 ### Đường dẫn đăng nhập
 ```
localhost/admin/signin
```

### Thông tin các user
|STT  |Tên  |Email |Mật khẩu | Vai trò|
|--|--|--|--|--|
|1|Admin  |admin@role.test |1234567890| Admin|
|2|Conten  |content@role.test |1234567890| Content|
|3|Writer  |admin@role.test |1234567890| Writer|

### Thông tin về vai trò
|STT  |Vai trò  |Quyền truy cập |
|--|--|--|
|1|Admin  |`Xem người dùng`, `Thêm người dùng`, `Sửa người dùng`, `Xóa người dùng`,  `Xem vai trò`, `Thêm vai trò`,`Sửa vai trò`,`Xóa vai trò`,`Xem quyền`,`Thêm quyền`,`Sửa quyền`,`Xóa quyền`  |
|2|Content|`Xem vai trò`, `Thêm vai trò`,`Sửa vai trò`,`Xóa vai trò`|
|3| Writer |`Xem quyền`,`Thêm quyền`,`Sửa quyền`,`Xóa quyền`|

### Lưu ý
Mình gọi **Role** là **vai trò** vì User sẽ được chia vai trò trên website, còn **Permission**  là **quyền truy cập** vào các trang trên website. Tức là ứng với từng vai trò sẽ có những quyền truy cập tương ứng.

### Tham khảo
**Giao diện: SB Admin 2 (HTML/CSS/JAVASCRIPT)**

`https://startbootstrap.com/template/sb-admin`

**Kiến thức: Laravel Role & Permission Tutorial (Hướng dẫn phân quyền trong Laravel) của anh [Đỗ Đức](https://www.facebook.com/profile.php?id=100010416943572)**

**Video hướng dẫn tại:**
`https://www.youtube.com/watch?v=hGtxcpxlTts&list=PL3V6a6RU5ogGE6aGFKSZu6l73J-hJTifd`

**Phiên bản Laravel đang sử dụng: 8.x**
