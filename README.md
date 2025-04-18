<div id="fr">

<details open>
<summary><strong>🇫🇷 Français</strong></summary>

<br>
# 🚗 RentACar


RentACar est une application web développée avec **Laravel 12.9.0** et **Tailwind CSS**, qui permet aux utilisateurs de consulter une liste de véhicules, de filtrer par catégorie et de réserver un véhicule en quelques clics.

---

## ✨ Fonctionnalités

- 🔍 Filtrage des véhicules par catégorie
- 📄 Affichage des détails techniques de chaque véhicule
- 📸 Galerie d’images dynamique (changement d’image principale au clic)
- 📅 Formulaire de réservation avec calcul automatique du prix
- 📧 Envoi automatique d’un email de confirmation après réservation
- 💅 UI responsive avec TailwindCSS

---

## 🛠 Stack technique

- PHP 8.2
- Laravel 12.9.0
- Tailwind CSS 3.x
- MAMP
- MySQL

---

## 🚀 Installation locale

### 1. **Cloner le projet**

```bash
git clone https://github.com/ton-utilisateur/rentacar.git
cd rentacar
```

### 2. **Installer les dépendances PHP**
```bash
composer install
```

### 3. **Copier le fichier .env et configurer la base de données**
```bash
cp .env.example .env
```
Modifie les lignes suivantes dans .env en fonction de ta configuration MAMP :
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rentacar
DB_USERNAME=root
DB_PASSWORD=root
```

### 4. **Générer la clé de l'application**
```bash
php artisan key:generate
```

### 5. **Lancer les migrations et les seeders**
```bash
php artisan migrate --seed
```

### 6. **Démarrer le serveur**
```bash
php artisan serve
```
Accède ensuite à l’application via : http://127.0.0.1:8000

## 📁 Arborescence du projet
```bash
rentacar/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── images/
├── resources/
│   ├── views/           # fichiers Blade (accueil, véhicules, réservation)
│   └── css/
├── routes/
│   └── web.php
├── storage/
├── .env
├── composer.json
└── tailwind.config.js
```

</details>
</div>

---

<div id="en">

<details>
<summary><strong>🇬🇧 English</strong></summary>

<br>


# 🚗 RentACar

RentACar is a web application built with **Laravel 12.9.0** and **Tailwind CSS**, allowing users to browse vehicles, filter them by category, and make a reservation in just a few clicks.

---

## ✨ Features

- 🔍 Filter vehicles by category
- 📄 Display technical specifications for each car
- 📸 Dynamic image gallery (click thumbnail to change main image)
- 📅 Reservation form with automatic price calculation
- 📧 Automatic email confirmation after booking
- 💅 Responsive UI with TailwindCSS

---

## 🛠 Tech Stack

- PHP 8.2
- Laravel 12.9.0
- Tailwind CSS 3.x
- MAMP
- MySQL

---

## 🚀 Local Installation

### 1. Clone the repository
```bash
git clone https://github.com/your-username/rentacar.git
cd rentacar
```
### 2. Install PHP dependencies
```bash
composer install
```

### 3. Copy .env and configure your DB
```bash
cp .env.example .env
```

Update the `.env` file with your MAMP DB settings:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rentacar
DB_USERNAME=root
DB_PASSWORD=root
```


### 4. Generate app key
```bash
php artisan key:generate
```

### 5. Run migrations and seeders
```bash
php artisan migrate --seed
```

### 6. Start the development server
```bash
php artisan serve
```

Visit the app at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📁 Project Structure

```bash
rentacar/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── images/
├── resources/
│   ├── views/           # Blade templates (home, vehicles, reservation)
│   └── css/
├── routes/
│   └── web.php
├── storage/
├── .env
├── composer.json
└── tailwind.config.js
```
</details>
</div>  
