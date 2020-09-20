# Contact Form Package

<a href="https://github.com/abhisanGhimire/package_development_for_laravel/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/abhisanGhimire/package_development_for_laravel?style=for-the-badge"></a>
<a href="https://github.com/abhisanGhimire/package_development_for_laravel/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/abhisanGhimire/package_development_for_laravel?style=for-the-badge"></a>
<a href="https://github.com/abhisanGhimire/package_development_for_laravel/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/abhisanGhimire/package_development_for_laravel?style=for-the-badge"></a>

## Sends email to admin and save in database, it uses bulma CSS for front-end.

To use the package:

`composer require abhisan/contact_with_bulma`

Create a database:

`php artisan migrate`

## To setup mail with mailtrap.io

In .env file :

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=mailtrap_port(25 or 465 or 587 or 2525)
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=TLS
```

## To setup your address and social media links

In .env file :

```
SEND_EMAIL_TO=your_email_address
FB_ADDRESS=your_fb_profile_link
INSTA_ADDRESS=your_insta_profile_link
TWITTER_ADDRESS=your_twitter_link
ADDRESS= your_address
```

## To publish config and views

`php artisan vendor:publish --provider="abhisanGhimire\Contact\ContactServiceProvider"`

## Extra Info

You can pass raw HTML in your ADDRESS if you want to display address in any specific order

Example:

```
ADDRESS= Kathmandu<br>Nepal
```
