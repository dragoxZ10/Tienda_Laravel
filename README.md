<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

# Proyecto Tienda Prueba con Laravel y Livewire

Este proyecto está desarrollado en **Laravel** y utiliza **Livewire** para la construcción de interfaces dinámicas.

---

## 🚀 Requisitos previos

Asegúrate de tener instalados:

- [Composer](https://getcomposer.org/)
- [Node.js y NPM](https://nodejs.org/)
- [Xammp] (https://www.apachefriends.org/es/index.html) 

---

## A. Instalación

**1. Clona el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/tu-proyecto.git
   cd tu-proyecto
```

2. Instala las dependencias de PHP:

   ```bash
   composer install
   ```

3. Instala las dependencias de Node:

   ```bash
   npm install
   ```

4. Copia el archivo de entorno y configura tu base de datos:

   ```bash
   cp .env.example .env
   ```

   Edita el archivo `.env` con tus credenciales.

5. Genera la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

6. Ejecuta las migraciones:

   ```bash
   php artisan migrate
   ```

---

## B. Ejecución del proyecto

En dos terminales diferentes:

* Compilar los assets:

  ```bash
  npm run dev
  ```

* Levantar el servidor de Laravel:

  ```bash
  php artisan serve
  ```

Luego abre en tu navegador:

👉 [http://localhost:8000](http://localhost:8000)

---

## 📚 Tecnologías usadas

* **Laravel** – Framework backend
* **Livewire** – Interfaces dinámicas sin JavaScript complejo
* **TailwindCSS / Vite** – Estilos y compilación de assets

---

## 📄 Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).

```
