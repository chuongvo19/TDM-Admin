# Laravel Project - TDM

## ⚙️ Database Configuration

Dự án sử dụng **MySQL** làm cơ sở dữ liệu.  
Thông tin kết nối mặc định được cấu hình trong file `.env` như sau:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=tdm_db
DB_USERNAME=user
DB_PASSWORD=password

URL backend: backend.todolist-manager.com
URL frontend: todolist-manager.com

Container backend: docker exec -it tdm-web-container bash
