simpeg
=========

Simple Employee Management Applications

Just simple employee management application with CodeIgniter, now with a modern **Gentelella** user interface.

Modernisasi UI
==============

Seluruh tampilan telah dimigrasikan dari Twitter Bootstrap 2 ke template **Gentelella** (Bootstrap 3):

* Layout Gentelella dengan sidebar collapsible, top navigation, dan breadcrumb
* Komponen layout terpusat di `application/views/dashboard_admin/layout/` (`main_header`, `main_footer`, `iframe_header`, `iframe_footer`)
* Halaman login, dashboard, master data, laporan, dan detail pegawai didesain ulang
* Form input/edit dalam popup iframe (Colorbox + jQuery)
* Datepicker menggunakan Flatpickr (locale Indonesia)
* Aset Gentelella, Bootstrap 3, dan Font Awesome dibundel lokal di `asset/gentelella/`
* Kompatibel dengan PHP 8+ (core CodeIgniter 2 telah di-patch, database driver `mysqli`)
